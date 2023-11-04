<template>
    <form >
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" v-model="novoPost.titulo">
      </div>
      <div class="form-group">
        <label for="imagem">URL da Imagem:</label>
        <input type="text" class="form-control" id="imagem" v-model="novoPost.imagem">
      </div>
      <div class="form-group">
        <label for="texto">Texto:</label>
        <textarea class="form-control" id="texto" v-model="novoPost.texto"></textarea>
      </div>
      <div class="form-group">
        <label for="link">URL do Link:</label>
        <input type="text" class="form-control" id="link" v-model="novoPost.link">
      </div>
      <button type="submit" class="btn btn-primary" @click.prevent="addPost">Adicionar Post</button>
    </form>
</template>

<script>
export default {
  data() {
    return {
      items: [], 
      novoPost: {
        titulo: '',
        imagem: '',
        texto: '',
        link: ''
      }
    };
  },
  methods: {
    addPost() {
      this.items.push({ ...this.novoPost });
      this.novoPost = {
        titulo: '',
        imagem: '',
        texto: '',
        link: ''
      };
    }
  }
};
</script>