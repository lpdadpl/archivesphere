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
          title: 'Cien años de soledad',
          type: 'book',
          image: 'https://m.media-amazon.com/images/I/91TvVQS7loL.jpg',
          description: 'Una novela de Gabriel García Márquez.',
          likes: 10
        },
        {
          id: 2,
          title: '1984',
          type: 'book',
          image: 'https://cdn.prod.website-files.com/6034d7d1f3e0f52c50b2adee/67fcc5877c2ce126c48a577d_kAxP6D4zENBke6sSNA999xECBKUBoZET9M_WkMJrkVQ.jpeg',
          description: 'Una novela de George Orwell.',
          likes: 12
        },
        {
          id: 3,
          title: 'El señor de los anillos',
          type: 'book',
          image: 'https://www.planetadelibros.com/usuaris/libros/fotos/210/original/portada_el-senor-de-los-anillos_j-r-r-tolkien_201601252224.jpg',
          description: 'Una novela de J.R.R. Tolkien.',
          likes: 18
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
