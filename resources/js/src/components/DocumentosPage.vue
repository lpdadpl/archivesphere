<template>
  <div class="documentos-page">
    <NavBar />
    <div class="documentos-content">
      <h1>Documentos</h1>
      <p>Explora todos los documentos disponibles en ArchiveSphere.</p>
    </div>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from './NavBar.vue'
import AppFooter from './Footer.vue'

export default {
  name: 'DocumentosPage',
  components: {
    NavBar,
    AppFooter
  }
}
</script>

<style scoped>
.documentos-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fff;
}
.documentos-content {
  flex: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 30px 20px;
}
</style>