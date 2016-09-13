<?php

function get_knowledge_test_questions() {
  $questions = explode('***', get_field('knowledge_questions'));
  $questions = add_knowledge_test_explainations($questions);

  return $questions;
}

function add_knowledge_test_explainations($questions) {
  $link_template = '<div><button data-explaination="%s">%s</button></div>';
  $explainations_prepared = array();
  $explainations = explode('***', get_field('knowledge_explainations'));

  foreach ($explainations as $explaination) {
    $explaination_splitted = explode(':', $explaination);
    $explainations_prepared[trim($explaination_splitted[0])] = trim($explaination_splitted[1]);
  }

  foreach ($questions as $question_key => $question) {
    foreach ($explainations_prepared as $keyword => $explaination) {
      $found = (strpos($question, $keyword) !== false) ? true : false;

      if ($found) {
        $replacement = sprintf($link_template, $explaination, $keyword);
        $questions[$question_key] = str_replace($keyword, $replacement, $question);
      }
    }
  }

  return $questions;
}

function get_knowledge_test_thresholds() {
  return array(
    array(
      'percentage' => get_field('percentage_1'), 'text' => get_field('result_1')
    ),
    array(
      'percentage' => get_field('percentage_2'), 'text' => get_field('result_2')
    ),
    array(
      'percentage' => get_field('percentage_3'), 'text' => get_field('result_3')
    ),
    array(
      'percentage' => get_field('percentage_4'), 'text' => get_field('result_4')
    ),
    array(
      'percentage' => get_field('percentage_5'), 'text' => get_field('result_5')
    )
  );
}

function get_knowledge_test_level() {
  $questions = get_knowledge_test_questions();
  $questions_steps = 5;
  $questions_count = count($questions);
  $answers_score = 0;
  $answers_percentage_score = 0;
  $answers_thresholds = array_reverse(get_knowledge_test_thresholds(), true);
  $level = 1;

  for ($i = 1; $i <= $questions_count; $i++) {
    $answers_score_current = isset($_POST["question_{$i}"]) ? (int)$_POST["question_{$i}"] : 0;
    $answers_score += $answers_score_current;
  }

  $answers_percentage_score = ($answers_score / ($questions_steps * $questions_count) * 100);

  foreach ($answers_thresholds as $key => $answers_threshold) {
    if ($answers_percentage_score >= $answers_threshold['percentage']) {
      $level = $key + 1;
      break;
    }
  }

  return $level;
}

function catch_knowledge_test_submission() {
  $submit = isset($_POST['action']) && $_POST['action'] === 'submit_knowledge_test';
  $score = isset($_GET['test_score']) ? (int)$_GET['test_score'] : false;
  $result = get_knowledge_test_thresholds();

  if (isset($_GET['test_score']) && ($score > count($result) || $score < 1)) {
    wp_redirect(get_permalink());
    exit; 
  }

  if ($submit) {
    $level = get_knowledge_test_level();
    wp_redirect("?test_score={$level}");
    exit;
  }
}
add_action('wp', 'catch_knowledge_test_submission');

function get_knowledge_test_success() {
  $result = get_knowledge_test_thresholds();
  $score = isset($_GET['test_score']) ? (int)$_GET['test_score'] : false;
  $body = $result[$score - 1];

  return array(
    "body" => $body['text']
  );
}

function knowledge_test() {
  $show_score = isset($_GET['test_score']);

  if ($show_score) {
    set_query_var('knowledge_test_success', get_knowledge_test_success());
    partial('knowledge-test-success');
  } else {
    set_query_var('knowledge_test', get_knowledge_test_questions());
    partial('knowledge-test');
  }
}

?>