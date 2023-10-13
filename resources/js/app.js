
import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';


import App from './components/App.vue';
import ReceitaList from './components/Receita/ReceitaList.vue';
import ReceitaForm from './components/Receita/ReceitaForm.vue';
import Receita from './components/Receita/ReceitaComponent.vue';
import Usuarios from './components/Usuario/ContagemU.vue'
import Login from './components/Auth/Login.vue'



const router = createRouter({
    history: createWebHistory(),
    routes: [
        //auth
        { path: '/login', component: Login, props: true },
        //receitas
        { path: '/receitas', component:ReceitaList, props: true },
        { path: '/receita/:id', component: Receita, props: true},
        { path: '/receita/:id/edit', component: ReceitaForm, props: true },
        { path: '/products/create', component: ReceitaForm},

        //user
        {path: '/usuarios', component: Usuarios, name:'TotalUsuarios'}
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');