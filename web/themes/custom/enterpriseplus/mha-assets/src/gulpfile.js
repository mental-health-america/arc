'use strict';


// Last Updated 2018.06.21
//
// Requires global installation of: 
// > Node.js 8.11.3
// > NPM 5.6.0
// > Gulp CLI 2.0.1
//
//---------------------------------------------


// Theme and local dev variables
//---------------------------------------------
var debug = false; //This variable is used to generate sourcemaps by turning off gulp-autoprefixer and gulp-group-css-media-queries it also does not minify the CSS.  Set to false and recompile for production sites

var themepath = './';
//var src = themepath+'src/';  //The path to the src files (probably won't need to change)
var localhost = "http://mha-arc.dd:8083/";  //The URL for local development - required to make BrowserSync work correctly


// Gulp plugins
//---------------------------------------------

//SASS Stuff
var gulp = require('gulp');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon').includePaths;
var neat = require('node-neat').includePaths;
var gulpif = require('gulp-if');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');
var importer = require('node-sass-globbing');
var plumber = require('gulp-plumber');
var gcmq = require('gulp-group-css-media-queries');

//JS Stuff
var js = require('gulp-uglify');
var rename = require("gulp-rename");

//Browser Sync
var browserSync = require('browser-sync').create();

//Image Stuff
var imagemin = require('gulp-imagemin');
var imageResize = require('gulp-image-resize');




// Browser Sync
//---------------------------------------------
gulp.task('serve', function() {
  browserSync.init({
    proxy: localhost
  });
  
  gulp.watch(themepath+'scss/**/*.scss', gulp.series('sass')).on('change', browserSync.reload);
  gulp.watch(themepath+'js/**/*.js', gulp.series('js')).on('change', browserSync.reload);
});



// Compress javascript.
//---------------------------------------------
gulp.task('js', function() {
  return gulp.src(themepath+'js/**/*.js')
    .pipe(js())
    .pipe(rename(function (path) { path.basename += '.min'; }))
    .pipe(gulp.dest('../build/js'));
});



// Compile sass.
//---------------------------------------------
gulp.task('sass', function () {
  return gulp.src(themepath+'scss/**/*.scss')
    .pipe(plumber())
    .pipe(gulpif(debug, sourcemaps.init())) //Will generate sourcemaps when debug is true
    .pipe(sass({includePaths: [bourbon, neat]}).on('error', sass.logError))
    .pipe(gulpif(!debug, autoprefixer({ browsers: ['last 2 version']}))) //No debug: Autoprefixer
    .pipe(gulpif(!debug, gcmq())) //No debug: Move/combine media queries
    .pipe(gulpif(!debug, cssnano({zindex: false}))) //No debug: Minify
    .pipe(gulpif(debug, sourcemaps.write('.'))) //Will generate sourcemaps when debug is true
    .pipe(gulp.dest('../build/css'));
});



// The default task (when only running 'gulp')
//---------------------------------------------
gulp.task('default', gulp.parallel('serve'));



// Optimize images
// This will optimize all images found in src/images/images folder
//
// Feel free to modify the compression settings
// or add additional compression modules
//---------------------------------------------
gulp.task('optimize-images', function () {
  return gulp.src(themepath+'images/images/**/*')
    .pipe(imagemin([
      imagemin.gifsicle({interlaced: true}),
      imagemin.jpegtran({progressive: true}),
      imagemin.optipng({optimizationLevel: 5}),
      imagemin.svgo({
        plugins: [
          {removeViewBox: true},
          {cleanupIDs: false}
        ]
      })
    ]))
    .pipe(gulp.dest('../build/images'));
});



// Create the appletouch and other device icons
// This will create a series of icons from a single source
// It needs a file here: src/images/appletouch/appletouch.png
// It will save the various icons sizes to src/appletouch
//---------------------------------------------
var resizeImageTasks = [];

// You can add new image dimensions by adding a new number to the array below
[57,76,120,128,152,167,180,192].forEach(function(size) {
  var resizeImageTask = 'resize_' + size;
  gulp.task(resizeImageTask, function() {
  return gulp.src(themepath+'images/appletouch/appletouch.png')
      .pipe(imageResize({
        width:  size,
        height: size,
        upscale: false,
        imageMagick: true,
      }))
      .pipe(imagemin([
        imagemin.optipng({optimizationLevel: 5})
      ]))
      .pipe(rename(function (path) { path.basename += '-' + size; }))
      .pipe(gulp.dest('../build/images/appletouch/'));
  });
  resizeImageTasks.push(resizeImageTask);
});

gulp.task('optimize-icons', gulp.parallel(resizeImageTasks));