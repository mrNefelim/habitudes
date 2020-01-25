<template>
  <b-container>
    <div v-for="todo in todos" v-bind:key="todo.id">
      <transition
        name="custom-classes-transition"
        enter-active-class="animated tada"
        leave-active-class="animated bounceOutRight"
      >
        <b-row v-if="todo.show" vertical-align="center"
               class="d-flex justify-content-between m-3 p-3 border-bottom">
          <b-col align-self="flex-end">
            <h4>{{todo.title}}</h4>
          </b-col>
          <b-col class="text-right align-self-center">
            <b-button @click="todo.show = !todo.show" variant="primary">Сделано!</b-button>
          </b-col>
        </b-row>
      </transition>
    </div>
  </b-container>
</template>

<script>
  export default {
    head: {
      title: 'Habitues'
    },
    data({params}) {
      return {
        todos: [
          {
            id: 1,
            title: 'Изучить JavaScript',
            show: true
          },
          {
            id: 2,
            title: 'Изучить Vue',
            show: true
          },
          {
            id: 3,
            title: 'Создать что-нибудь классное',
            show: true
          }
        ]
      }
    }
  }
</script>

<style>
</style>
