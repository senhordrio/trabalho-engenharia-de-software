<template>
  <div>
    <b-container fluid>
      <b-row class="layout" align-h="end" align-v="center">
        <b-col lg="2">
          <b-button to="/lista-empresas" size="lg" variant="primary">
            <b-icon icon="people" aria-hidden="true" style="width: 50px; height: 50px;"></b-icon>
            <br />EMPRESAS
          </b-button>
        </b-col>
        <b-col lg="2">
          <b-button to="/lista-produtos" size="lg" variant="primary">
            <b-icon icon="box" aria-hidden="true" style="width: 50px; height: 50px;"></b-icon>
            <br />PRODUTOS
          </b-button>
        </b-col>
        <b-col lg="4">
          <b-button to="/lista-transacoes" size="lg" variant="primary">
            <b-icon icon="cart2" aria-hidden="true" style="width: 50px; height: 50px;"></b-icon>
            <br />TRANSAÇÕES
          </b-button>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.layout {
  height: 100vh;
}
</style>