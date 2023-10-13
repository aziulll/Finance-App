<template>
    <div>
        <div class="drop-shadow-md border border-black-500 w-24 h-24 text-center">
          <h1>Usuarios</h1>
            <p>{{ totalUsuarios}}</p>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      totalUsuarios: 0  // Inicialize com um valor padrão se desejar
    };
  },
  
  mounted() {
    // Faça a solicitação para a API usando o Axios
    axios.get('/total-usuarios')
      .then(response => {
        this.totalUsuarios = response.data  .totalUsuarios;
      })
      .catch(error => {
        console.error('Erro:', error);
      });
  }
};
</script>