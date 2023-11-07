<script setup>
import HeaderMain from '../components/HeaderMain.vue';
import FooterMain from '../components/FooterMain.vue';
import BancoComponent from '../components/BancoComponent.vue';
import SidebarComponent from '../components/SidebarComponent.vue';
</script>

<template>
  <HeaderMain />
  <main>
    <SidebarComponent/>
    <BancoComponent :items="dashboardItems" />
  </main>
  <FooterMain />
</template>

<script>
import axios from 'axios'

export default {
  components: {
    BancoComponent
  },
  data() {
    return {
      dashboardItems: []
    }
  },
  mounted() {
    this.getUsers()
  },
  methods: {
    async getUsers() {
      let response = await axios.get('/database')
      if (response.status == 200) {
        console.log(response.data)
        this.dashboardItems = response.data.users
      } else {
        console.log('error no get api')
      }
    }
  }
}
</script>
