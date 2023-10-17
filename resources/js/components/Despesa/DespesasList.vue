<template>
  <main>
    <div class="list-father flex items-center justify-between">
      
      <h1 class="text-2xl font-bold">Despesas</h1>

      

<form class="flex items-center">
  <label for="simple-search" class="sr-only">Search</label>
  <div class="relative w-full">
    <input
      type="text"
      id="simple-search"
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
      placeholder="Procurar nome..."
      required
    />
  </div>
  <button
    type="submit"
    class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
  >
    <svg
      class="w-4 h-4"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 20 20"
    >
      <path
        stroke="currentColor"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
      />
    </svg>
    <span class="sr-only">Search</span>
  </button>
</form>

<router-link
  :to="`/receita/create`"
  class="p-2 w-12 text-black rounded-md"
>
  <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
    <g
      id="SVGRepo_tracerCarrier"
      stroke-linecap="round"
      stroke-linejoin="round"
    ></g>
    <g id="SVGRepo_iconCarrier">
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M2 16C2 8.26801 8.26801 2 16 2C23.732 2 30 8.26801 30 16C30 23.732 23.732 30 16 30C8.26801 30 2 23.732 2 16ZM17 11C17 10.4477 16.5523 10 16 10C15.4477 10 15 10.4477 15 11V15L11 15C10.4477 15 10 15.4477 10 16C10 16.5523 10.4477 17 11 17L15 17V21C15 21.5523 15.4477 22 16 22C16.5523 22 17 21.5523 17 21V17H21C21.5523 17 22 16.5523 22 16C22 15.4477 21.5523 15 21 15H17V11Z"
        fill="#3A52EE"
      ></path>
    </g>
  </svg>
</router-link>
</div>

      <div id="list" class="border border-black-500 rounded shadow-md">
        
        <table class="w-11/12 mx-auto">
          <thead class="p-2">
           
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Valor</th>
              <th scope="col">Categoria</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="despesa in paginatedDespesas" :key="despesa.id">
              <td>{{ despesa.id }}</td>
              <td>{{ despesa.name }}</td>
              <td>R${{ despesa.valor }},00</td>
              <td>{{ despesa.categoria }}</td>
              <td>
                <div class="flex gap-3">
                  <router-link
                    :to="`/receita/${receita.id}/edit`"
                    class="px-4 py-2 w-16 bg-green-500 text-white rounded-md hover:bg-green-600"
                  >
                    <svg
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g
                        id="SVGRepo_tracerCarrier"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></g>
                      <g id="SVGRepo_iconCarrier">
                        <path
                          d="M18.3282 8.32837L15.8939 5.89405C14.7058 4.706 14.1118 4.11198 13.4268 3.88941C12.8243 3.69364 12.1752 3.69364 11.5727 3.88941C10.8877 4.11198 10.2937 4.706 9.10564 5.89405L7.49975 7.49994M3 20.9997L3.04745 20.6675C3.21536 19.4922 3.29932 18.9045 3.49029 18.3558C3.65975 17.8689 3.89124 17.4059 4.17906 16.9783C4.50341 16.4963 4.92319 16.0765 5.76274 15.237L17.4107 3.58896C18.1918 2.80791 19.4581 2.80791 20.2392 3.58896C21.0202 4.37001 21.0202 5.63634 20.2392 6.41739L8.37744 18.2791C7.61579 19.0408 7.23497 19.4216 6.8012 19.7244C6.41618 19.9932 6.00093 20.2159 5.56398 20.3879C5.07171 20.5817 4.54375 20.6882 3.48793 20.9012L3 20.9997Z"
                          stroke="#ffffff"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </g>
                    </svg>
                  </router-link>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        
      </div>
    


    <div class="flex flex-col-reverse items-center">
      <!-- Help text -->
       <span class="text-sm"></span>
      <!-- Buttons -->
      <div class="inline-flex mt-2 xs:mt-0">
        <button
          @click="previousPage"
          :disabled="currentPage === 1"
          class="flex items-center justify-center 	"
        >
        <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
    </svg>
        </button>
        <button
          @click="nextPage"
          :disabled="currentPage === pageCount"
          class="flex items-center justify-center "
        >
        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg>
        </button>
      </div>
    </div>
  </main>
</template>

<script>
import axios from "axios";
// import TotalComponent from "./TotalComponent.vue";

export default {
  components: {
    // TotalComponent,
  },
  data() {
    return {
      despesas: [],
      total: 0,
      currentPage: 1,
      perPage: 10,
    };
  },
  computed: {
    paginatedReceitas() {
      const start = (this.currentPage - 1) * this.perPage;
      const end = start + this.perPage;
      return this.despesas.slice(start, end);
    },
    pageCount() {
      return Math.ceil(this.despesas.length / this.perPage);
    },
  },
  async created() {
    try {
      const response = await axios.get("/api/despesa/despesa");
      this.despesas = response.data;
      console.log(response);
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    previousPage() {
      if (this.currentPage > 1) {
        this.currentPage -= 1;
      }
    },
    nextPage() {
      if (this.currentPage < this.pageCount) {
        this.currentPage += 1;
      }
    },
  },
};
</script>


<style scoped>
 #list {

  padding: 10px 0 10px 10px;
  margin: 20px 0 0 0;

 }


</style>