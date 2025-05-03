<template>
  <div class="file-page">
    <NavBar />
    <div class="file-content">
      <h1>{{ file.title }}</h1>
      <p>{{ file.description }}</p>
      <img :src="file.image" :alt="file.title" />
    </div>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from './NavBar.vue'
import AppFooter from './Footer.vue'

export default {
  name: 'FilePage',
  components: {
    NavBar,
    AppFooter
  },
  props: {
    id: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      file: {
        title: 'Archivo ' + this.id,
        description: 'Descripción del archivo ' + this.id,
        image: '~file' + this.id + '.png'
      }
    }
  }
}
</script>

<style scoped>
.file-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fff;
}
.file-content {
  flex: 1;
  padding: 20px;
  text-align: center;
}
.file-content img {
  max-width: 100%;
  height: auto;
  margin-top: 20px;
}
</style>
