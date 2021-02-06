import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Hello from '../components/Hello'
import Home from '../components/Home'
import Login from '../components/Login'
import Register from '../components/Register'
import Profile from '../components/Profile'


export const router = new VueRouter({
    base: 'public',
    mode: 'history',
    routes: [
       {
            path: '/home',
            name: 'Home',
            component: Home
        },
        {
            path: '/',
            name: 'Hello',
            component: Hello,
        },
        {
            path: '/login',
            name: 'Login',
            component: Login,
        },
        {
            path: '/register',
            name: 'Register',
            component: Register,
        },
        {
            path: '/profile',
            name: 'Profile',
            component: Profile,
        }
    ],
});
