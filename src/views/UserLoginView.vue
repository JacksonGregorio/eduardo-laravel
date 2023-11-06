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
import axios from 'axios';

export default {
  components: {
    DashbordComponent
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
      let response = await axios.get('/postDashes')
      if (response.status == 200) {
        console.log(response.data)
        this.dashboardItems = response.data.postDashes
      } else {
        console.log('error no get api')
      }
    }
  }
}
</script>