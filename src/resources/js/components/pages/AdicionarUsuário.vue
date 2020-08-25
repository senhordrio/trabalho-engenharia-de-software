<template>
  <div>
    <h3 class="text-center">Cadastrar novo usuário</h3>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div>
          <b-alert show dismissible v-model="showAlert" variant="danger">Ocorreu um erro na validação dos dados. Verifique se foram inseridos dados compatíveis aos campos.</b-alert>
        </div>
        <b-form @submit.prevent="cadastrarUsuario">
          <b-form-group
            label="Email: "
            label-for="email_usuario"
            description="Insira seu email"
          >
            <b-form-input type="email" id="email_usuario" v-model="usuario.email" required></b-form-input>
          </b-form-group>
          <b-form-group
            label="Senha: "
            label-for="senha"
            description="Insira sua senha"
          >
            <b-form-input type="password" id="senha" v-model="usuario.senha" required></b-form-input>
          </b-form-group>
          <b-button type="submit" variant="primary">Cadastrar</b-button>
          <b-button type="button" to="/" variant="outline-primary">Voltar</b-button>
        </b-form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return{
      usuario: {},
      showAlert: false
    }
  },

  methods: {
    cadastrarUsuario(){
      this.axios
        .post('http://localhost:8000/api/usuario/adicionar', this.usuario)
        .then(
          (response) => {
            this.$router.push({name: 'dashboard'});
          }
        )
        .catch((error) => {
          this.showAlert = true;
        })
        .finally(() => this.loading = false)
    }
  }
}
</script>

<style scoped>

</style>
