<template>
    <div>
        <h5 id="associating-form-text-with-form-controls">Name:</h5>
        <h6>{{ receita.name }}</h6>
        <h5 id="associating-form-text-with-form-controls">Description:</h5>
        <p>{{ receita.detalhe }}</p>
        <h5 id="associating-form-text-with-form-controls">Price:</h5>
        <p>{{ receita.valor }}</p>
        <router-link :to="`/receita/${receita.id}/edit`" class="btn btn-primary">Edit</router-link>
    </div>
</template>

<script>
import axios from 'axios';
export default {
data() {
    return {
    receita: {}
    }
},
async created() {
    try {
    const response = await axios.get(`/api/receita/${this.$route.params.id}`);
    this.receita = response.data;
    } catch (error) {
    console.error(error);
    }
}
}
</script>