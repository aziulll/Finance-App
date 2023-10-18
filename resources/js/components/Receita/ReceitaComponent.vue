<template>
  <div>
    {{ receita.name }}
        {{ receita.created_at }}
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      receita: {},
    };
  },
  async created() {
    try {
      const response = await axios.get(
        `/api/receita/receita/${this.$route.params.id}`
      );
      this.receita = response.data;
    } catch (error) {
      console.error(error);
    }
  },
};
</script>