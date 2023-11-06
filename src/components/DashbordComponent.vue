<template>
    <div class="container">
      <div class="row">
        <div class="col-md-4" v-for="(item, index) in items" :key="index">
          <div class="card">
            <img :src="item.image" class="card-img-top" :alt="item.titulo" />
            <div class="card-body">
              <h5 class="card-title">{{ item.title }}</h5>
              <p class="card-text">{{ item.text }}</p>
              <a :href="item.link" class="btn btn-primary" target="_blank">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      items: {
        type: Array,
        required: true
      }
    }
  };
  </script>