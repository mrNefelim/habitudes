<template>
  <div class="container">
    <h1>О компании</h1>
    <h1>Hello {{ name }}!</h1>
    <nuxt-link to="/">На главную</nuxt-link>
  </div>
</template>
<script>
  export default {
    head: {
      title: 'Информация - Habitues'
    },
    data () {
      return { name: 'World' }
    }
  }
</script>
