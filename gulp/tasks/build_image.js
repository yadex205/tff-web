/* global Node, gulp, browserSync */

/**
 * /src/image ディレクトリ以下の画像を加工して
 * テーマディレクトリに配置するタスクです。
 */

const plumber      = require('gulp-plumber')
const responsive   = require('gulp-responsive')

const SRC_IMAGE_ROOT = Node.root.join('src/image')
const THEME_IMAGE_ROOT = Node.root.join('theme/image')

gulp.task('build:src:image', [
  'build:src:image:global-header-logo',
])

gulp.task('build:src:image:global-header-logo', () => {
  gulp.src(SRC_IMAGE_ROOT.join('*').toString())
    .pipe(plumber())
    .pipe(responsive({
      'tff-logo-short.svg': [
        { width: 100, rename: 'header-logo.png' },
        { width: 200, rename: 'header-logo@2x.png' },
        { width: 300, rename: 'header-logo@3x.png' },
      ],
      'background.jpg': {},
    }, {
      errorOnUnusedImage: false, format: 'png', withoutEnlargement: false
    }))
    .pipe(gulp.dest(THEME_IMAGE_ROOT.toString()))
    .pipe(browserSync.stream())
})
