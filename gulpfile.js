// Define variables
var gulp = require('gulp'),
	postcss = require('gulp-postcss'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	autoprefixer = require('autoprefixer');

// CSS task
// Run postcss plugins
// Run SCSS
gulp.task('css', function(){
	var processors = [
		autoprefixer({ browsers: ['last 2 versions'], flexbox: false })
	];
	return gulp.src('assets/scss/**/*.scss')
	.pipe(sass({
		outputStyle: 'expanded',
		indentWidth: 4
	}).on('error', sass.logError))
	.pipe(postcss(processors))
	.pipe(concat('style.css'))
	.pipe(gulp.dest(''));
});

// CSS Watch task
// Watch for changes to any SCSS files & run default gulp task
gulp.task('css-watch', function(){
	gulp.watch('assets/scss/**/*.scss', ['css']);
});

// Extend default Gulp task
gulp.task('default', ['css', 'css-watch']);
