
import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';


import App from './components/App.vue';
import ReceitaList from './components/Receita/ReceitaList.vue';
import ReceitaForm from './components/Receita/ReceitaForm.vue';
import Receita from './components/Receita/ReceitaComponent.vue';
import Usuarios from './components/Usuario/ContagemU.vue'
import Home from './components/Home.vue'
import Configurações from './components/Usuario/ConfigComponent.vue'
import DespesaList from './components/Despesa/DespesasList.vue'
import DespesaForm from './components/Despesa/DespesaForm.vue'
import Login from './components/Auth/Login.vue'


const router = createRouter({
    history: createWebHistory(),
    routes: [
        //auth

        {path: '/login', component: Login},
        //receitas
        { path: '/receitas', component: ReceitaList, props: true },
        { path: '/receita/:id', component: Receita, props: true },
        { path: '/receita/:id/edit', component: ReceitaForm, props: true },
        { path: '/receita/create', component: ReceitaForm },
        

        //despesas 
        // { path: '/despesas', component: DespesaList },
        // {
        //     path: '/despesas/create', component: DespesaForm
        // },
        // // {path: '/despesas/:id', component: }

        { path: '/home', component: Home }, 

        // //user
        // { path: '/usuarios', component: Usuarios, name: 'TotalUsuarios' },
        // { path: '/usuarios/config', component: Configurações, name: 'Config' }
    ]
});

const app = createApp(App);
app.use(router);
app.mount('#app');