
import ListaTransacoes from "./components/pages/ListaTransacoes.vue";
import AdicionarTransacao from "./components/pages/AdicionarTransacao.vue";
import ListaProdutos from "./components/pages/ListaProdutos.vue";
import AdicionarProduto from "./components/pages/AdicionarProduto.vue";
import EditarProduto from "./components/pages/EditarProduto.vue";
import Dashboard from "./components/pages/Dashboard.vue";
import ListaEmpresas from "./components/pages/ListaEmpresas";
import AdicionarEmpresa from "./components/pages/AdicionarEmpresa";
import Login from "./components/pages/Login";


export const routes = [
    {
        name: "login",
        path: "/",
        component: Login
    },
    {
        name: "dashboard",
        path: "/dashboard",
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
    {
        name: "lista-empresas",
        path: "/lista-empresas",
        component: ListaEmpresas
    },
    {
        name: "adicionarEmpresa",
        path: "/adicionarEmpresa",
        component: AdicionarEmpresa
    }
];
