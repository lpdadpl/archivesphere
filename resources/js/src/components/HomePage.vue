<template>
  <div class="home-page">
    <NavBar />
    <div class="home-content">
      <div class="card-container">
        <CardComponent
          v-for="(file, index) in files"
          :key="index"
          :title="file.title"
          :description="file.description"
          :image="file.image"
          @card-click="handleCardClick(file)"
        />
      </div>
    </div>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from '@/components/NavBar.vue'
import AppFooter from '@/components/Footer.vue'
import CardComponent from '@/components/Card.vue'

export default {
  name: 'HomePage',
  components: {
    NavBar,
    AppFooter,
    CardComponent
  },
  data() {
    return {
      files: [
        {
          id: 1,
          title: 'Archivo 1',
          description: 'Descripción del archivo 1',
          image: './assets/file1.png'
        },
        {
          id: 2,
          title: 'Archivo 2',
          description: 'Descripción del archivo 2',
          image: './assets/file2.png'
        },
        {
          id: 3,
          title: 'Archivo 3',
          description: 'Descripción del archivo 3',
          image: './assets/file3.png'
        }
      ]
    }
  },
  methods: {
    handleCardClick(file) {
      this.$router.push({ name: 'FilePage', params: { id: file.id } })
    }
  }
}
</script>

<style scoped>
.home-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fff;
}
.home-content {
  flex: 1;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 16px;
  padding: 20px;
}
</style>