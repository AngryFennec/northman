var gulp = require('gulp');
const {series} = gulp;

// general
var rename = require('gulp-rename');
var clean = require('del');
var include = require('gulp-rigger');
var plumber = require('gulp-plumber');
var newer = require('gulp-newer');

var server = require('browser-sync').create();

// html
var twig = require('gulp-twig');

// css
var sass = require('gulp-sass');
var bulkSass = require('gulp-sass-bulk-import');
var groupCssMediaQueries = require('gulp-group-css-media-queries');
var autoprefixer = require('gulp-autoprefixer');
var cssMinify = require('gulp-csso');

// js
var jsMinify = require('gulp-uglify');

// img
var imgMinify = require('gulp-imagemin');
var svgstore = require('gulp-svgstore');


gulp.task('clean', function () {
  return clean('build');
});

gulp.task('copy', function () {
  return gulp.src([
    'src/font/**/*.{woff,woff2}',
    'src/js/**/*.js',
    'src/img/**/*',
  ], {
    base: 'src'
  })
    .pipe(gulp.dest('build'));
});


gulp.task('html', function () {
  return gulp.src('src/*.html')
    .pipe(twig())
    .pipe(gulp.dest('build'));
});


gulp.task('css', function () {
  return gulp.src('src/sass/style.scss')
    .pipe(plumber())
    .pipe(bulkSass())
    .pipe(sass())
    .pipe(groupCssMediaQueries())
    .pipe(autoprefixer({
      flexbox: 'no-2009',
      grid: 'autoplace'
    }))
    .pipe(gulp.dest('build/css'))
    .pipe(cssMinify())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('build/css'));
});


gulp.task('js:copy', function () {
  return gulp.src('src/js/**/*.js')
    .pipe(newer('build/js'))
    .pipe(gulp.dest('build/js'));
});

gulp.task('js:include', function () {
  return gulp.src('src/js/**/*.js')
    .pipe(plumber())
    .pipe(include())
    .pipe(gulp.dest('build/js'))
});

// gulp.task('js:minify', function () {
//   return gulp.src('build/js/*.js')
//     .pipe(jsMinify())
//     .pipe(gulp.dest('build/js'))
// });


gulp.task('img:copy', function () {
  return gulp.src('src/img/**')
    .pipe(newer('build/img'))
    .pipe(gulp.dest('build/img'));
});

gulp.task('img:minify', function () {
  return gulp.src('build/img/**/*.{png,jpg,svg}')
    .pipe(imgMinify([
      // imgMinify.optipng(
      //   {optimizationLevel: 3}
      // ),
      imgMinify.jpegtran(
        { progressive: true }
      ),
      imgMinify.svgo({
        plugins: [
          { removeViewBox: false },
          { removeRasterImages: true }
        ]
      })
    ]))
    .pipe(gulp.dest('build/img'));
});

gulp.task('img:svg-sprite', function () {
  return gulp.src('src/img/svg-sprite/*.svg')
    .pipe(imgMinify([
      imgMinify.svgo({
        plugins: [
          { removeViewBox: false },
          { removeRasterImages: true },
          // {removeAttrs:
          //   {attrs: 'fill'}
          // }
        ]
      })
    ]))
    .pipe(svgstore())
    .pipe(gulp.dest('build/img'));
});


gulp.task('reload', function (done) {
  server.reload();
  done();
});


gulp.task('serve', function () {
  server.init({
    server: 'build/',
    notify: false,
    open: true,
    cors: true,
    ui: false
  });

  gulp.watch('src/*.html', series('html', 'reload'));
  gulp.watch('src/sass/**/*.{scss,sass}', series('css', 'reload'));
  gulp.watch('src/js/**/*.js', series('js:copy', 'js:include', 'reload'));
  gulp.watch('src/img/**/*', series('img:copy', 'reload'));
});


gulp.task('build', series(
  'clean',
  'copy',
  'html',
  'css',
  'js:include',
  // 'js:minify',
  'img:svg-sprite'
));
