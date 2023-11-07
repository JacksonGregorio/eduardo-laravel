<template>
    <div class="container mt-5">
      <h1>Área do Usuário Logado</h1>
      <p>Bem-vindo, Aluno {{ user.name }}</p>
      <button class="btn btn-danger"><a href="/" class="text-white" style="text-decoration: none;">Logout</a></button>
    </div>
  </template>

  
<script>
import axios from 'axios';

export default {
    data() {
        return {
            user: {}
        };
    },
mounted() {
    axios.get('/api/user')
        .then(response => {
            this.user = response.data;
        })
        .catch(error => {
            console.error(error);
        });
      }
}
</script>
  
