
import ListaTransacoes from "./components/pages/ListaTransacoes.vue";
import AdicionarTransacao from "./components/pages/AdicionarTransacao.vue";
import ListaProdutos from "./components/pages/ListaProdutos.vue";
import AdicionarProduto from "./components/pages/AdicionarProduto.vue";
import EditarProduto from "./components/pages/EditarProduto.vue";
import Dashboard from "./components/pages/Dashboard.vue";


export const routes = [
    {
        name: "",
        path: "/",
        component: Dashboard
    },
    {
        name: "lista-produtos",
        path: "/lista-produtos",
        component: ListaProdutos
    },
    {
        name: "adicionarProduto",
        path: "/adicionarProduto",
        component: AdicionarProduto
    },
    {
        name: "detalhesProduto",
        path: "/editarProduto",
        component: EditarProduto
    },
    {
        name: "lista-transacoes",
        path: "/lista-transacoes",
        component: ListaTransacoes
    },
    {
        name: "adicionarTransacao",
        path: "/adicionarTransacao",
        component: AdicionarTransacao
    },
];
