var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var browserSync = require('browser-sync').create();
var sourcemaps = require('gulp-sourcemaps');
var minify = require('gulp-minify');

gulp.task('browserSync', function(){
    browserSync.init({
        proxy: 'http://localhost/'
    })
});

gulp.task('sass', function(){
    return gulp.src('sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.stream())
});

gulp.task('minify-js', function() {
    gulp.src('./js/*.js')
    .pipe(minify({
        ext: {
            src: 'main.js',
            min: '.min.js'
        } 
    }))
    .pipe(gulp.dest('js/min/'))
});

gulp.task('watch', function(){
    gulp.watch('sass/**/*.scss', gulp.series('sass'));
    gulp.watch('sass/**/*.scss', gulp.series('browserSync'));
    gulp.watch('sass/**/*.scss', browserSync.reload);
    gulp.watch('./js/*.js', gulp.series('minify-js'));
});