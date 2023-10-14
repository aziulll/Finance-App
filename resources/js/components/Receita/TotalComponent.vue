<template>
    <p class="text-sm flex flex-reverse" style="color: green"><span style="color:black">Soma dos valores: </span>R$ {{ totalValue }},00</p>
</template>

<script>
export default {

// components: {
//   //adicionar componentes
// },
data() {
  return {
    totalValue: 0
  };
},
async created() { // Altere o nome do método para "created"
  try {
    const response = await axios.get("/api/total-receitas");

    this.totalValue = response.data;
    console.log(response);
  } catch (error) {
    console.error(error);
  }
},
methods: {
 // adicionar métodos 
},

};
</script>

