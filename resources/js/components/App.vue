<template>

        <main>
            <navbar></navbar>
            <router-view/>

        </main>
</template>
<script>
import Navbar from './Navbar'
export default {
    name: 'App',
    components: {
        'Navbar': Navbar
    },
    data() {
        return {

        }
    },
    mounted() {

    },
    methods: {

    }
}
</script>
