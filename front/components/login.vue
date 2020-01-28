<template>
  <div>
    <b-modal id='login' title='Авторизация'>
      <b-form>
        <b-form-group>
          <b-form-input name='email' v-model="form.email" placeholder='email@email.com'/>
        </b-form-group>
        <b-form-group>
          <b-form-input name='password' v-model="form.password" placeholder='password'/>
        </b-form-group>
      </b-form>
      <template v-slot:modal-footer>
        <div class='w-100'>
          <b-button
            variant='primary'
            size='sm'
            class='float-right'
            @click='login'
          >
            Войти
          </b-button>
        </div>
      </template>
    </b-modal>
  </div>
</template>


<script>
  import axios from 'axios';

  export default {
    name: 'login',
    data() {
      return {
        'form': {
          'email': '',
          'password': ''
        }
      }
    },
    methods: {
      login() {
        return axios.post('/api/user/auth', this.form)
          .then((response) => {
            localStorage.setItem('token', response.data.token);
            this.$bvModal.hide('login');
            this.$forceUpdate();
          })
          .catch(error => {
            console.log(error)
          });
      }
    }
  }
</script>

<style scoped>

</style>
