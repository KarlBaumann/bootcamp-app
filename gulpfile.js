/**
 * Created by Karl on 2/23/2015.
 */
var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
//var watch = require('gulp-watch');
var phpcs = require('gulp-phpcs');
var less = require('gulp-less');
var path = require('path');
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('javascript', function () {

    var bundler = browserify({
        entries: ['./resources/assets/js/app.js'],
        debug: true
    });

    var bundle = function () {
        return bundler
            .bundle()
            .pipe(source('app.js'))
            .pipe(buffer())
            .pipe(sourcemaps.init({loadMaps: true}))
            // Add transformation tasks to the pipeline here.
            .pipe(uglify())                        ///saspiezh JS failu
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest('./public/js/'));
    };

    return bundle();
});

gulp.task('less', function () {
    return gulp.src('./resources/assets/less/app.less')
        .pipe(less({
            paths: [path.join(__dirname, 'node_modules')]
        }))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('phpunit', function () {
    var options = {debug: false};
    gulp.src('phpunit.xml')
        .pipe(phpunit('./vendor/bin/phpunit', options));
});

gulp.task('phpcs', function () {
    return gulp.src(['classes/**/*.php', 'tests/**/*.php'])
        // Validate files using PHP Code Sniffer
        .pipe(phpcs({
            bin: './vendor/bin/phpcs',
            standard: 'PSR2',
            warningSeverity: 0
        }))
        // Log all problems that was found
        .pipe(phpcs.reporter('log'));
});

gulp.task('watch', function () {
    gulp.watch(['classes/**/*.php', 'tests/**/*.php'], ['phpunit']);
});

//gulp.task('default',['phpunit', 'watch', 'phpcs', 'less']);
gulp.task('default', ['less', 'javascript']);