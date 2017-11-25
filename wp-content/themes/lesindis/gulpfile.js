var gulp          = require('gulp'),
    browserSync   = require('browser-sync'),
    sass          = require('gulp-sass'),
    concat        = require('gulp-concat'),
    uglify        = require('gulp-uglify'),
    uglifyCss     = require('gulp-uglifycss'),
    notify        = require('gulp-notify'),
    plumber       = require('gulp-plumber'),
    postcss       = require('gulp-postcss'),
    autoprefixer  = require('autoprefixer'),
    babel         = require('gulp-babel'),
    imagemin      = require('gulp-imagemin'),
    processors    = [autoprefixer];

// TASKS
    

gulp.task('sass', function() {
  return gulp.src('src/scss/main.scss')
      .pipe(sass({errLogToConsole: true}))
      .pipe(postcss(processors))
      .pipe(gulp.dest('dist/css'))
      .pipe(notify({
         title: 'Sass',
         message: 'Done !',
         icon: 'groot.png',
         wait: false
      }));
});

gulp.task('js', function() {
  return gulp.src('src/js/*.js')
          .pipe(babel({ presets: ['es2015'] }))
          .pipe(gulp.dest('dist/js'))
});

gulp.task('min-img', () =>
    gulp.src('src/img/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'))
);

gulp.task('concat-min-js', function() {
  return gulp.src('src/js/*.js')
           .pipe(concat('all.min.js'))
           .pipe(uglify())
           .pipe(gulp.dest('dist/js'));
});

gulp.task('concat-min-css', function() {
  return gulp.src('src/css/*.css')
           .pipe(concat('all.min.css'))
           .pipe(uglifyCss())
           .pipe(gulp.dest('dist/css'));
});

gulp.task('watch', ['sass', 'js'], function() {
    gulp.watch('src/scss/**/**.scss', ['sass']);
    gulp.watch('src/js/*.js', ['js']);
});



gulp.task('concat-min', ['concat-min-js', 'concat-min-css']);