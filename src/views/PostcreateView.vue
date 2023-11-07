<script setup>
import HeaderMain from '../components/HeaderMain.vue';
import FooterMain from '../components/FooterMain.vue';
import CreatepostComponent from '../components/CreatepostComponent.vue';
import SidebarComponent from '../components/SidebarComponent.vue';
</script>

<template>
  <HeaderMain/>
  <main>
    <SidebarComponent/>
    <CreatepostComponent/>
  </main>
  <FooterMain/>
</template>