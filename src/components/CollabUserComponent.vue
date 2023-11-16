<template>
    <div class="container mt-5">
      <h1>Área do Usuário Logado</h1>
      <p>Bem-vindo {{userposition}} , {{ username }}</p>
      <button class="btn btn-danger" @click.prevent="logout">Logout</button>
    </div>
  </template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      collaborators : {},
      userdata: {},
      username:{},

    };
  },
  mounted() {
    try {
    console.log(this.collaborators)
    this.collaborators = localStorage.getItem('collaborators');
    this.userdata = JSON.parse(this.collaborators);
    this.username = this.userdata.collaborators.name;
    this.userposition = this.userdata.collaborators.position;
    }catch(error) {
                console.error("Error fetching data:", error);
                this.$router.push('/Unauthorized');
    }
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