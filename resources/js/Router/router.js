import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/login/Login'
import Signup from '../components/login/Signup'
import Forum from '../components/forum/Forum'
import Logout from '../components/login/Logout'
import read from '../components/forum/read';
import create from '../components/forum/create';

const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: Signup},
    { path: '/logout', component: Logout},
    { path: '/forum', component: Forum, name: 'forum'},
    { path: '/ask', component: create, name: 'create'},
    { path: '/question/:slug', component: read, name: 'read'}

]
const router = new VueRouter({
    routes, // short for `routes:routes`,
    hashbang: false,
    mode: 'history'
})

export default router