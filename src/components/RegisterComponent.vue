
<template>
  <div class="container mt-5">
    <h1>Cadastro</h1>
    <form>
      <div class="form-group">
        <label for="newUsername">Usuário:</label>
        <input type="text" class="form-control" id="name" v-model="userData.name" required>
      </div>
      <div class="form-group">
        <label for="newPassword">Senha:</label>
        <input type="password" class="form-control" id="senha" v-model="userData.password" required>
      </div>
      <div class="form-group">
        <label for="newEmail">Email:</label>
        <input type="email" class="form-control" v-model="userData.email" id="email" required>
      </div>
      <button type="submit" class="btn btn-primary" @click.prevent="registerUser">Cadastrar</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      userData: {
        name: '',
        email: '',
        password: ''

      }
    };
  },
  methods: {
    registerUser() {
      axios
        .post('/register', this.userData)
        .then(response => {
          alert('Usuário registrado com sucesso', response.data);
        })
        .catch(error => {
          alert('Erro no registro:', error.response.data);
        });
    }
  }
};
</script>

