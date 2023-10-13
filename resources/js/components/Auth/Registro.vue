<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
      <div class="grid grid-cols-2 gap-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <!-- Lado Esquerdo (Imagem) -->
        <div class="col-span-1">
          <img src="@/assets/logo.png" alt="" srcset="" class="max-w-full h-auto" />
        </div>
  
        
        <!-- Lado Direito (Formulário) -->
        <div class="col-span-1 ">
          <form @submit.prevent="registrar" class="px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
               Nome
              </label>
              <input v-model="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Nome">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                E-mail
              </label>
              <input v-model="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="E-mail">
            </div>
            
            <div class="mb-6">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Senha
              </label>
              <input v-model="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Senha">
            </div>
        
            <div class="flex items-center justify-between">
                <button @click="Registre" class="bg-teal-400 w-32 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline" type="submit">
             Registre
            </button>
            
              <a>Já possuo acesso</a>
            </div>
          </form>
        </div>
      </div>
  
    
    </div>
  </template>
  <script>
  export default {
    data() {
      return {
        username: '',
        password: ''
      };
    },
    methods: {
    login() {
      // Lógica de login aqui
      console.log(`Nome de usuário: ${this.username}`);
      console.log(`Senha: ${this.password}`);
      // Redirecionar para a página de destino após o login bem-sucedido
      this.$router.push('/');
    } ,
    registrar() {
      this.$router.push('/');
    }
  }
  };
  
  
  
  </script>
  