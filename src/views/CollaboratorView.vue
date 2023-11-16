<script setup>
import HeaderMain from '../components/HeaderMain.vue';
import FooterMain from '../components/FooterMain.vue';
import SidebarComponent from '../components/SidebarComponent.vue';
import CollabUserComponent from '../components/CollabUserComponent.vue';
import DashbordComponent from '../components/DashbordComponent.vue';
</script>

<template>
  <HeaderMain/>
  <main>
    <SidebarComponent/>
    <CollabUserComponent />
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
  created() {
  const storedToken = localStorage.getItem('token');
  if (storedToken) {
    axios.defaults.headers.common['Authorization'] = `Bearer ${storedToken}`;
  }
},
  methods: {
        async getUsers() {
            try {
                let response = await axios.get('/postDashes');
                if (response.status === 200) {
                    console.log(response.data);
                    this.dashboardItems = response.data.postDashes;
                } else {
                    this.$router.push('/Unauthorized');
                }
            } catch (error) {
                console.error("Error fetching data:", error);
                this.$router.push('/Unauthorized');
            }
        }
        
    }
}
</script>