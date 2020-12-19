require('./bootstrap');
// window.Vue = require('vue');
import Vue from 'vue'

import('./modal-open');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('category-lists', require('./components/category/CategoryLists.vue').default);
Vue.component('create-category', require('./components/category/CreateCategory.vue').default);

const app = new Vue({
    el: '#app',
});
