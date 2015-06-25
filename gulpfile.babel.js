import fs from 'fs';
import gulp from 'gulp';
import header from 'gulp-header';
import cssnext from 'gulp-cssnext';
import jshint from 'gulp-jshint';
import rename from 'gulp-rename';
import shell from 'gulp-shell';

var jshintPattern = [
  'js/**/*.js',
  '!js/jspm_packages/**/*'
];

var cssPattern = [
  'css/**/*.css'
];

var filesPattern = [
  'img/**/*.{jpg,png,gif,svg}'
]

gulp.task('css', () => {
  return gulp.src(['css/app.css'])
    .pipe(cssnext({
      compress: { comments: { removeAll: true } },
      url: { url: (url) => { return url; } }
    }))
    .pipe(rename('settings.css'))
    .pipe(header(fs.readFileSync('style.css', 'utf8')))
    .pipe(gulp.dest('dist/'))
});

gulp.task('jshint', () => {
  return gulp.src(jshintPattern)
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

gulp.task('js', shell.task('npm run bundle-javascript'));

gulp.task('copyfiles', () => {
  return gulp.src(filesPattern)
    .pipe(gulp.dest('dist/'));
});

gulp.task('watch', () => {
  gulp.watch(jshintPattern, ['jshint', 'js']);
  gulp.watch(cssPattern, ['css']);
  gulp.watch(filesPattern, ['copyfiles']);
});

gulp.task('build', ['css', 'jshint', 'js', 'copyfiles']);

gulp.task('default', ['build']);