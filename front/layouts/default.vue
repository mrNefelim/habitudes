<template>
  <div>
    <custom_header/>
    <b-container>
      <login />
      <nuxt ref="page"/>
    </b-container>
  </div>
</template>

<script>
  import custom_header from "./header";
  import login from "../components/login";
  export default {
    components: {
      custom_header,
      login
    }
  }

</script>
<style>
</style>

