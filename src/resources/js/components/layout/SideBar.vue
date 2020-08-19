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
            <b-nav-item to="/" >Dashboard</b-nav-item>
            <b-nav-item to="/lista-produtos" >Produtos</b-nav-item>
            <b-nav-item to="/lista-transacoes" >Transações</b-nav-item>
            <b-nav-item to="/lista-empresas" >Empresas</b-nav-item>
            <div class="d-flex  text-light align-items-center px-3 py-2">
              <b-button size="sm" variant='primary'>Log out</b-button>
            </div>
          </b-nav>
        </nav>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
export default {};
</script>
