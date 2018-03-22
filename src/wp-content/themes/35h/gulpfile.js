var gulp         = require('gulp');

var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssnano      = require('gulp-cssnano');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');
var plumber      = require('gulp-plumber');
var rename       = require('gulp-rename');

var source       = './';

gulp.task('default', ['css', 'js']);

gulp.task('watch', function () {
    gulp.watch(source + '/css/scss/**/*.scss', ['css']);
    gulp.watch(source + '/javascript/**/*.js',     ['js']);
});

gulp.task('css', function() {
    return gulp.src(source + '/css/scss/app.scss')
    .pipe(plumber())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
        browsers: ['last 2 versions', '> 1%', 'Explorer 7', 'Android >= 2', 'Safari > 3'],
    }))
    .pipe(cssnano())
    .pipe(rename({
        extname: '.css'
    }))
    .pipe(gulp.dest(source + '/css/'));
});

gulp.task('js', function() {
    return gulp.src([
        source + '/javascript/vendor/jquery-2.2.3.js',
        source + '/javascript/vendor/jquery.touche-2.2.3.js',
        source + '/javascript/vendor/jquery.lettering-0.7.0.js',
        source + '/javascript/vendor/perfect-scrollbar-0.6.11.js',
        source + '/javascript/vendor/jquery.marquee-1.3.9.js',
        source + '/javascript/main.js'
        ])
    .pipe(plumber())
    .pipe(concat('main.min.js'))
    // .pipe(uglify())
    .pipe(gulp.dest(source + '/javascript/'));
});