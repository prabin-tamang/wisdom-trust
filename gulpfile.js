// If you're interested in automating more control, check out gulpjs.com for more dependencies
// This is meant as a starting point. You can do a LOT more with gulpjs than this

// Requiring dependencies here, make sure to add them via the terminal
var gulp   = require('gulp'),
    sass   = require('gulp-sass'),
    concat = require('gulp-concat'),
    minify = require('gulp-minify'),
    browserSync = require('browser-sync').create(),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCSS = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin');

    gulp.task('browserSync', function() {
        browserSync.init({
            proxy: 'http://www.thewisdomtrust.org/'
        })
    })

// Need to create a /css folder and a /sass folder inside the /css folder
gulp.task('build-that-css', function() {
  return gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(cleanCSS({compatibility : 'ie8'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({
        stream: true
    }))
});
// Obviously enqueue this new css file "main.css" in your functions.php

gulp.task('compress-that-js', function() {
  gulp.src('./js/*.js')
    .pipe(minify({
    	ext: {
    		src: 'main.js', // create main.js for all your extra theme JS
    		min: '.min.js'
    	} 
    }))
    .pipe(gulp.dest('js/min/'))
	// enqueue this minified file in your functions.php file 
});

gulp.task('imagemin', function () {
    gulp.src('./assets/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./assets/images'))
});

// Gulp is watching you and your coding with the command: gulp watch
gulp.task('watch',['browserSync', 'build-that-css', 'compress-that-js', 'imagemin'], function() {
  gulp.watch('sass/**/*.scss', ['build-that-css']);
  gulp.watch('./js/*.js', ['compress-that-js']);
  gulp.watch('sass/**/*.scss', browserSync.reload);
  
});

gulp.task('default', ['watch']);