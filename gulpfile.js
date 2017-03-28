/**
* @Author: Nicolas Fazio <webmaster-fazio>
* @Date:   15-09-2016
* @Email:  contact@nicolasfazio.ch
 * @Last modified by:   webmaster-fazio
 * @Last modified time: 28-03-2017
*/

// importer les modules NPM
var gulp = require('gulp');
var babel = require('gulp-babel');
var babelify = require('babelify');
var browserify = require("browserify");
var transform = require('vinyl-transform');
var source = require('vinyl-source-stream');
var removeHtmlComments  = require('gulp-remove-html-comments');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var ghPages = require('gulp-gh-pages');
var uglify = require('gulp-uglify');
var buffer = require("vinyl-buffer");
var sourcemaps = require('gulp-sourcemaps');
var bower = require('gulp-bower');
var concat            = require('gulp-concat');
var concatCss         = require('gulp-concat-css');
var cssmin            = require('gulp-cssmin');
var rename            = require("gulp-rename");
var sass              = require('gulp-sass');
var autoprefixer      = require('gulp-autoprefixer');
var useref            = require('gulp-useref');
var gutil = require('gulp-util');
//var rebaseUrls = require('gulp-css-rebase-urls');
var urlAdjuster = require('gulp-css-url-adjuster');

// Config of project folders
var config = {
    pages     : ['dev/www/**/**/*.php'], 
    css       : ['dev/src/bower_components/materialize/dist/css/materialize.min.css', 'dev/src/css/*.css'],
    fonts     : ['dev/src/bower_components/materialize/dist/fonts/**/*', 'dev/src/fonts/**/*'],
    jsDep     : ['dev/src/js/*.min.js'],
    img       : ['dev/src/img/**/*'],
   sassPath  : ['dev/src/sass'],
   bowerDir  : 'dev/src/bower_components' ,
    desDir    : './dist' /* répértoire de destination (prod) */
}
var bowerDependencies = [
  //config.bowerDir + '/jquery/dist/jquery.min.js',
  config.bowerDir + '/materialize/dist/js/materialize.min.js'
]
// Default Gulp starting task
gulp.task("run",[
  'bowerDependencies',
  'sass',
  'build-js',
  'copy-css',
  'copy-php',
  'copy-fonts',
  'copy-img'
]);
gulp.task('default', ['run'], function() {
    gulp.start('browser-sync', 'watch');
});

//// run bower install
gulp.task('bower', function() { 
    return bower()
      .pipe(gulp.dest(config.bowerDir)) 
});

/// task to bowerDependencies
gulp.task('bowerDependencies', function() {
  return gulp.src(bowerDependencies)
    .pipe(concat('bundle.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(config.desDir + '/js'))
});

// Sass task
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src(config.sassPath+'/*.scss')
      .pipe(sass())
      .on('error', handleError)
      .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
      //.pipe(cssmin())
      .pipe(gulp.dest('dev/src/css/'))
      .pipe(reload({stream:true}));
});

// Task to build JS files
gulp.task("build-js", function(){
    return browserify("dev/app/app.js",{
        debug: true
    })
    .on('error', handleError)
    .transform(babelify.configure({
        presets : ["es2015"]
    }))
    .on('error', handleError)
    .bundle()
    .pipe(source('app.js'))
    .pipe(buffer())
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(config.desDir + '/js'))
    .pipe(reload({stream:true}));
});

// Task to copy PHP files
gulp.task("copy-php", function(){
    return gulp.src(config.pages)
        .pipe(gulp.dest(config.desDir))
        .pipe(reload({stream:true}));
});

// Task to copy CSS files
// gulp.task("copy-css", function(){
//     return gulp.src(config.css)
//         .pipe(gulp.dest(config.desDir+'/css'))
//         .pipe(reload({stream:true}));
// });
// Task to build final min css file
gulp.task('copy-css', function () {
  return gulp.src(config.css)
    .pipe(useref())
    .pipe(concatCss("style.css", { rebaseUrls: false }))
    //.pipe(cssmin({keepSpecialComments : 1}))
    // .pipe(urlAdjuster({
    //   prepend: '../toto/',
    //   append: '?version=1',
    // }))
    .pipe(gulp.dest(config.desDir+'/css'))
    .pipe(reload({stream:true}));
});


// Task to copy Fonts files
gulp.task("copy-fonts", function(){
    return gulp.src(config.fonts)
        .pipe(gulp.dest(config.desDir+'/fonts'))
});

// Task to copy JS Dependencies files
gulp.task("copy-js-dep", function(){
    return gulp.src(config.jsDep)
        .pipe(gulp.dest(config.desDir+'/js'))
});

// Task to copy IMG
gulp.task("copy-img", function(){
    return gulp.src(config.img)
        .pipe(gulp.dest(config.desDir+'/img'))
});

// Tash to push ./dist folder on Github gh-pages
gulp.task('deploy', function() {
  return gulp.src('./dist/**/*')
    .pipe(ghPages());
});

// Task to run local server
// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './dist/js/app.js',
    './dist/css/style.css',
    './dist/css/ckeditor.css',
    './dist/*.php'
    ];
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    port: 3001,
    proxy: "localhost:3000/",
    notify: true
    });
});

function handleError(err) {
  console.log(err.toString());
  browserSync.notify(err.message, 3001); // Display error in the browser
  gutil.log(gutil.colors.red('Error (' + err.plugin + '): ' + err.message));
  this.emit('end');
}

// Task to watch wich file is changing and load the right task
gulp.task('watch', function() {
  gulp.watch('./dev/app/**/*.js', ['build-js']);     // watch js file changes
  gulp.watch('./dev/www/**/*.php', ['copy-php']);      // watch all PHP template file changes
  gulp.watch('./dev/src/css/*.css', ['copy-css']); 
  gulp.watch('./dev/src/sass/**/*.scss', ['sass']); 
})
