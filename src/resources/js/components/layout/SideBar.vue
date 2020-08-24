<template>
  <div>
    <b-sidebar
      id="sidebar"
      shadow
      :visible="true"
      :no-header-close="true"
      :no-close-on-route-change="true"
      text-variant="dark"
      width="300px"
    >
      <div class="px-3 py-2">
        <h2>D&DSISTEMA</h2>
        <nav>
          <b-nav vertical>
            <b-nav-item to="/dashboard" class="nav-item nav-link">Dashboard</b-nav-item>
            <b-nav-item to="/lista-produtos" class="nav-item nav-link">Produtos</b-nav-item>
            <b-nav-item to="/lista-transacoes" class="nav-item nav-link">Transações</b-nav-item>
            <b-nav-item to="/lista-empresas" class="nav-item nav-link">Empresas</b-nav-item>
            <b-nav-item to="/fechar-balanco" class="nav-item nav-link">Fechar balanço</b-nav-item>
            <div class="d-flex  text-light align-items-center px-3 py-2">
              <b-button @click="logOut" size="sm" variant='primary'>Log out</b-button>
            </div>
          </b-nav>
        </nav>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
export default {

  /*
  ATENÇÃO: o método de logout abaixo
  é experimental e a nível de DEMONSTRAÇÃO,
  e não deverá ser seguido de exemplo. Os dados
  não são mascarados, estando em plain text.
 */

  methods: {
    logOut(){
      sessionStorage.removeItem('email');
      sessionStorage.removeItem('senha');

      this.$router.push({name: 'login'})
    }
  }

};
</script>
