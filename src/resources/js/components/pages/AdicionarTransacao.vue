<template>
  <div>
    <h3 class="text-center">Adicionar transação</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <b-form @submit.prevent="adicionarTransacao">
          <b-form-group
            label="Empresa solicitante:"
            label-for="nome_empresa"
            description="Insira a empresa solicitante."
          >
            <datalist id="nome_empresas" autocomplete="off">
              <option
                v-for="empresa in empresas"
                v-bind:key="empresa.nome"
                :value="empresa.id"
              >{{empresa.nome}}</option>
            </datalist>
            <b-form-input
              list="nome_empresas"
              required
              v-model="transacao.empresa"
            ></b-form-input>
          </b-form-group>
          <b-form-group label="Produto:" label-for="nome_produto" description="Insira um produto.">
            <datalist id="nome_produto">
              <option
                v-for="produto in produtos"
                v-bind:key="produto.nome"
                :value="produto.id"
              >Nome: {{produto.nome}}/ Preço: {{produto.valor}}</option>
            </datalist>
            <b-form-input
              list="nome_produto"
              autocomplete="off"
              required
              v-model="transacao.produto"
            ></b-form-input>
          </b-form-group>
          <b-form-group
            label="Quantidade:"
            label-for="quantidade"
            description="Insira uma quantidade."
          >
            <b-form-input id="quantidade" v-model="transacao.quantidade" required></b-form-input>
          </b-form-group>
          <div class="mb-2 mt-1">
            <label for="data">Data da transacao</label>
            <b-form-datepicker id="data" v-model="transacao.data" class="mb-2"></b-form-datepicker>
          </div>
          <b-form-group label="Valor total:" label-for="geraPreco">
            <b-form-input  v-model="transacao.valor" required></b-form-input>
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
    };
  },
  computed:{

  },
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
        .catch((error) => console.log(error))
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
