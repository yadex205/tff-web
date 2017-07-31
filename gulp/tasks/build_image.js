/* global Node, gulp, browserSync */

/**
 * /src/image ディレクトリ以下の画像を加工して
 * テーマディレクトリに配置するタスクです。
 */

const plumber = require('gulp-plumber')
const filter  = require('gulp-filter')

const SRC_IMAGE_ROOT = Node.root.join('src/image')
const THEME_IMAGE_ROOT = Node.root.join('theme/image')

gulp.task('build:src:image', [
  'build:src:image:copy',
])

gulp.task('build:src:image:copy', () => {
  return gulp.src(SRC_IMAGE_ROOT.join('*').toString())
    .pipe(plumber())
    .pipe(filter(['**/*', '!**/*.svg']))
    .pipe(gulp.dest(THEME_IMAGE_ROOT.toString()))
    .pipe(browserSync.stream())
})
