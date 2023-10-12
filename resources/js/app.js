
import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';


import App from './components/App.vue';
import ReceitaList from './components/Receita/ReceitaList.vue';
import ReceitaForm from './components/Receita/ReceitaForm.vue';
import Receita from './components/Receita/ReceitaComponent.vue';



const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component:ReceitaList, props: true },
        { path: '/receita/:id', component: Receita, props: true},
        { path: '/receita/:id/edit', component: ReceitaForm, props: true },
        { path: '/products/create', component: ReceitaForm,props: true },
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');