/* global Node, gulp */

const bower = require('bower')

/**
 * テーマの制作に必要なライブラリなどを用意するタスクです。
 */

gulp.task('bootstrap', ['bootstrap:bower'])

gulp.task('bootstrap:bower', (done) => {
  bower.commands.install().on('end', () => done())
})
