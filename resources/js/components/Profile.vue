<template>
    <div class="container">
        <div class="jumbotron mt-5">
            <div class="col-sm-8 mx-auto">
                <h1 class="text-center">Profile</h1>
            </div>

            <table class="table col-md-6 mx-auto">
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>{{wholename}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{email}}</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</template>


<script>
import axios from 'axios'

export default{
    data() {
        this.getUser().then(res => {
            this.wholename = res.user.name
            this.email = res.user.email
            return res
        })

        return {
            wholename: '',
            email: ''
        }
    },
    methods: {
        getUser() {
            let token = localStorage.getItem('usertoken') || null;
            return axios.get('api/get_profile', {
                headers:{
                    Authorization: 'Bearer '+ token
                }
            })
                .then(res => {
                    console.log(res.data);
                    return res.data
                })
                .catch(err =>{
                    console.log(err)
                })
        }
    }
}


</script>
