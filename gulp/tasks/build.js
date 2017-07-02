/* global Node, gulp, browserSync */

/**
 * /src ディレクトリ以下のファイルをテーマとして機能するよう加工し、
 * 加工したファイルを /theme ディレクトリに配置するタスクです。
 * bower で取得したライブラリも /theme 以下に配置します。
 */

const runSequence  = require('run-sequence')
const plumber      = require('gulp-plumber')
const sass         = require('gulp-sass')
const concat       = require('gulp-concat')
const sourcemaps   = require('gulp-sourcemaps')
const gulpIf       = require('gulp-if')
const postcss      = require('gulp-postcss')
const autoprefixer = require('autoprefixer')

const SOURCE_ROOT = Node.root.join('src')
const THEME_ROOT  = Node.root.join('theme')

const SOURCE_PHP    = SOURCE_ROOT.join('php/**/*.php')
const SOURCE_SCSS   = SOURCE_ROOT.join('scss/**/*.scss')
const SOURCE_JS     = SOURCE_ROOT.join('js/**/*.js')

const DEST_PHP    = THEME_ROOT
const DEST_SCSS   = THEME_ROOT
const DEST_JS     = THEME_ROOT.join('js')

const BOWER_ROOT    = Node.root.join('bower_components')
const BOWER_VUE_SRC = BOWER_ROOT.join(Node.env.isProduction ? 'vue/dist/vue.min.js' : 'vue/dist/vue.js')
const BOWER_FA_SRC  = BOWER_ROOT.join('font-awesome/{css,fonts}/**/{font-awesome.min.css,fontawesome-webfont.*}')
const BOWER_VUE_DST = THEME_ROOT.join('vendor/vue')
const BOWER_FA_DST  = THEME_ROOT.join('vendor/font-awesome')

gulp.task('build', done => {
  runSequence('clean', ['build:src', 'build:bower'], done)
})

gulp.task('build:src', [
  'build:src:php',
  'build:src:scss',
  'build:src:js',
  'build:src:image',
])

gulp.task('build:src:php', () => {
  gulp.src(SOURCE_PHP.toString())
    .pipe(gulp.dest(DEST_PHP.toString()))
    .pipe(browserSync.stream())
})

gulp.task('build:src:scss', () => {
  gulp.src(SOURCE_SCSS.toString())
    .pipe(gulpIf(!Node.env.isProduction, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulpIf(!Node.env.isProduction, sourcemaps.write()))
    .pipe(gulp.dest(DEST_SCSS.toString()))
    .pipe(browserSync.stream())
})

gulp.task('build:src:js', () => {
  gulp.src(SOURCE_JS.toString())
    .pipe(plumber())
    .pipe(gulpIf(!Node.env.isProduction, sourcemaps.init()))
    .pipe(concat('site.js'))
    .pipe(gulpIf(!Node.env.isProduction, sourcemaps.write()))
    .pipe(gulp.dest(DEST_JS.toString()))
    .pipe(browserSync.stream())
})

gulp.task('build:bower', [
  'build:bower:vue',
  'build:bower:font-awesome',
  'build:bower:damion-googlefont',
])

gulp.task('build:bower:vue', () => {
  gulp.src(BOWER_VUE_SRC.toString())
    .pipe(gulp.dest(BOWER_VUE_DST.toString()))
})

gulp.task('build:bower:font-awesome', () => {
  gulp.src(BOWER_FA_SRC.toString())
    .pipe(gulp.dest(BOWER_FA_DST.toString()))
})

gulp.task('build:bower:damion-googlefont', () => {
  gulp.src(BOWER_ROOT.join('damion-googlefont/Damion-Regular.ttf').toString())
    .pipe(gulp.dest(THEME_ROOT.join('fonts').toString()))
})
