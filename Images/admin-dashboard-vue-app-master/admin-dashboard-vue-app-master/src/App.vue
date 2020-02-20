<template>
    <div id="app">
        <nav class="custom navbar navbar-expand-lg navbar-light">
            <img alt="logo" class="mr-3" src="../src/assets/img/tree.svg">
            <router-link class="navbar-brand" to="/">Admin <span class="text-muted">Panel</span></router-link>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler"
                    data-target="#navbarNav" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <router-link class="nav-link" href="#" to="/dashboard">Dashboard</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" href="#" to="/users">Users</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" href="#" to="/orders">Orders</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/about">About</router-link>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="mt-3">
            <router-view/>
        </div>
    </div>
</template>

<style>
    #app {
        font-family: Avenir, Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        font-weight: bold;
    }

    .custom {
        background-color: lightseagreen;
    }

</style>
