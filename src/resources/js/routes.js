import ListaProdutos from './components/ListaProdutos.vue';
import AdicionarProduto from './components/AdicionarProduto.vue';
import EditarProduto from './components/EditarProduto.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: ListaProdutos
    },
    {
        name: 'adicionar',
        path: '/adicionar',
        component: AdicionarProduto
    },
    {
        name: 'editar',
        path: '/editar/:id',
        component: EditarProduto
    }
];