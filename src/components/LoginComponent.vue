<template>
  <div class="container mt-5">
    <h1>Login</h1>
    <form>
      <div class="form-group">
        <label for="username">Usuário:</label>
        <input type="text" class="form-control" id="username" v-model="name" required />
      </div>
      <div class="form-group">
        <label for="password">senha:</label>
        <input class="form-control" type="password" id="usersenha" v-model="password" required />
      </div>
      <button type="submit" class="btn btn-primary" @click.prevent="userLogin">Login</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: '',
      password: ''
    }
  },
  methods: {
    userLogin() {
      const data = {
        name: this.name,
        password: this.password
      }

      axios
        .post('/login', data)
        .then((response) => {
          console.log('Login bem-sucedido', response.data);
          this.$router.push('/user')
        })
        .catch((error) => {
          if (error.response) {
            console.log('Erro de resposta do servidor:', error.response.data);
          } else if (error.request) {
            console.log('Sem resposta do servidor')
          } else {
            console.log('Erro de configuração da solicitação:', error.message);
          }
        })
    }
  }
}
</script>
