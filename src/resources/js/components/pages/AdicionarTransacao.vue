<template>
  <div>
    <h3 class="text-center">Adicionar transação</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div>
          <b-alert
            show
            dismissible
            v-model="showAlert"
            variant="danger"
          >Ocorreu um erro na validação dos dados. Verifique se foram inseridos dados compatíveis aos campos.</b-alert>
        </div>
        <b-form @submit.prevent="adicionarTransacao">
          <b-form-group
            label="Empresa solicitante:"
            label-for="nome_empresa"
            description="Insira a empresa solicitante."
          >
            <b-form-select v-model="transacao.empresa">
              <b-form-select-option
                v-for="empresa in empresas"
                :key="empresa.id"
                :value="empresa.id"
              >{{empresa.nome}}</b-form-select-option>
            </b-form-select>
          </b-form-group>
          <div>
            <b-form-group
              label="Produto:"
              label-for="nome_produto"
              description="Insira um produto."
            >
              <b-form-select v-model="transacao.produto">
                <b-form-select-option
                  v-for="produto in produtos"
                  :key="produto.id"
                  :value="produto.id"
                >
                 {{produto.nome}}
                </b-form-select-option>
              </b-form-select>
            </b-form-group>
            <b-form-group
              label="Quantidade:"
              label-for="quantidade"
              description="Insira uma quantidade."
            >
              <b-form-input id="quantidade" v-model="transacao.quantidade" required></b-form-input>
            </b-form-group>
          </div>
          <div class="mb-2 mt-1">
            <label for="data">Data da transacao</label>
            <b-form-datepicker id="data" v-model="transacao.data" class="mb-2"></b-form-datepicker>
          </div>
          <b-form-group label="Valor total:" label-for="geraPreco">
            <b-form-input v-model="transacao.valor" required></b-form-input>
          </b-form-group>
          <b-button type="submit" variant="primary">Adicionar transacao</b-button>
          <b-button type="button" to="/lista-transacoes" variant="outline-primary">Voltar</b-button>
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
      empresas: [],
      produtos: [],
      showAlert: false,
    };
  },
  computed: {},
  methods: {
    adicionarTransacao() {
      this.axios
        .post("http://localhost:8000/api/transacao/adicionar", this.transacao)
        .then(
          (response) => (
            this.$router.push({ name: "lista-transacoes" }),
            console.log(response.data)
          )
        )
        .catch((error) => {
          this.showAlert = true;
          console.log(error.response);
        })
        .finally(() => (this.loading = false));
    },
  },
  //Created aninhado que retorna listas de empresa e produtos cadastrados
  created() {
    this.axios
      .get("http://localhost:8000/api/lista-empresas")
      .then((response) => {
        this.empresas = response.data;
        this.axios
          .get("http://localhost:8000/api/lista-produtos")
          .then((response) => {
            this.produtos = response.data;
          });
      })
      .catch((error) => console.log(error));
  },
};
</script>
