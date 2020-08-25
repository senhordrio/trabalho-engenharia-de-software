<template>
  <div class="container-fluid w-50">
    <h3 class="text-center">Transacões</h3>
    <br />
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Valor</th>
          <th>Empresa</th>
          <th>Produtos</th>
          <th>Data</th>
          <th>Estado</th>
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
          <td>{{ transacao.condicao }}</td>
          <td>
            <div class="btn-group" role="group">
              <b-button
                :to="{name: 'detalhesTransacao', params: { id: transacao.id }}"
                variant="outline-primary"
              >Detalhes</b-button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <b-button to="/adicionarTransacao" variant="primary">Adicionar transação</b-button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      transacoes: [],
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
};
</script>
