<template>
    <div>
        <h3 class="text-center">Editar produto</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="editarProduto">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" v-model="produto.nome">
                    </div>
                    <div class="form-group">
                        <label>Valor</label>
                        <input type="text" class="form-control" v-model="produto.valor">
                    </div>
                    <div class="form-group">
                        <label>Quantidade</label>
                        <input type="text" class="form-control" v-model="produto.quantidade">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                produto: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/produto/editar/${this.$route.params.id}`)
                .then((response) => {
                    this.produto = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            editarProduto() {
                this.axios
                    .post(`http://localhost:8000/api/produto/update/${this.$route.params.id}`, this.produto)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>