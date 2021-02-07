import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Hello from '../components/Hello'
import Home from '../components/Home'
import BlogPost from '../components/BlogPost'
import Login from '../components/Login'
import Register from '../components/Register'
import Profile from '../components/Profile'


export const router = new VueRouter({
    base: 'laravel_blog',
    mode: 'history',
    routes: [
       {
            path: '/',
            name: 'Home',
            component: Home,
           meta: {
               guest: true
           }
        },{
            path: '/blogPost',
            name: 'BlogPost',
            component: BlogPost
        },
        {
            path: '/Hello',
            name: 'Hello',
            component: Hello,
            meta: {
                guest: true
            }
        },
        {
            path: '/login',
            name: 'Login',
            component: Login,
            meta: {
                guest: true
            }
        },
        {
            path: '/register',
            name: 'Register',
            component: Register,
            meta: {
                guest: true
            }
        },
        {
            path: '/profile',
            name: 'Profile',
            component: Profile,
            meta: {
                requiresAuth: true
            }
        }
    ],
});
