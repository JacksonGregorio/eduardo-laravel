<template>
    <form >
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" v-model="items.title">
      </div>
      <div class="form-group">
        <label for="imagem">URL da Imagem:</label>
        <input type="text" class="form-control" id="imagem" v-model="items.image">
      </div>
      <div class="form-group">
        <label for="texto">Texto:</label>
        <textarea class="form-control" id="texto" v-model="items.text"></textarea>
      </div>
      <div class="form-group">
        <label for="link">URL do Link:</label>
        <input type="text" class="form-control" id="link" v-model="items.link">
      </div>
      <button type="submit" class="btn btn-primary" @click.prevent="addPost">Adicionar Post</button>
    </form>
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      items: {
        title: '',
        image: '',
        text: '',
        link: ''
      }
    };
  },
  methods: {
    addPost(){
      axios
        .post('/postdashes/create', this.items)
        .then(response => {
          alert('Post criado com sucesso', response.data);
        })
        .catch(error => {
          alert('Erro no registro:', error.response.data);
        });
    }
  }
};
</script>