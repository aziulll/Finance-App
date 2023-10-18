<template>
  <div>

    <h1 class="mb-6 text-lg font-extrabold	"><strong>Configurações da conta</strong></h1>
    <form>
      <div class="mb-4">
        <label for="nome" class="block text-gray-700 text-sm font-bold mb-2"
          >Nome:</label
        >
        <input
          type="text"
          id="nome"
          name="nome"
          class="w-62 p-2 border rounded-md focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          placeholder="Digite seu nome"
          required
        />
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2"
          >Email:</label
        >
        <input
          type="email"
          id="email"
          name="email"
          class="w-62 p-2 border rounded-md focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          required
        />
      </div>
      <div class="mb-4">
        <label for="about" class="block text-gray-700 text-sm font-bold mb-2"
          >Sobre:</label
        >
        <textarea
          id="about"
          name="about"
          class="w-56 p-2 border rounded-md focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          rows="4"
          placeholder="Conte-nos sobre você"
          required
        ></textarea>
      </div>

      <div class="flex items-start">
        <!-- <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
        </div> -->
      </div>
      <button
        type="submit"
        class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
      >
        Salvar alterações
      </button>
    </form>
  </div>
</template>

<script>

export default {
  
  components: {

  },

  data() {
     return {
      usuario: {
        
      }
     }
  },

  async created() {
    try {
      const response = await axios.get(`api/usuarios/user/1`);
      this.usuario = response.data;
    } catch (error) {
      console.error(error);
    }
  },
  methods: {

  },
}

</script>