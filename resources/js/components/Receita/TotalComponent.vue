<template>
    <p class="text-sm flex flex-reverse" style="color: green"><span style="color:black">Total: </span> R$ {{ totalValue }},00</p>
</template>

<script>
export default {


data() {
  return {
    totalValue: 0
  };
},
async created() { 
  try {
    const response = await axios.get("/api/receita/total-receitas");

    this.totalValue = response.data;
    console.log(response);
  } catch (error) {
    console.error(error);
  }
},
// methods: {
//   adicionar métodos 
// },

};
</script>

