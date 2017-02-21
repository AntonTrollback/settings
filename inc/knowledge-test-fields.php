<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_kunskapstest',
    'title' => 'Kunskapstest',
    'fields' => array (
      array (
        'key' => 'field_57bacadbc5759',
        'label' => '',
        'name' => 'show_knowledge_test',
        'type' => 'true_false',
        'message' => 'Visa kunskapstestet',
        'default_value' => 0,
      ),
      array (
        'key' => 'field_57bb1342efca1337',
        'label' => 'Introtext',
        'name' => 'knowledge_intro',
        'type' => 'textarea',
        'instructions' => '',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => 'Håll den kort :)',
        'maxlength' => '',
        'rows' => '2',
        'formatting' => 'none',
      ),
      array (
        'key' => 'field_57bac9941c673',
        'label' => 'Frågor',
        'name' => 'knowledge_questions',
        'type' => 'textarea',
        'instructions' => 'Dela upp frågorna med "***"',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'formatting' => 'br',
      ),
      array (
        'key' => 'field_57bb1342efca1',
        'label' => 'Ordbeskrivningar',
        'name' => 'knowledge_explainations',
        'type' => 'textarea',
        'instructions' => 'Ord: Beskrivning ... (dela upp med kolon).<br>
  Dela upp med "***"',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'formatting' => 'none',
      ),
      array (
        'key' => 'field_57bb0c380c13c',
        'label' => '',
        'name' => 'show_advanced',
        'type' => 'true_false',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'message' => 'Visa avancerade inställningar ✿',
        'default_value' => 0,
      ),
      array (
        'key' => 'field_57bb0dffff536',
        'label' => '1',
        'name' => '',
        'type' => 'message',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'message' => '<h2>Resultat ett (lägst)</h2>',
      ),
      array (
        'key' => 'field_57bb145a41699',
        'label' => '',
        'name' => 'percentage_1',
        'type' => 'number',
        'instructions' => 'Procent',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => 10,
        'placeholder' => 10,
        'prepend' => '',
        'append' => '%',
        'min' => 0,
        'max' => 100,
        'step' => 5,
      ),
      array (
        'key' => 'field_57bb0c810c13d',
        'label' => 'Resultattext',
        'name' => 'result_1',
        'type' => 'wysiwyg',
        'required' => 1,
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_57bb0e497bcb4',
        'label' => '2',
        'name' => '',
        'type' => 'message',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'message' => '<h2>Resultat två</h2>',
      ),
      array (
        'key' => 'field_57bb142e41698',
        'label' => '',
        'name' => 'percentage_2',
        'type' => 'number',
        'instructions' => 'Procent',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => 25,
        'placeholder' => 25,
        'prepend' => '',
        'append' => '%',
        'min' => 0,
        'max' => 100,
        'step' => 5,
      ),
      array (
        'key' => 'field_57bb0cbf0c13e',
        'label' => 'Resultattext',
        'name' => 'result_2',
        'type' => 'wysiwyg',
        'required' => 1,
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_57bb0e66f7256',
        'label' => '3',
        'name' => '',
        'type' => 'message',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'message' => '<h2>Resultat tre</h2>',
      ),
      array (
        'key' => 'field_57bb141e41697',
        'label' => '',
        'name' => 'percentage_3',
        'type' => 'number',
        'instructions' => 'Procent',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => 50,
        'placeholder' => 50,
        'prepend' => '',
        'append' => '%',
        'min' => 0,
        'max' => 100,
        'step' => 5,
      ),
      array (
        'key' => 'field_57bb0d020c13f',
        'label' => 'Resultattext',
        'name' => 'result_3',
        'type' => 'wysiwyg',
        'required' => 1,
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_57bb140241696',
        'label' => '',
        'name' => 'percentage_4',
        'type' => 'number',
        'instructions' => 'Procent',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => 75,
        'placeholder' => 75,
        'prepend' => '',
        'append' => '%',
        'min' => 0,
        'max' => 100,
        'step' => 5,
      ),
      array (
        'key' => 'field_57bb0e59f7255',
        'label' => '4',
        'name' => '',
        'type' => 'message',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'message' => '<h2>Resultat fyra</h2>',
      ),
      array (
        'key' => 'field_57bb0d1a0c141',
        'label' => 'Resultattext',
        'name' => 'result_4',
        'type' => 'wysiwyg',
        'required' => 1,
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'yes',
      ),
      array (
        'key' => 'field_57bb0f2785231',
        'label' => '5',
        'name' => '',
        'type' => 'message',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'message' => '<h2>Resultat fem (högst)</h2>',
      ),
      array (
        'key' => 'field_57bb13aa41695',
        'label' => '',
        'name' => 'percentage_5',
        'type' => 'number',
        'instructions' => 'Procent',
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => 90,
        'placeholder' => 90,
        'prepend' => '',
        'append' => '%',
        'min' => 0,
        'max' => 100,
        'step' => 5,
      ),
      array (
        'key' => 'field_57bb0d290c143',
        'label' => 'Resultattext',
        'name' => 'result_5',
        'type' => 'wysiwyg',
        'required' => 1,
        'conditional_logic' => array (
          'status' => 1,
          'rules' => array (
            array (
              'field' => 'field_57bacadbc5759',
              'operator' => '==',
              'value' => '1',
            ),
            array (
              'field' => 'field_57bb0c380c13c',
              'operator' => '==',
              'value' => '1',
            ),
          ),
          'allorany' => 'all',
        ),
        'default_value' => '',
        'toolbar' => 'basic',
        'media_upload' => 'yes',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'default',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}

?>
