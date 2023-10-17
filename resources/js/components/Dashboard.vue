  <template>
  <div class="main">
    <div class="sidebar">
      <Sidebar />
    </div>

    <div class="content-right p-2 ">
      
      
      <!-- <User  v-if="!isUserConfigRoute"/> -->
    
      <div>
        <router-view></router-view>
      </div>
    
    </div>

   
  </div>
</template>
    
    <script>
import Sidebar from './Sidebar.vue';
import User from './Usuario/Usuario.vue'

export default {
  components: {
    Sidebar,
    User

  },
  data() {
    return {
      showSidebar: false,
    };
  },
  computed: {
    isUserConfigRoute() {
      // Use o Vue Router para verificar a rota atual
      return this.$route.path === "/usuarios/config";
    },
  },

};
</script>

  <style scoped>
.content-right {
  margin-left: 220px; /* Ajuste a largura do sidebar */
}


</style>
    
    