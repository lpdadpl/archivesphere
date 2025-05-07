<template>
  <div class="library-page">
    <NavBar />
    <div class="library-content">
      <h1>Mi Biblioteca</h1>
      <div
        v-for="(files, type) in groupedFiles"
        :key="type"
        class="file-group"
      >
        <h2 class="group-title">{{ typeLabel(type) }}</h2>
        <div class="file-row">
          <Card
            v-for="file in files"
            :key="file.id"
            :file="file"
          />
        </div>
      </div>
    </div>
    <AppFooter />
  </div>
</template>

<script>
import NavBar from './NavBar.vue'
import AppFooter from './Footer.vue'
import Card from './Card.vue'

export default {
  name: 'LibraryPage',
  components: {
    NavBar,
    AppFooter,
    Card
  },
  data() {
    return {
      likedFiles: [
        {
          id: 1,
          title: 'Documento Importante',
          type: 'document',
          image: './assets/file1.png',
          description: 'Un documento muy importante.',
          likes: 10
        },
        {
          id: 2,
          title: 'Libro de Vue',
          type: 'book',
          image: './assets/file2.png',
          description: 'Aprende Vue.js desde cero.',
          likes: 15
        },
        {
          id: 3,
          title: 'Video Tutorial',
          type: 'video',
          image: './assets/file3.png',
          description: 'Tutorial en video sobre Vue.',
          likes: 8
        },
        {
          id: 4,
          title: 'Otro Documento',
          type: 'document',
          image: './assets/file4.png',
          description: 'Otro documento útil.',
          likes: 7
        }
      ]
    }
  },
  computed: {
    groupedFiles() {
      // Agrupa los archivos por tipo
      return this.likedFiles.reduce((groups, file) => {
        if (!groups[file.type]) groups[file.type] = []
        groups[file.type].push(file)
        return groups
      }, {})
    }
  },
  methods: {
    typeLabel(type) {
      // Puedes personalizar los nombres de los tipos aquí
      const labels = {
        document: 'Documentos',
        book: 'Libros',
        video: 'Videos'
      }
      return labels[type] || type
    }
  }
}
</script>

<style scoped>
.library-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fff;
}

.library-content {
  flex: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 30px 20px;
}

.file-group {
  margin-bottom: 40px;
}

.group-title {
  margin-bottom: 15px;
  font-size: 1.4em;
  color: #4a90e2;
}

.file-row {
  display: flex;
  flex-wrap: nowrap;
  gap: 20px;
  overflow-x: auto;
  padding-bottom: 10px;
}
</style> 