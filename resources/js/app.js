import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VueMeta from 'vue-meta'
import VueSession from 'vue-session'

Vue.config.productionTip = false
Vue.use(VueMeta)
Vue.use(VueSession)

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
