<template>
  <div class="main">
    <div class="sidebar">
      <Sidebar />
    </div>

    <div class="content-right p-2 grid grid-cols-4 gap-4  ">
     <div class="navbar">
     
     </div>
    <div class="col-span-3"> 
      <ReceitaList />
    </div>
   <div class="contagem col-span-3">
    <ContagemU />
   </div>
     
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
import ContagemU from "./Usuario/ContagemU.vue";


export default {
  components: {
    Sidebar,
    ReceitaComponent,
    ReceitaList,
    ReceitaForm,
    DespesasListVue,
    Navbar, 
    ContagemU
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
  
  