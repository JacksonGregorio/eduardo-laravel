<script setup>
import { RouterLink, RouterView } from 'vue-router';
</script>

<template>
      <nav>
        <RouterLink to="/"/>
        <RouterLink to="/about"/>
        <RouterLink to="/login"/>
        <RouterLink to="/register"/>
        <RouterLink to="/user"/>
        <RouterLink to="/database"/>
        <RouterLink to="/collab/login"/>
        <RouterLink to="/collabuser"/>
        <RouterLink to="/collabregister"/>
      </nav>
  <RouterView />
</template>

