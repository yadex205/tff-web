/* global Node, gulp, browserSync */

/**
 * /src ディレクトリ以下のファイルをテーマとして機能するよう加工し、
 * 加工したファイルを /theme ディレクトリに配置するタスクです。
 * bower で取得したライブラリも /theme 以下に配置します。
 */

const runSequence = require('run-sequence')
const sass        = require('gulp-sass')

const SOURCE_ROOT = Node.root.join('src')
const THEME_ROOT  = Node.root.join('theme')

const SOURCE_PHP    = SOURCE_ROOT.join('php/**/*.php')
const SOURCE_SCSS   = SOURCE_ROOT.join('scss/**/*.scss')
const SOURCE_JS     = SOURCE_ROOT.join('js/**/*.js')
const SOURCE_IMAGE  = SOURCE_ROOT.join('image/**/*')

const DEST_PHP    = THEME_ROOT
const DEST_SCSS   = THEME_ROOT
const DEST_JS     = THEME_ROOT.join('js')
const DEST_IMAGE  = THEME_ROOT.join('image')

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
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(DEST_SCSS.toString()))
    .pipe(browserSync.stream())
})

gulp.task('build:src:js', () => {
  gulp.src(SOURCE_JS.toString())
    .pipe(gulp.dest(DEST_JS.toString()))
    .pipe(browserSync.stream())
})

gulp.task('build:src:image', () => {
  gulp.src(SOURCE_IMAGE.toString())
    .pipe(gulp.dest(DEST_IMAGE.toString()))
    .pipe(browserSync.stream())
})

gulp.task('build:bower', [
  'build:bower:vue',
  'build:bower:font-awesome',
])

gulp.task('build:bower:vue', () => {
  gulp.src(BOWER_VUE_SRC.toString())
    .pipe(gulp.dest(BOWER_VUE_DST.toString()))
})

gulp.task('build:bower:font-awesome', () => {
  gulp.src(BOWER_FA_SRC.toString())
    .pipe(gulp.dest(BOWER_FA_DST.toString()))
})
