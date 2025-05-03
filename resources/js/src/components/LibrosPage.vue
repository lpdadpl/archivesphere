<template>
  <div class="libros-page">
    <NavBar />
    <div class="libros-content">
      <h1>Libros</h1>
      <p>Descubre los libros que puedes consultar o descargar.</p>
    </div>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from './NavBar.vue'
import AppFooter from './Footer.vue'

export default {
  name: 'LibrosPage',
  components: {
    NavBar,
    AppFooter
  }
}
</script>

<style scoped>
.libros-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fff;
}
.libros-content {
  flex: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 30px 20px;
}
</style>
