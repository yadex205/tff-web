/* global Vue */

document.addEventListener('DOMContentLoaded', function() {
  new Vue({
    el: '#global-popup-nav-trigger-wrapper',
    data: { menuShown: false },
    methods: {
      trigger: function() {
        this.menuShown = !this.menuShown
        var event = new Event(this.menuShown ? 'tff-web:menu-shown' : 'tff-web:menu-hidden')
        document.dispatchEvent(event)
      }
    }
  })

  new Vue({
    el: '#global-popup-nav',
    data: { shown: false, beforeHidden: false, _timeoutTransition: null },
    mounted: function() {
      document.addEventListener('tff-web:menu-shown', function() {
        this._cleanupTimeout()
        this.shown = true
      }.bind(this))

      document.addEventListener('tff-web:menu-hidden', function() {
        this.beforeHidden = true
        this.shown = false
        this._timeoutTransition = setTimeout(function() {
          this.beforeHidden = false
          this._timeoutTransition = null
        }.bind(this), 500)
      }.bind(this))
    },
    methods: {
      _cleanupTimeout: function() {
        if (this._timeoutTransition) {
          clearTimeout(this._timeoutTransition)
          this._timeoutTransition = null
        }
      }
    }
  })
})
