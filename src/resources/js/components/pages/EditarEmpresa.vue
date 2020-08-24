<template>
  <div>
    <h3 class="text-center">Editar empresa</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div>
          <b-alert show dismissible v-model="showAlert" variant="danger">Ocorreu um erro na validação dos dados. Verifique se foram inseridos dados compatíveis aos campos.</b-alert>
        </div>
        <b-form @submit.prevent="editarEmpresa">
        <b-form-group label="Nome da empresa:" label-for="nome_empresa" description="Insira o nome da empresa.">
          <b-form-input
            id="nome_empresa"
            v-model="empresa.nome"
            required
          ></b-form-input>
        </b-form-group>
        <b-form-group label="CNPJ:" label-for="cnpj" description="Insira apenas os 14 números.">
          <b-form-input
            id="cnpj"
            v-model="empresa.cnpj"
            required
          ></b-form-input>
        </b-form-group>
        <b-form-group label="Telefone para contato:" label-for="telefone" description="DDD e número sem espaços ou traços.">
          <b-form-input
            id="telefone"
            v-model="empresa.telefone"
            required
          ></b-form-input>
        </b-form-group>
        <b-form-group label="Fornecedor/Cliente:" label-for="encargo" description="Fornecedor ou Cliente.">
          <b-form-input
            id="encargo"
            v-model="empresa.encargo"
            required
          ></b-form-input>
        </b-form-group>
        <b-form-group label="Endereço:" label-for="endereco" description="Rua e número.">
          <b-form-input
            id="endereco"
            v-model="empresa.endereco"
            required
          ></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Salvar</b-button>
        <b-button type="button" to="/lista-empresas" variant="outline-primary">Voltar</b-button>
        <b-button type="button" class="ml-5" @click="deletarEmpresa(empresa.id)" variant="danger">Excluir</b-button>
        </b-form>
      </div>
    </div>
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
      empresa: {},
      options: ["Fornecedor", "Cliente"],
      showAlert: false
    };
  },
  created() {
    this.usuario.email = JSON.parse(sessionStorage.getItem('email'));
    this.usuario.senha = JSON.parse(sessionStorage.getItem('senha'));

    if (!this.usuario.email || !this.usuario.senha){
      this.$router.push({name: 'login'})
    }

    this.axios
      .get(`http://localhost:8000/api/empresa/editar/${this.$route.params.id}`)
      .then((response) => {
        this.empresa = response.data;
        // console.log(response.data);
      });
  },
  methods: {
    editarEmpresa() {
      this.axios
        .post(
          `http://localhost:8000/api/empresa/update/${this.$route.params.id}`,
          this.empresa
        )
        .then((response) => {
          this.$router.push({ name: "lista-empresas" });
        })
        .catch((error) => {
          this.showAlert = true;
        });
    },
    deletarEmpresa() {
      if (confirm('Deseja mesmo exluir esta empresa?')){
        this.axios
          .delete(
            `http://localhost:8000/api/empresa/deletar/${this.$route.params.id}`
          )
          .then((response) => {
            this.$router.push({ name: "lista-empresas" });
          })
          .catch((error) => {
            this.showAlert = true;
          });
      }

    },
  },
};
</script>
