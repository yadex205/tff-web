/* global gulp, browserSync */

/**
 * 編集内容をリアルタイムに反映する live 環境を提供するタスクです。
 */

gulp.task('live', ['live:browser-sync', 'build'], () => {
  gulp.watch('src/php/**/*.php', ['build:src:php'])
  gulp.watch('src/scss/**/*.scss', ['build:src:scss'])
  gulp.watch('src/js/**/*.js', ['build:src:js'])
  gulp.watch('src/image/**/*', ['build:src:image'])
})

gulp.task('live:browser-sync', ['build'], () => {
  browserSync.init({
    ui: false,
    proxy: 'localhost:9090',
    notify: false,
    online: false,
  })
})
