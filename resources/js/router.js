import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import examplecomponent from './components/ExampleComponent'

const routes = [
    {
        path: '/category',
        component: examplecomponent,
    }
]

export default new Router ({
    mode: 'history',
    routes
})
