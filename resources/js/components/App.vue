<template>
   <div>

    <Dashboard />
   </div>
     



   
 

</template>

<script>

import Dashboard from '@/components/Dashboard.vue';

export default {
  
  components: {
    
    Dashboard,
  },
  data() {
    return {
      showSidebar: false,
    };
  },
  
};
</script>

<style>
.smaller-banner {
  max-height: 50px; /* Defina a altura máxima desejada para o banner */
}
</style>

