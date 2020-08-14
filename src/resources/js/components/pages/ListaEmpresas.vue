<template>
    <div class="container-fluid w-50">
        <h3 class="text-center">Empresas</h3><br/>
        <b-button to="/adicionarEmpresa">Adicionar empresas</b-button>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Endereço</th>
                <th>Encargo</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="empresa in empresas" :key="empresa.id">
                <td>{{ empresa.id }}</td>
                <td>{{ empresa.nome }}</td>
                <td>{{ empresa.cnpj }}</td>
                <td>{{ empresa.endereco }}</td>
                <td>{{ empresa.encargo }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'detalhesEmpresa', params: { id: empresa.id }}" class="btn btn-primary">Detalhes
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
            empresas: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8000/api/lista-empresas')
            .then(response => {
                this.empresas = response.data;
            });
    }
}
</script>
