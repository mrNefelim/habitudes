<template>
  <b-container>
    <b-row v-for="todo in todos" v-bind:key="todo.id" vertical-align="center"
           class="d-flex justify-content-between m-3 p-3 border-bottom">
      <b-col align-self="flex-end">
        <h4>{{todo.title}}</h4>
      </b-col>
      <b-col align-self="center" class="text-right">
        <b-button href="#" variant="primary">Сделано!</b-button>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
  import AppLogo from '~/components/AppLogo.vue'

  export default {
    head: {
      title: 'Habitues'
    },
    components: {
      AppLogo
    },
    data({params}) {
      return {
        todos: [
          {
            id: 1,
            title: 'Изучить JavaScript'
          },
          {
            id: 2,
            title: 'Изучить Vue'
          },
          {
            id: 3,
            title: 'Создать что-нибудь классное'
          }
        ]
      }
    }
  }
</script>

<style>
</style>

