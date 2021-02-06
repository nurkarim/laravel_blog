
require('./bootstrap');

window.Vue = require('vue');

import { router  } from './router'

import App from './components/App'
Vue.config.productionTip = false
const app = new Vue({
    el: '#app',
    router,
    components: { App },
});
