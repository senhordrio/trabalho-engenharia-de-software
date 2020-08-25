<template>
  <div class="container-fluid w-50">
    <h3 class="text-center">Empresas</h3>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>CNPJ</th>
          <th>Contato</th>
          <th>Encargo</th>
          <th>Endereço</th>
          <th>Opção</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="empresa in empresas" :key="empresa.id">
          <td>{{ empresa.id }}</td>
          <td>{{ empresa.nome }}</td>
          <td>{{ empresa.cnpj }}</td>
          <td>{{ empresa.telefone}}</td>
          <td>{{ empresa.encargo }}</td>
          <td>{{ empresa.endereco }}</td>
          <td>
            <div class="btn-group" role="group">
              <b-button
                variant="outline-primary"
                :to="{name: 'detalhesEmpresa', params: { id: empresa.id }}"
              >Detalhes</b-button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <b-button variant="primary" to="/adicionarEmpresa">Adicionar empresas</b-button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      empresas: [],
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
      .get("http://localhost:8000/api/lista-empresas")
      .then((response) => {
        this.empresas = response.data;
      });
  },
};
</script>
