const browserSync = require('browser-sync')
const gulp        = require('gulp')
const Pathname    = require('node-pathname')
const requireDir  = require('require-dir')

global.Node = {
  env:  process.env.NODE_ENV || 'development',
  root: new Pathname(__dirname),
}

global.Node.env.isProduction = global.Node.env === 'production'

global.browserSync = browserSync

global.gulp = gulp

requireDir('./gulp/tasks', { recursive: true })
