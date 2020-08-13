<template>
  <div>
    <h3 class="text-center">Adicionar produto</h3>
    <div class="row">
      <div class="col-md-6">
        <form @submit.prevent="adicionarProduto">
          <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" v-model="produto.nome" />
          </div>
          <div class="form-group">
            <label>Valor</label>
            <input type="text" class="form-control" v-model="produto.valor" />
          </div>
          <div class="form-group">
            <label>Quantidade</label>
            <input type="text" class="form-control" v-model="produto.quantidade" />
          </div>
          <b-button type="submit" class="btn btn-primary">Adicionar Produto</b-button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      produto: {},
    };
  },
  methods: {
    adicionarProduto() {
      this.axios
        .post("http://localhost:8000/api/produto/adicionar", this.produto)
        .then(
          (response) => (
            this.$router.push({ name: "produtos" }), console.log(response.data)
          )
        )
        .catch((error) => console.log(error))
        .finally(() => (this.loading = false));
    },
  },
};
</script>