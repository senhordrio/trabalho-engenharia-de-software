<template>
    <div class="container-fluid w-50">
        <h3 class="text-center">Produtos</h3><br/>
        <b-button to="/adicionarProduto">Adicionar produto</b-button>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>ID</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Opção</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="produto in produtos" :key="produto.id">
                <td>{{ produto.nome }}</td>
                <td>{{ produto.id }}</td>
                <td>{{ produto.valor }}</td>
                <td>{{ produto.quantidade }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'detalhesProduto', params: { id: produto.id }}" class="btn btn-primary">Detalhes
                        </router-link>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                produtos: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/lista-produtos')
                .then(response => {
                    this.produtos = response.data;
                });
        }
    }
</script>