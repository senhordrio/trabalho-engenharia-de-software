<template>
  <div>
    <b-sidebar
      id="sidebar-variant"
      title="D&DSISTEMA"
      shadow
      :visible="true"
      :no-header-close="true"
      :no-close-on-route-change="true"
      text-variant="dark"
    >
      <div class="px-3 py-2">
        <div>
          <b-nav vertical>
            <b-nav-item to="/dashboard" class="nav-item nav-link">Dashboard</b-nav-item>
            <b-nav-item to="/lista-produtos" class="nav-item nav-link">Produtos</b-nav-item>
            <b-nav-item to="/lista-transacoes" class="nav-item nav-link">Transações</b-nav-item>
            <b-nav-item to="/lista-empresas" class="nav-item nav-link">Empresas</b-nav-item>
            <div class="d-flex  text-light align-items-center px-3 py-2">
              <b-button size="sm" variant='primary'>Log out</b-button>
            </div>
          </b-nav>
        </div>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
export default {};
</script>
