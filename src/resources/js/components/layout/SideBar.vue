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
            <b-nav-item to="/" class="nav-item nav-link">Dashboard</b-nav-item>
            <b-nav-item to="/produtos" class="nav-item nav-link">Produtos</b-nav-item>
          </b-nav>
        </div>
      </div>
    </b-sidebar>
  </div>
</template>

<script>
export default {};
</script>