<template>
 <div class="p-2">
  <div id="list" class="border border-black-500 rounded shadow-md">
    <table class="w-11/12 mx-auto"> <!-- Use w-11/12 para centralizar a tabela -->
      <thead class="p-2">
        <tr>
          <th colspan="4" class="text-2xl text-center p-2">Receitas</th>
        </tr>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Valor</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="receita in receitas" :key="receita.id">
          <td class="p-2">{{ receita.id }}</td> <!-- Adicione espaçamento interno -->
          <td class="p-2">{{ receita.name }}</td> <!-- Adicione espaçamento interno -->
          <td class="p-2">R${{ receita.valor }},00</td> <!-- Adicione espaçamento interno -->
          <td>
            <div class="flex gap-3">
              <router-link
                :to="`/receita/${receita.id}/edit`"
                class="px-4 py-2 w-16 bg-green-500 text-white rounded-md hover:bg-green-600"
              >
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.3282 8.32837L15.8939 5.89405C14.7058 4.706 14.1118 4.11198 13.4268 3.88941C12.8243 3.69364 12.1752 3.69364 11.5727 3.88941C10.8877 4.11198 10.2937 4.706 9.10564 5.89405L7.49975 7.49994M3 20.9997L3.04745 20.6675C3.21536 19.4922 3.29932 18.9045 3.49029 18.3558C3.65975 17.8689 3.89124 17.4059 4.17906 16.9783C4.50341 16.4963 4.92319 16.0765 5.76274 15.237L17.4107 3.58896C18.1918 2.80791 19.4581 2.80791 20.2392 3.58896C21.0202 4.37001 21.0202 5.63634 20.2392 6.41739L8.37744 18.2791C7.61579 19.0408 7.23497 19.4216 6.8012 19.7244C6.41618 19.9932 6.00093 20.2159 5.56398 20.3879C5.07171 20.5817 4.54375 20.6882 3.48793 20.9012L3 20.9997Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              </router-link>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <p>{{ total }}</p>
  </div>
</div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      receitas: [],
      total: 0
    };
  },
  async created() {
    try {
      const response = await axios.get("/api/receita");

      this.receitas = response.data;
      console.log(response);
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    async deleteReceita(id) {
      try {
        await axios.delete(`/api/receita/${id}`);
        this.receitas = this.receitas.filter((receita) => receita.id !== id);
      } catch (error) {
        console.error(error);
      }
    },
  },

  
};
</script>

<style>
.table {
  width: 500px;
}
</style>