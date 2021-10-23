<template>
    <div id="app-container" class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-12">
                <div
                    id="navbar"
                    class="flex flex-row justify-content-between fs-6 p-2 text-light"
                    style="background-color: #2C2C34;"
                >
                    <router-link :to="{ name: 'Home' }" class="p-1">Home</router-link>
                    <a>Logout</a>
                </div>
            </div>
            <div class="col-md-3 col-xl-2">
                <div
                    id="sidebar"
                    class="flex flex-column align-items-center p-2 border-right text-light"
                    style="background-color: #65668F;"
                >
                    <span class="fs-5 border-bottom border-light mb-2">Seafarer International</span>
                    <router-link :to="{ name: 'Dashboard' }" class="p-1 mb-2">Dashboard</router-link>
                    <router-link :to="{ name: 'CrewMembers' }" class="p-1 mb-2">Crew Members</router-link>
                    <router-link :to="{ name: 'Ships' }" class="p-1">Ships</router-link>
                </div>
            </div>
            <div class="col-md-9 col-xl-10">
                <router-view />
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    methods: {
        async logout() {
            await axios.post("http://127.0.0.1:8000/logout");
            window.location.href = "http://127.0.0.1:8000/login#/";
        }
    }
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background-color: rgb(235, 237, 245);
    height: 100vh;
}
.router-link-exact-active {
    background-color: white;
    color: black;
    border-radius: 5px;
}
</style>
