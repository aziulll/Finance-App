  <template>
  <div class="main">
    <div class="sidebar">
      <Sidebar />
    </div>

    <div class="content-right p-2 grid grid-cols-4 gap-4">
      <div class="navbar">
     
      <User />
      </div>
      <div class="col-span-2">
        <router-view></router-view>
      </div>
      <!-- <div class="contagem col-span-3">
      <ContagemU />
    </div> -->
    </div>

    <!-- <div class="content-right flex flex-col items-center">
        <div class="flex mb-12">
          <ReceitaList />
          <DespesasListVue />
        </div>
      </div> -->
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
};
</script>

  <style scoped>
.content-right {
  margin-left: 220px; /* Ajuste a largura do sidebar */
}

.navbar {
  width: 100%;
  height: 60px;
}
</style>
    
    