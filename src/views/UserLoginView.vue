<script setup>
import UserLoginComponent from '../components/UserLoginComponent.vue';
import HeaderMain from '../components/HeaderMain.vue';
import FooterMain from '../components/FooterMain.vue';
import DashbordComponent from '../components/DashbordComponent.vue';


</script>

<template>
  <HeaderMain/>
  <main>
    <UserLoginComponent/>
    <DashbordComponent :items="dashboardItems"/>
  </main>
  <FooterMain/>
</template>

<script>

export default {
  components: {
    DashbordComponent
  },
  data() {
    return {
      dashboardItems: [
        {
          imagem: "https://miro.medium.com/v2/resize:fit:900/1*OrjCKmou1jT4It5so5gvOA.jpeg",
          titulo: "Card nuumero 1",
          texto: "Descrição do Card 1",
          link: "https://www.exemplo.com/link1"
        },
        {
          imagem: "https://miro.medium.com/v2/resize:fit:900/1*OrjCKmou1jT4It5so5gvOA.jpeg",
          titulo: "Card numer 2",
          texto: "Descrição do 2",
          link: "https://www.exemplo.com/link2"
        },
        {
          imagem: "https://miro.medium.com/v2/resize:fit:900/1*OrjCKmou1jT4It5so5gvOA.jpeg",
          titulo: "Card numero 3",
          texto: "Descrição do Card 3",
          link: "https://www.exemplo.com/link3"
        }
      ]
    };
  }
};

</script>
