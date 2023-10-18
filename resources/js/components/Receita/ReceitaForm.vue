<template>
  <div>
    <h2 v-if="isNewReceita" class="text-2xl font-bold">Nova Receita</h2>
    <h2 v-else class="text-2xl font-bold">Editar Receita</h2>
    <form @submit.prevent="submitForm" class="mt-4 space-y-4">
      <div class="mb-3">
        <label for="name" class="block text-sm font-medium text-gray-700"
          >Name:</label
        >
        <input
          class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          type="text"
          id="name"
          v-model="receita.name"
          required
        />
      </div>
      <div class="mb-3">
        <label for="description" class="block text-sm font-medium text-gray-700"
          >Description:</label
        >
        <textarea
          class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          id="description"
          v-model="receita.detalhe"
          required
        ></textarea>
      </div>
      <div class="mb-3">
        <label for="price" class="block text-sm font-medium text-gray-700"
          >Price:</label
        >
        <input
          class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          type="number"
          id="price"
          v-model="receita.valor"
          required
        />
      </div>

      <div class="mb-3">
        <label for="categoria" class="block text-sm font-medium text-gray-700"
          >categoria</label
        >
        <input
          class="mt-1 p-2 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none focus:ring-opacity-50"
          type="text"
          id="price"
          v-model="receita.categoria"
          required
        />
      </div>


            <button
        type="submit"
        v-if="isNewReceita"
        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600"
      >
        Adicionar Receita
      </button>
      <button
        type="submit"
        v-else
        class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600"
      >
        Atualizar Receita
      </button>
    </form>

    <Notification
      v-if="showSuccessNotification"
      message="Nova receita criada com sucesso!"
      type="success"
    />
    <Notification
      v-if="showErrorNotification"
      message="Ocorreu um erro ao criar a receita."
      type="error"
    />
  
  </div>
</template>
  
  <script>
import axios from "axios";
import Notification from '../Notification.vue';


export default {
  data() {
    return {
      receita: {
        name: "",
        detalhe: "",
        valor: 0,
        categoria: "",
      },
      showSuccessNotification: false,
      showErrorNotification: false,

    };
  },
  components: {
      Notification,
  },
  computed: {
    isNewReceita() {
      return !this.$route.path.includes("edit");
    },
  },
  async created() {
    if (!this.isNewReceita) {
      const response = await axios.get(
        `/api/receita/receita/${this.$route.params.id}`
      );
      this.receita = response.data;
    }
  },
  methods: {
    async submitForm() {
      try {
        if (this.isNewReceita) {
          await axios.post("/api/receita/nova-receita", this.receita);
          this.showSuccessNotification = true;
          console.log("nova receita criada");
        } else {
          await axios.put(
            `/api/receita/editar-receita/${this.$route.params.id}`,
            this.receita
          );
        }
        this.$router.push("/receitas");
      } catch (error) {
        console.error(error);
        this.showErrorNotification = true;
      }
    },
  },
};
</script>