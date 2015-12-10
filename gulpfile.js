/**
* @Author Carter Hay 
* 
*/

var gulp = require('gulp'),
gutil = require('gulp-util'),
livereload = require('gulp-livereload');

gulp.task('reload', function () {
  livereload.reload();
});

gulp.task('watch', function () {
  livereload.listen();
  gulp.watch('src/*', ['reload']);
});

gulp.task('default', ['watch']);
