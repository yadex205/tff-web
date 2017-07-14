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
    data: { menuShown: false },
    mounted: function() {
      document.addEventListener('tff-web:menu-shown', function() {
        this.menuShown = true
      }.bind(this))

      document.addEventListener('tff-web:menu-hidden', function() {
        this.menuShown = false
      }.bind(this))
    },
    methods: {
      onMenuShownStatusChanged: function(status) {
      }
    }
  })
})
