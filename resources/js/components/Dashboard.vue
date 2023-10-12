<template>
  <div class="main">
    <div class="sidebar">
      <Sidebar />
    </div>

    <div class="content-right p-2">
     <div class="navbar">
     
     </div>
     <ReceitaList />
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
import Sidebar from "./Sidebar.vue";
import ReceitaComponent from "./Receita/ReceitaComponent.vue";
import ReceitaList from "./Receita/ReceitaList.vue";
import ReceitaForm from "./Receita/ReceitaForm.vue";
import DespesasListVue from "./Despesa/DespesasList.vue";
import Navbar from './Navbar.vue';


export default {
  components: {
    Sidebar,
    ReceitaComponent,
    ReceitaList,
    ReceitaForm,
    DespesasListVue,
    Navbar
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
  
  