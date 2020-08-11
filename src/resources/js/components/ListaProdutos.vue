<template>
    <div>
        <h3 class="text-center">Produtos</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Opção</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="produto in produtos" :key="produto.id">
                <td>{{ produto.id }}</td>
                <td>{{ produto.nome }}</td>
                <td>{{ produto.valor }}</td>
                <td>{{ produto.quantidade }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editar', params: { id: produto.id }}" class="btn btn-primary">Editar
                        </router-link>
                        <button class="btn btn-danger" @click="deletarProduto(produto.id)">Deletar</button>
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
                .get('http://localhost:8000/api/produtos')
                .then(response => {
                    this.produtos = response.data;
                });
        },
        methods: {
            deletarProduto(id) {
                this.axios
                    .delete(`http://localhost:8000/api/produto/deletar/${id}`)
                    .then(response => {
                        let i = this.produtos.map(item => item.id).indexOf(id); // find index of your object
                        this.produtos.splice(i, 1)
                    });
            }
        }
    }
</script>