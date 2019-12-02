'use strict';
//CSS and JS compilers
const gulp  = require('gulp');
const sass  = require('gulp-sass');

const scssPath = "../scss/**/*.scss";

const cssDest = "../css";

gulp.task("sass", function () {
  return gulp.src(scssPath)
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest(cssDest));
});

gulp.task('default', function () {
  gulp.watch(scssPath, ['sass']);
});
