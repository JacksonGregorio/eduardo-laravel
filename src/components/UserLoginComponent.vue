<template>
    <div class="container mt-5">
      <h1>Área do Usuário Logado</h1>
      <p>Bem-vindo Aluno, {{ username }}</p>
      <button class="btn btn-danger" @click.prevent="logout">Logout</button>
    </div>
  </template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      user : {},
      userdata: {},
      username:{}
    };
  },
  mounted() {
    console.log(this.user)
    this.user = localStorage.getItem('user');
    this.userdata = JSON.parse(this.user);
    this.username = this.userdata.user.name
  },
  methods: {
  logout() {
    localStorage.removeItem('token');
    delete axios.defaults.headers.common['Authorization'];
    this.$router.push('/');
  }
}
};
</script>
  
