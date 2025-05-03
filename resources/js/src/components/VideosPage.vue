<template>
  <div class="videos-page">
    <NavBar />
    <div class="videos-content">
      <h1>Videos</h1>
      <p>Mira los videos educativos y tutoriales disponibles.</p>
    </div>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from './NavBar.vue'
import AppFooter from './Footer.vue'

export default {
  name: 'VideosPage',
  components: {
    NavBar,
    AppFooter
  }
}
</script>

<style scoped>
.videos-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fff;
}
.videos-content {
  flex: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 30px 20px;
}
</style>
