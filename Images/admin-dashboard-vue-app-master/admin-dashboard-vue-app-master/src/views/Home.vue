<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
      <app-home></app-home>
  </div>
</template>

<script>
    import HomeComponent from "../components/HomeComponent";
export default {
  name: 'Home',
  components: {
      'app-home': HomeComponent
  }
}
</script>
