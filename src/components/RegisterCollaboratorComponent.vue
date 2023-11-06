<template>
  <div class="container mt-5">
    <h1>Cadastro</h1>
    <form>
      <div class="form-group">
        <label for="newUsername">Usuário:</label>
        <input type="text" class="form-control" id="name" v-model="userData.name" required />
      </div>
      <div class="form-group">
        <label for="newPassword">Senha:</label>
        <input
          type="password"
          class="form-control"
          id="password"
          v-model="userData.password"
          required
        />
      </div>
      <div class="form-group">
        <label for="newEmail">Email:</label>
        <input type="email" class="form-control" v-model="userData.email" id="email" required />
      </div>
      <div class="form-group">
        <label for="newPosition">Cargo:</label>
        <select id="position" class="form-control" v-model="userData.position" @change="userData.position" required>
          <option value="professor">Professor</option>
          <option value="colaborador">Colaborador</option>
          <option value="ajudante">Ajudante</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" @click.prevent="registerUserColab">Cadastrar</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  data() {
    return {
      userData: {
        name: '',
        email: '',
        password: '',
        position: 'ajudante'
      }
    }
  },
  methods: {
    registerUserColab() {
      axios
        .post('http://localhost:8000/api/collabregister', this.userData)
        .then((response) => {
          alert('Usuário registrado com sucesso', response.data)
        })
        .catch((error) => {
          alert('Erro no registro:', error.response.data)
        })
    }
  }
}
</script>
