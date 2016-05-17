// Plugin Requirements
var gulp = require('gulp');
var sass = require('gulp-sass');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var include = require("gulp-include");
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');

var plumberErrorHandler = { errorHandler: notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
  })
};

//Setup
var bower = {
    path: './bower_components/',
    fontAwesome: './bower_components/font-awesome',
    bootstrap: './bower_components/bootstrap-sass',
    modernizr: './bower_components/modernizr',
    animate_css: './bower_components/animate.css',
}

// Set source paths
var src = {
    path: './src/',
    js: '_js/',
    images: '_img/**', //gulp will not detect new images if using absolute path "./src/img/**"
    sass: '_sass/**/*.scss',
    partials: '_scss/partials',
    fonts: '_fonts/**/*',
    bower: './bower_components/**/*',
    html: './src/templates/**/*.html',
    templates: './src/templates/*.html'
}

// Set distribution paths
var dist = {
    path: './theme',
    assets: './theme/assets',
    js: './theme/js',
    images: './theme/images',
    fonts: './theme/fonts',
    css: './theme/',
}


// Tasks

gulp.task('default', function() {
  // place code for your default task here
});

gulp.task('sass', function () {
    return gulp.src(src.sass)
     .pipe(sass({
        includePaths: [
            bower.path,
            bower.bootstrap + '/assets/stylesheets',
            bower.fontAwesome + '/scss',
            bower.animate_css
        ],
        outputStyle: 'compressed'
    }))
    .pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
    .on("error", notify.onError(function (error) {
        return "Error: " + error.message;
    }))
        .pipe(gulp.dest(dist.css));
});
gulp.task('fonts', function() {
    gulp.src(bower.fontAwesome + '/fonts/**/*')
        .pipe(gulp.dest(dist.fonts));
});

gulp.task('js', function () {
    gulp.src(src.js + 'main.js')
        .pipe(include())
        //.pipe(uglify())
        .pipe(plumber(plumberErrorHandler))
        .pipe(gulp.dest(dist.js));
});

gulp.task('img', function() {
  gulp.src('_img/**/*.{png,jpg,gif}')
    .pipe(imagemin({
      optimizationLevel: 1,
      progressive: true
    }))
    .pipe(plumber(plumberErrorHandler))
    .pipe(gulp.dest(dist.images))
});

gulp.task('watch', function() {
  gulp.watch(src.sass, ['sass']).on('change', browserSync.reload);
    gulp.watch('_js/*.js', ['js']).on('change', browserSync.reload);
    gulp.watch('_img/**/*.{png,jpg,gif}', ['img']).on('change', browserSync.reload);
});

// Open a browser window/refresh broswer window when a change is made
gulp.task('serve', ['js','sass','img'], function () {
    // Serve files from the root of this project
    browserSync.init({
		//server: {
          //  baseDir: "al",
        //},
		port:8888,
        //proxy: "localhost:8888/personal",
		reloadDelay: 1000,
        reloadDebounce: 500
    });
});


 gulp.task('default', ['fonts', 'sass', 'js', 'img', 'watch', 'serve']);