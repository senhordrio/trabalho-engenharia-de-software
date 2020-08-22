<template>
  <div>
    <h3 class="text-center">Editar transação</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <b-form @submit.prevent="editarTransacao">
          <b-form-group
            label="Empresa solicitante:"
            label-for="nome_empresa"
            description="Insira a empresa solicitante."
          >
            <b-form-input id="nome_empresa" v-model="transacao.empresa" required></b-form-input>
          </b-form-group>
          <b-form-group
            label="Produto da transacao:"
            label-for="transacao"
            description="Insira um transacao."
          >
            <b-form-input id="transacao" v-model="transacao.produto" required></b-form-input>
          </b-form-group>
          <b-form-group
            label="Quantidade:"
            label-for="quantidade"
            description="Insira uma quantidade."
          >
            <b-form-input id="quantidade" v-model="transacao.quantidade" required></b-form-input>
          </b-form-group>
          <div>
            <b-button type="button" variant="primary">+</b-button>
          </div>
          <div class="mb-2 mt-1">
            <label for="data">Data da transacao</label>
            <b-form-datepicker id="data" v-model="transacao.data" class="mb-2"></b-form-datepicker>
          </div>
          <b-form-group
            label="Valor total:"
            label-for="valor"
          >
            <b-form-input id="valor" v-model="transacao.valor" required></b-form-input>
          </b-form-group>
          <b-button type="submit" variant="primary">Salvar</b-button>
          <b-button type="button" to="/lista-transacoes" variant="outline-primary">Voltar</b-button>
          <b-button class="ml-5" type="submit" @click="deletarTransacao(transacao.id)" variant="danger">Excluir</b-button>
        </b-form>
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
  created() {
    this.axios
      .get(`http://localhost:8000/api/transacao/editar/${this.$route.params.id}`)
      .then((response) => {
        this.transacao = response.data;
        // console.log(response.data);
      });
  },
  methods: {
    editarTransacao() {
      this.axios
        .post(
          `http://localhost:8000/api/transacao/update/${this.$route.params.id}`,
          this.transacao
        )
        .then((response) => {
          this.$router.push({ name: "lista-transacoes" });
        });
    },
    deletarTransacao() {
        if (confirm('Deseja mesmo excluir esta transação?')){
          this.axios
            .delete(
              `http://localhost:8000/api/transacao/deletar/${this.$route.params.id}`
            )
            .then((response) => {
              this.$router.push({ name: "lista-transacoes" });
            });
        }
    },
  },
};
</script>
