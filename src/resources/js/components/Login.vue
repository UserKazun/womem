<script setup>
</script>

<template>
    <div class="container">
        <div class="input-group p-3">
        <span class="input-group-text" id="input-group-left-example">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-reactroot="">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" fill="none" d="M12 12C6.48 12 2 16.48 2 22C2.02 22 22 22 22 22C22 16.48 17.52 12 12 12Z"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" fill="none" d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z"></path>
            </svg>
        </span>
            <input type="text" class="form-control" placeholder="Username" v-model="nameInput">
        </div>
        <div class="input-group p-3">
        <span class="input-group-text" id="input-group-left-example">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-reactroot="">
                <path stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" d="M18 8H6C6 4.69 8.69 2 12 2C15.31 2 18 4.69 18 8Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                <path stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" fill="none" d="M19 22H5C4.45 22 4 21.55 4 21V9C4 8.45 4.45 8 5 8H19C19.55 8 20 8.45 20 9V21C20 21.55 19.55 22 19 22Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                <path stroke-linejoin="round" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" d="M9.17 12.17L14.83 17.83"></path>
                <path stroke-linejoin="round" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" d="M12 11V19"></path>
                <path stroke-linejoin="round" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" d="M14.83 12.17L9.17 17.83"></path>
                <path stroke-linejoin="round" stroke-linecap="square" stroke-miterlimit="10" stroke-width="1" stroke="#221b38" d="M16 15H8"></path>
            </svg>
        </span>
            <input type="password" class="form-control" placeholder="Password" v-model="passwordInput" >
        </div>
        <div class="text-end">
            <button @click="handle" class="btn btn-primary">Login</button>
        </div>
    </div>
</template>

<script>
import {login} from "../apis.js";

export default {
    data() {
        return {
            nameInput: '',
            passwordInput: ''
        };
    },
    methods: {
        handle() {
            const name = this.nameInput;
            const password = this.passwordInput;

            const response = login(name, password);

            response.then((res) => {
                if (res.status >= 200 && res.status < 300) {
                    this.$router.push('/example');
                } else {

                }
            });

            console.log(response.then((res) => { console.log(res) }));
        }
    }
}
</script>
