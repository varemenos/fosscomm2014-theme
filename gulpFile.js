var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-ruby-sass');
var livereload = require('gulp-livereload');

gulp.task('sass', function(){
	gulp.src('css/style.scss')
		.pipe(watch())
		.pipe(sass({
			unixNewlines: true,
			style: 'expanded',
			noCache: true,
		}))
		.pipe(gulp.dest('.'))
		.pipe(livereload());
});

gulp.task('default', function(){
});