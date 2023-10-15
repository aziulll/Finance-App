<template>
    <div>
        <div class="flex items-center space-x-4">
          <img
            class="w-10 h-10 rounded-full"
            src="https://media.licdn.com/dms/image/D4D03AQGv-WXqbiHdzg/profile-displayphoto-shrink_800_800/0/1689260563451?e=1702512000&v=beta&t=lZoBPOcTLPqBMJUqlkIn8DO6X7yLXqF6hmcU2e7VXuw"
            alt=""
          />
          <div class="font-medium dark:text-black">
            <div>{{ Usuario.name }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">
             {{ Usuario.email }}
            </div>
          </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      Usuario: {}
    };
  },
  async created() {
    try {
      const response = await axios.get(`api/usuarios/user/1`);
      this.Usuario = response.data;
    } catch (error) {
      console.error(error);
    }
  },
  methods: {
    // Adicione seus métodos aqui, se necessário
  }
};
</script>
