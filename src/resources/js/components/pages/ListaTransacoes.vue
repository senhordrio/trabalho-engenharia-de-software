<template>
    <div class="container-fluid w-50">
        <h3 class="text-center">Transacões</h3><br/>
        <b-button to="/adicionarTransacao">Adicionar transação</b-button>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Valor</th>
                <th>Empresa</th>
                <th>Produtos</th>
                <th>Data</th>
                <th>Estado</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="transacao in transacoes" :key="transacao.id">
                <td>{{ transacao.id }}</td>
                <td>{{ transacao.valor }}</td>
                <td>{{ transacao.empresa }}</td>
                <td>{{ transacao.produto }}</td>
                <td>{{ transacao.data }}</td>
                <td>{{ transacao.condicao }}</td>
                
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'detalhesTransacao', params: { id: transacao.id }}" class="btn btn-primary">Detalhes
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
                transacoes: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/lista-transacoes')
                .then(response => {
                    this.transacoes = response.data;
                });
        }
    }
</script>