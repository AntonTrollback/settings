import fs from 'fs';
import gulp from 'gulp';
import header from 'gulp-header';
import cssnext from 'gulp-cssnext';
import eslint from 'gulp-eslint';
import rename from 'gulp-rename';
import shell from 'gulp-shell';

var lintPattern = [
  'src/scripts/**/*.js',
  '!src/scripts/jspm_packages/**/*',
  '!src/scripts/config.js',
  '!src/scripts/settings.js'
];

var cssPattern = [
  'src/styles/**/*.css',
  '!src/styles/settings.css'
];

gulp.task('css', () => {
  return gulp.src(['src/styles/index.css'])
    .pipe(cssnext({
      compress: { comments: { removeAll: true } },
      url: { url: (url) => { return url; } }
    }))
    .pipe(rename('settings.css'))
    .pipe(header(fs.readFileSync('style.css', 'utf8')))
    .pipe(gulp.dest('src/styles/'))
});

gulp.task('eslint', () => {
  return gulp.src(lintPattern)
    .pipe(eslint())
    .pipe(eslint.format());
});

gulp.task('js', shell.task('npm run bundle-javascript'));

gulp.task('watch', () => {
  gulp.watch(lintPattern, ['eslint', 'js']);
  gulp.watch(cssPattern, ['css']);
});

gulp.task('build', ['css', 'eslint', 'js']);

gulp.task('default', ['build']);
