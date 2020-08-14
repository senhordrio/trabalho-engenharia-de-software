<template>
    <div>
        <h3 class="text-center">Adicionar empresa</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form @submit.prevent="adicionarEmpresa">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="empresa.nome" />
                    </div>
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" v-model="empresa.cnpj" />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" v-model="empresa.endereco" />
                    </div>
                    <div class="form-group">
                        <label>Encargo</label>
                        <input type="text" class="form-control" v-model="empresa.encargo" />
                    </div>
                    <b-button type="submit" class="btn btn-primary">Adicionar Empresa</b-button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            empresa: {},
        };
    },
    methods: {
        adicionarEmpresa() {
            this.axios
                .post("http://localhost:8000/api/empresa/adicionar", this.empresa)
                .then(
                    (response) => (
                        this.$router.push({ name: "lista-empresas" }), console.log(response.data)
                    )
                )
                .catch((error) => console.log(error))
                .finally(() => (this.loading = false));
        },
    },
};
</script>
