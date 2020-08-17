<template>
  <div>
    <h3 class="text-center">Editar empresa</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <b-form @submit.prevent="editarEmpresa" v-if="show"></b-form>
        <b-form-group label="Nome da empresa:" label-for="nome_empresa">
          <b-form-input
            id="nome_empresa"
            v-model="empresa.nome"
            required
            placeholder="Insira o nome da empresa"
          ></b-form-input>
        </b-form-group>
        <b-form-group label="CNPJ:" label-for="cnpj">
          <b-form-input
            id="cnpj"
            v-model="empresa.cnpj"
            required
            placeholder="Insira o CNPJ da empresa"
          ></b-form-input>
        </b-form-group>
        <b-form-group label="Telefone para contato:" label-for="telefone">
          <b-form-input
            id="telefone"
            v-model="empresa.telefone"
            required
            placeholder="Formato:(99)99999-9999"
          ></b-form-input>
        </b-form-group>
        <b-form-group label="Fornecedor/Cliente:" label-for="encargo">
          <b-form-input
            id="encargo"
            v-model="empresa.encargo"
            required
            placeholder="Insira o encargo"
          ></b-form-input>
        </b-form-group>
        <b-form-group label="Endereço:" label-for="endereco">
          <b-form-input
            id="endereco"
            v-model="empresa.endereco"
            required
            placeholder="Insira o endereço(Rua/Av, Número e bairro.):"
          ></b-form-input>
        </b-form-group>
        <b-button type="submit" variant="primary">Salvar</b-button>
        <b-button type="submit" @click="deletarEmpresa(empresa.id)" variant="danger">Excluir</b-button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      empresa: {},
      options: ["Fornecedor", "Cliente"],
    };
  },
  created() {
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
          this.$router.push({ name: "lista-produtos" });
        });
    },
    deletarEmpresa() {
      this.axios
        .delete(
          `http://localhost:8000/api/empresa/deletar/${this.$route.params.id}`
        )
        .then((response) => {
          this.$router.push({ name: "lista-produtos" });
        });
    },
  },
};
</script>