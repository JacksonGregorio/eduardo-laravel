<template>
    <div class="container mt-5">
      <h1>Login do colaborador</h1>
      <form>
        <div class="form-group">
          <label for="username">Usuário:</label>
          <input type="text" class="form-control" id="username2" v-model="name" required />
        </div>
        <div class="form-group">
          <label for="password">senha:</label>
          <input class="form-control" type="password" id="usersenha2" v-model="password" required />
        </div>
        <button type="submit" class="btn btn-primary" @click.prevent="userLoginCollab">Login</button>
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
      userLoginCollab() {
        const data = {
          name: this.name,
          password: this.password
        }
  
        axios
          .post('/collab/login', data)
          .then((response) => {
            console.log('Login bem-sucedido', response.data)
            localStorage.setItem('collaborators', JSON.stringify(response.data));
            localStorage.setItem('token', response.data.token);
          axios.defaults.headers.common['Authorization'] = `Bearer ${response.data.token}`;
            this.$router.push('/collabuser');
          })
          .catch((error) => {
            if (error.response) {
              console.log('Erro de resposta do servidor:', error.response.data);
            } else if (error.request) {
              console.log('Sem resposta do servidor');
            } else {
              console.log('Erro de configuração da solicitação:', error.message);
            }
          })
      }
    }
  }
  </script>