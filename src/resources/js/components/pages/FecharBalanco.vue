<template>
  <div class="container-fluid w-50">
    <h3 class="text-center">Balanço</h3>
    <br />
    <div id="form">
      <b-form @submit.prevent="fecharBalanco">
      <table class="table table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Valor</th>
          <th>Empresa</th>
          <th>Produtos</th>
          <th>Data</th>
          <th>Opção</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="transacao in transacoes" :key="transacao.id">
          <td>{{ transacao.id }}</td>
          <td>{{ transacao.valor }}</td>
          <td>{{ transacao.empresa }}</td>
          <td>{{ transacao.produto }}</td>
          <td>{{ transacao.data }}</td>
          <td>
            <div class="form-check">
              <input type="checkbox"
                     class="form-check-input"
                     id="transacao"
                     :value="transacao.condicao"
                     true-value="Fechada"
                     false-value="Aberta"
                     v-model.lazy="transacao.condicao">
              <label class="form-check-label" for="transacao">Declarar fechada</label>
            </div>
          </td>
        </tr>
        <b-button type="submit" variant="primary">Fechar balanço</b-button>
        </tbody>
      </table>
      </b-form>
    </div>
  </div>
</template>

<script>
export default {
  name: "FecharBalanco",

  data() {
    return {
      transacoes: {},
      usuario: {
        email: '',
        senha: ''
      },
    };
  },
  created() {
    this.usuario.email = JSON.parse(sessionStorage.getItem('email'));
    this.usuario.senha = JSON.parse(sessionStorage.getItem('senha'));

    if (!this.usuario.email || !this.usuario.senha){
      this.$router.push({name: 'login'})
    }

    this.axios
      .get("http://localhost:8000/api/lista-transacoes")
      .then((response) => {
        this.transacoes = response.data;
      });
  },

  methods:{

    fecharBalanco(){
      for (var i = 0; i < this.transacoes.length; i++){
        this.axios
          .post(`http://localhost:8000/api/transacao/update/${this.transacoes[i].id}`, this.transacoes[i])
          .then((response) => {
            this.$router.push({ name: "dashboard" })
          })
      }
    }
  }
}
</script>

<style scoped>

</style>
