/* global gulp */

const rimraf = require('rimraf')

/**
 * 生成された /theme ディレクトリ 以下のファイルを全て削除するタスクです。
 */

gulp.task('clean', done => {
  rimraf('theme', done)
})
