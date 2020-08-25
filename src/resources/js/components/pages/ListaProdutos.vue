<template>
  <div class="container-fluid w-50">
    <h3 class="text-center">Produtos</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nome</th>
          <th>NCM</th>
          <th>Valor</th>
          <th>Estoque</th>
          <th>Opção</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="produto in produtos" :key="produto.id">
          <td>{{ produto.nome }}</td>
          <td>{{ produto.ncm }}</td>
          <td>{{ produto.valor }}</td>
          <td>{{ produto.quantidade }}</td>
          <td>
            <div class="btn-group" role="group">
              <b-button
                :to="{name: 'detalhesProduto', params: { id: produto.id }}"
                variant="outline-primary"
              >Detalhes</b-button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <b-button variant="primary" to="/adicionarProduto">Adicionar produto</b-button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      usuario: {
        email: '',
        senha: ''
      },
      produtos: [],
    };
  },
  created() {
    this.usuario.email = JSON.parse(sessionStorage.getItem('email'));
    this.usuario.senha = JSON.parse(sessionStorage.getItem('senha'));

    if (!this.usuario.email || !this.usuario.senha){
      this.$router.push({name: 'login'})
    }

    console.log(this.usuario);
    this.axios
      .get("http://localhost:8000/api/lista-produtos")
      .then((response) => {
        this.produtos = response.data;
      });
  },
};
</script>
