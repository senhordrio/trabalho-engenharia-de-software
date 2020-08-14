<template>
  <div>
    <h3 class="text-center">Adicionar transação</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form @submit.prevent="adicionarTransacao">
          <div class="form-group">
            <label>Empresa</label>
            <input type="text" class="form-control" v-model="transacao.empresa" />
          </div>
          <div class="form-group">
            <label>Produto</label>
            <input type="text" class="form-control" v-model="transacao.produto" />
          </div>
          <div class="form-group">
            <label>Quantidade</label>
            <input type="text" class="form-control" v-model="transacao.quantidade" />
          </div>
          <div class="form-group">
            <label>Data</label>
            <input type="text" class="form-control" v-model="transacao.data" />
          </div>
          <div class="form-group">
            <label>Valor</label>
            <input type="text" class="form-control" v-model="transacao.valor" />
          </div>
          <b-button type="submit" class="btn btn-primary">Adicionar transação</b-button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      transacao: {},
    };
  },
  methods: {
    adicionarTransacao() {
      this.axios
        .post("http://localhost:8000/api/transacao/adicionar", this.transacao)
        .then(
          (response) => (
            this.$router.push({ name: "lista-transacao" }),
            console.log(response.data)
          )
        )
        .catch((error) => console.log(error))
        .finally(() => (this.loading = false));
    },
  },
};
</script>