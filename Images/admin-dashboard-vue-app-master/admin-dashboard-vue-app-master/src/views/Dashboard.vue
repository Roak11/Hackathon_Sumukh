<template>
    <app-dashboard></app-dashboard>
</template>

<script>
    import Dashboard from "../components/Dashboard";

    export default {
        name: "Dashboard",
        components: {
            // eslint-disable-next-line vue/no-unused-components
            'app-dashboard': Dashboard
        }
    }
</script>

<style scoped>

</style>