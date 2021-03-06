//VARIABLES
var gulp = require('gulp'),
  gp_sass = require('gulp-sass'),
  gp_sourcemaps = require('gulp-sourcemaps'),
  gp_postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  browserSync = require('browser-sync').create(),
  gp_concat = require('gulp-concat'),
  gp_uglify = require('gulp-uglify'),
  gp_postcss_size = require('postcss-size'),
  gp_assets = require('postcss-assets'),
  gp_filter = require('gulp-filter'),
  gp_livereload = require('gulp-livereload'),
  // gp_rucksack = require('gulp-rucksack'),
  gp_header = require('gulp-header'),
  postcss_svg = require('postcss-svg'),
  processors = [
    autoprefixer({
      browsers: ['last 5 versions', 'IE 9', 'IE 10'],
      cascade: false
    }),
    gp_assets({
      loadPaths: ['images/'],
    }),
    gp_postcss_size,
    postcss_svg({
      paths: ['images/svg']
    })
  ],
  jsfiles = [
    'node_modules/slick-carousel/slick/slick.js',
    'node_modules/isotope-layout/dist/isotope.pkgd.js',
    'node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js',
    'node_modules/threesixty-slider/src/threesixty.js',
    'node_modules/jquery-sticky/jquery.sticky.js',
    // 'node_modules/jquery-migrate/dist/jquery-migrate.js',
    'node_modules/headroom.js/dist/headroom.js',
    'node_modules/headroom.js/dist/jQuery.headroom.js',
    'node_modules/jquery-parallax.js/parallax.js',
    'node_modules/paroller.js/dist/jquery.paroller.js'
  ],
  scssfiles = [
    'css/src/*.scss'
  ],
  fonts = [
  ];

//SETTINGS

//FA FONTS
gulp.task('fonts', function() {
  return gulp.src(fonts)
  .pipe(gulp.dest('fonts'));
});

//CSS
gulp.task('styles', function () {
  return gulp.src(scssfiles)
    .pipe(gp_header('$debug: true;'))
    .pipe(gp_sourcemaps.init())
    .pipe(gp_sass().on('error', gp_sass.logError))
    // .pipe(gp_rucksack())
    .pipe(gp_postcss(processors))
    .pipe(gp_sourcemaps.write())
    .pipe(gulp.dest('css/dist'))
    .pipe(gp_filter('**/*.css'))
    .pipe(gp_livereload());
    // .pipe(browserSync.reload({stream: true}));
});

//CSS MINIFY
gulp.task('styles_prod', function () {
  return gulp.src(scssfiles)
    .pipe(gp_sass({
      outputStyle: 'compressed'
    }).on('error', gp_sass.logError))
    // .pipe(gp_rucksack())
    .pipe(gp_postcss(processors))
    .pipe(gulp.dest('css/dist'));
});

// //JS
// gulp.task('scripts', function () {
//   return gulp.src(jsfiles)
//     .pipe(gp_sourcemaps.init())
//     .pipe(gp_concat('bundle.js'))
//     .pipe(gp_sourcemaps.write('./'))
//     .pipe(gulp.dest('js/dist'));
// });

//JS MINIFY/UGLIFY
gulp.task('scripts_prod', function () {
  return gulp.src(jsfiles)
    .pipe(gp_concat('bundle.js'))
    .pipe(gp_uglify())
    .pipe(gulp.dest('js/dist'));
});

//WATCH
// gulp.task('watch' ,['browser-sync'] , function() {
gulp.task('watch', function () {
  gulp.watch(scssfiles, ['styles']);
  gulp.watch(jsfiles, ['scripts']);
  gp_livereload.listen();
  // gulp.watch('*.html').on('change', browserSync.reload);
});

gulp.task('w', ['styles'], function () {

  browserSync.init({
    proxy: 'www.dartlamp.com', // site url
    open: false, // turnoff auto open on browsersync start
    files: 'css/dist/main.css',
    serveStatic: ['css/dist'],
    snippetOptions: {
    rule: {
        match: /<\/head>/i,
        fn: function (snippet, match) {
          return '<link rel="stylesheet" type="text/css" href="/main.css"/>' + snippet + match;
        }
      }
    }
  });

  gulp.watch(scssfiles, ['styles']);
  // gulp.watch('*.html').on('change', browserSync.reload);
});


//DEFAULT
gulp.task('default', ['styles_prod', 'scripts_prod']);
