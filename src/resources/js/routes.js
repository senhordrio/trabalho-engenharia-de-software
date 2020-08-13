
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
        name: "produtos",
        path: "/produtos",
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
    }
];
