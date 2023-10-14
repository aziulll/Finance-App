<template>
    <div class=" grid grid-cols-4 gap-4">
        <div class="drop-shadow-md border border-black-500 w-62 h-62 text-center  m-2">
          <h1>Usuarios</h1>
            <p>{{ totalUsuarios}}</p>
        </div>
    </div>

   
</template>

<script>

export default {

// components: {
//   //adicionar componentes
// },
data() {
  return {
    totalUsuarios: 0
  };
},
async created() { // Altere o nome do método para "created"
  try {
    const response = await axios.get("/api/total-usuarios");

    this.totalUsuarios = response.data;
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

<style>
 p {
  color: black;
  font-family: Arial, Helvetica, sans-serif;
  font-size: large;
  padding: 10px;
  text-align: center;
  align-items: center;
 }
</style>