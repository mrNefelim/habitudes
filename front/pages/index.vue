<template>
  <b-container>
    <div>
      <h5>Осталось выполнить:</h5>
      <div v-for="todo in todos" v-bind:key="todo.id">
        <transition
          name="custom-classes-transition"
          enter-active-class="animated tada"
          leave-active-class="animated bounceOutRight"
        >
          <b-row v-if="todo.show" vertical-align="center"
                 class="d-flex justify-content-between m-3 p-3 border-bottom">
            <b-col class="text-center">
              <h2>{{todo.month_todo}}</h2>
              <small>за месяц</small>
            </b-col>
            <b-col class="align-self-center">
              <p>{{todo.title}}</p>
            </b-col>
            <b-col class="text-right align-self-center">
              <b-button @click="success(todo)" variant="primary">Сделано!</b-button>
            </b-col>
          </b-row>
        </transition>
      </div>
    </div>
    <div>
      <h5>Уже сделано:</h5>
      <div v-for="todo in todos" v-bind:key=todo.id>
        <transition
          name="custom-classes-transition"
          enter-active-class="animated tada"
          leave-active-class="animated bounceOutRight"
        >
          <b-row v-if="!todo.show" vertical-align="center"
                 class="d-flex justify-content-between m-3 p-3 border-bottom">
            <b-col class="text-center">
              <h2>{{todo.month_todo}}</h2>
              <small>за месяц</small>
            </b-col>
            <b-col class="align-self-center">
              <p>{{todo.title}}</p>
            </b-col>
            <b-col class="text-right align-self-center">
              <b-button @click="cancel(todo)" variant="danger">Отменить!</b-button>
            </b-col>
          </b-row>
        </transition>
      </div>
    </div>
  </b-container>
</template>

<script>
  import axios from 'axios';
  import moment from 'moment'

  export default {
    head: {
      title: 'Habitues'
    },
    data({params}) {
      return {
        date: moment(new Date()).format('YYYY-MM-DD'),
        todos: []
      }
    },
    mounted: function () {
      this.fetchTodos();
    },
    methods: {
      token() {
        if (process.browser) {
          return localStorage.getItem('token');
        }
      },
      fetchTodos() {
        if (process.browser) {
          axios.get('/api/todo/' + this.date, {
            headers: {Authorization: "Bearer " + this.token()}
          })
            .then((response) => {
                this.todos = response.data;
              }
            )
            .catch(error => {
              this.$bvModal.show('login')
            });
        }
      },
      success(todo) {
        axios.post('/api/todo/bind', {
          'habitude_id': todo.id,
          'date': this.date
        }, {
          headers: {Authorization: "Bearer " + this.token()}
        })
          .then((response) => {
            console.log(response);
            todo.show = !todo.show
          })
          .catch(error => {
            console.log(error)
          });
      },
      cancel(todo) {
        axios.post('/api/todo/unbind', {
          'habitude_id': todo.id,
          'date': this.date
        }, {
          headers: {Authorization: "Bearer " + this.token()}
        })
          .then((response) => {
            todo.show = !todo.show
          })
          .catch(error => {
            console.log(error)
          });
      }
    }
  }
</script>
<style>
</style>
