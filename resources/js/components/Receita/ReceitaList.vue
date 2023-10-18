<template>
  <main>
    <div class="list-father flex items-center justify-between">
      <h1 class="text-2xl font-bold">Receitas</h1>

      <form @submit.prevent="searchReceitas" class="flex items-center">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
          <input
            type="text"
            v-model="termoDeBusca"
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

   
  

    <div v-if="resultados.length > 0">
  
  <div
      id="list"
      class="border border-black-500 rounded shadow-md"
      
    >
      <table class="w-11/12 mx-auto ">
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
          <tr v-for="receita in paginatedResultados" :key="receita.id">
            <td>{{ receita.id }}</td>
            <td>{{ receita.name }}</td>
            <td>R${{ receita.valor }},00</td>
            <td>{{ receita.categoria }}</td>
            <td>
              <div class="flex gap-3">
                <router-link
                  :to="`/receita/${receita.id}`"
                  class="px-4 py-2 w-16 bg-green-500 text-white rounded-md hover:bg-green-600"
                >
                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 340.274 340.274" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M293.629,127.806l-5.795-13.739c19.846-44.856,18.53-46.189,14.676-50.08l-25.353-24.77l-2.516-2.12h-2.937 c-1.549,0-6.173,0-44.712,17.48l-14.184-5.719c-18.332-45.444-20.212-45.444-25.58-45.444h-35.765 c-5.362,0-7.446-0.006-24.448,45.606l-14.123,5.734C86.848,43.757,71.574,38.19,67.452,38.19l-3.381,0.105L36.801,65.032 c-4.138,3.891-5.582,5.263,15.402,49.425l-5.774,13.691C0,146.097,0,147.838,0,153.33v35.068c0,5.501,0,7.44,46.585,24.127 l5.773,13.667c-19.843,44.832-18.51,46.178-14.655,50.032l25.353,24.8l2.522,2.168h2.951c1.525,0,6.092,0,44.685-17.516 l14.159,5.758c18.335,45.438,20.218,45.427,25.598,45.427h35.771c5.47,0,7.41,0,24.463-45.589l14.195-5.74 c26.014,11,41.253,16.585,45.349,16.585l3.404-0.096l27.479-26.901c3.909-3.945,5.278-5.309-15.589-49.288l5.734-13.702 c46.496-17.967,46.496-19.853,46.496-25.221v-35.029C340.268,146.361,340.268,144.434,293.629,127.806z M170.128,228.474 c-32.798,0-59.504-26.187-59.504-58.364c0-32.153,26.707-58.315,59.504-58.315c32.78,0,59.43,26.168,59.43,58.315 C229.552,202.287,202.902,228.474,170.128,228.474z"></path> </g> </g> </g> </g></svg>
                </router-link>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>    
  
</div>
<div v-else>
   <div
      id="list"
      class="border border-black-500 rounded shadow-md"
      
    >
      <table class="w-11/12 mx-auto ">
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
          <tr v-for="receita in paginatedReceitas" :key="receita.id">
            <td>{{ receita.id }}</td>
            <td>{{ receita.name }}</td>
            <td>R${{ receita.valor }},00</td>
            <td>{{ receita.categoria }}</td>
            <td>
              <div class="flex gap-3">
                <router-link
                  :to="`/receita/${receita.id}`"
                  class="px-4 py-2 w-16 bg-green-500 text-white rounded-md hover:bg-green-600"
                >
                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 340.274 340.274" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M293.629,127.806l-5.795-13.739c19.846-44.856,18.53-46.189,14.676-50.08l-25.353-24.77l-2.516-2.12h-2.937 c-1.549,0-6.173,0-44.712,17.48l-14.184-5.719c-18.332-45.444-20.212-45.444-25.58-45.444h-35.765 c-5.362,0-7.446-0.006-24.448,45.606l-14.123,5.734C86.848,43.757,71.574,38.19,67.452,38.19l-3.381,0.105L36.801,65.032 c-4.138,3.891-5.582,5.263,15.402,49.425l-5.774,13.691C0,146.097,0,147.838,0,153.33v35.068c0,5.501,0,7.44,46.585,24.127 l5.773,13.667c-19.843,44.832-18.51,46.178-14.655,50.032l25.353,24.8l2.522,2.168h2.951c1.525,0,6.092,0,44.685-17.516 l14.159,5.758c18.335,45.438,20.218,45.427,25.598,45.427h35.771c5.47,0,7.41,0,24.463-45.589l14.195-5.74 c26.014,11,41.253,16.585,45.349,16.585l3.404-0.096l27.479-26.901c3.909-3.945,5.278-5.309-15.589-49.288l5.734-13.702 c46.496-17.967,46.496-19.853,46.496-25.221v-35.029C340.268,146.361,340.268,144.434,293.629,127.806z M170.128,228.474 c-32.798,0-59.504-26.187-59.504-58.364c0-32.153,26.707-58.315,59.504-58.315c32.78,0,59.43,26.168,59.43,58.315 C229.552,202.287,202.902,228.474,170.128,228.474z"></path> </g> </g> </g> </g></svg>
                </router-link>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  
    

</div>

<TotalComponent />

    <div class="flex flex-col-reverse items-center">
      <!-- Help text -->
      <span class="text-sm"></span>
      <!-- Buttons -->
      <div class="inline-flex mt-2 xs:mt-0">
        <button
          @click="previousPage"
          :disabled="currentPage === 1"
          class="flex items-center justify-center"
        >
          <svg
            class="w-3.5 h-3.5 mr-2"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 14 10"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M13 5H1m0 0 4 4M1 5l4-4"
            />
          </svg>
        </button>
        <button
          @click="nextPage"
          :disabled="currentPage === pageCount"
          class="flex items-center justify-center"
        >
          <svg
            class="w-3.5 h-3.5 ml-2"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 14 10"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M1 5h12m0 0L9 1m4 4L9 9"
            />
          </svg>
        </button>
      </div>
    </div>
  </main>
</template>

<script>
import axios from "axios";
import TotalComponent from "./TotalComponent.vue";


export default {
  components: {
    TotalComponent,
 
  },
  data() {
    return {
      receitas: [],
      total: 0,
      currentPage: 1,
      perPage: 10,
      termoDeBusca: "",
    
     
      resultados: [],
    };
  },
  computed: {
    paginatedReceitas() {
      const start = (this.currentPage - 1) * this.perPage;
      const end = start + this.perPage;
      return this.receitas.slice(start, end);
    },
    pageCount() {
      return Math.ceil(this.receitas.length / this.perPage);
    },
    paginatedResultados() {
      const start = (this.currentPage - 1) * this.perPage;
      const end = start + this.perPage;
      return this.resultados.slice(start, end);
    },
  },
  async created() {
    try {
      const response = await axios.get("/api/receita/receita");
      this.receitas = response.data;
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
    searchReceitas() {
    axios
      .get(`/api/receita/pesquisar?termo_de_busca=${this.termoDeBusca} `)
      .then((response) => {
        this.resultados = response.data;
      })
      .catch((error) => {
        console.error(error);
      });
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