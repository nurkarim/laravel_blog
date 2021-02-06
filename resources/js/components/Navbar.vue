<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand">
                Laradevs
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <router-link class="nav-link" to="/">home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/profile">home</router-link>
                    </li>
                    <li v-if="auth==''" class="nav-item">
                        <router-link class="nav-link" to="/login">Login</router-link>
                    </li>
                    <li v-if="auth==''" class="nav-item">
                        <router-link class="nav-link" to="/register">Register</router-link>
                    </li>
                    <li v-if="auth=='loggedin'" class="nav-item">
                        <router-link class="nav-link" to="/profile">Profile</router-link>
                    </li>
                    <li v-if="auth=='loggedin'" class="nav-item">
                        <router-link class="nav-link" href="">Logout</router-link>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</template>

<script>
import EventBus from './EventBus'
export default {
    data() {
        return {
            auth: '',
            user: '',
        }
    },

    methods:{
        logout() {
            localStorage.removeItem('usertoken')
        }
    },

    mounted() {
        EventBus.$on('logged-in', status => {
            this.auth - status
        })
    }
}
</script>
