import axios from "axios";

require('./bootstrap');

window.Vue = require('vue');

import { router  } from './router'

import App from './components/App'

axios.defaults.baseURL = 'http://localhost/laravel_blog/';

Vue.config.productionTip = false
const app = new Vue({
    el: '#app',
    router,
    components: { App },
});
