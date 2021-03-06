var gulp        = require('gulp');
var sass        = require('gulp-sass');
var autoprefixer = require('autoprefixer');
var compass = require('compass-importer');
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var cssnext = require('postcss-cssnext');
var shortcss = require('postcss-short');

gulp.task('sass', function () {
	var plugins = [
		shortcss,
		cssnext,
		autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		})
	];
	return gulp.src('sass/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({ importer: compass,
			outputStyle: 'compressed',
			includePaths: ['node_modules/susy/sass']
		}).on('error', sass.logError))
		.pipe(postcss(plugins))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('.'))

});

gulp.task("watch", ['sass'], function () {
	gulp.watch('sass/**/*.scss', ["sass"]);
});
