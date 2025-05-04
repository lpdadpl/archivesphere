<template>
  <div class="file-page">
    <NavBar/>
    <div class="content-container">
      <div class="main-content">
        <h1 class="page-title">{{ file.id }}</h1>

        <div class="info-section">
          <!-- Perfil del publicador -->
          <div class="uploader-profile">
            <h3>Perfil de la persona que publica</h3>
          </div>

          <!-- Descripción -->
          <div class="description-section">
            <h4>Descripción del archivo {{ file.id }}</h4>
            <div class="description-box">
              <p class="file-description">{{ file.description }}</p>
            </div>
          </div>

          <!-- Estadísticas -->
          <div class="stats">
            <p class="file-likes">Likes: {{ file.likes }}</p>
            <p class="file-downloads">Veces descargado: {{ file.downloads }}</p>
          </div>

          <!-- Botón de descarga -->
          <div class="download-like-buttons">
            <button class="btn-download">Descargar</button>
            <button class="btn-like">
              <span class="heart-icon">❤️</span> Like
            </button>
          </div>
        </div>
      </div>
    </div>
    <AppFooter/>
  </div>
</template>

<script>
import NavBar from '@/components/NavBar.vue'
import AppFooter from '@/components/Footer.vue'

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
        title: '',
        description: '',
        image: '',
        uploader: '',
        likes: 0,
        downloads: 0
      }
    }
  },
  created() {
    const files = [
      {
        id: 1,
        title: 'Archivo 1',
        description: 'Descripción del archivo 1',
        image: './assets/file1.png',
        uploader: 'Usuario1',
        likes: 120,
        downloads: 300
      },
      {
        id: 2,
        title: 'Archivo 2',
        description: 'Descripción del archivo 2',
        image: './assets/file2.png',
        uploader: 'Usuario2',
        likes: 80,
        downloads: 150
      },
      {
        id: 3,
        title: 'Archivo 3',
        description: 'Descripción del archivo 3',
        image: './assets/file3.png',
        uploader: 'Usuario3',
        likes: 200,
        downloads: 500
      }
    ]
    this.file = files.find(f => f.id === parseInt(this.id))
  }
}
</script>

<style scoped>
.file-page {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-color: #fff;
}

.content-container {
  flex: 1;
  display: flex;
  gap: 40px;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
}

.main-content {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  width: 100%;
}

.page-title {
  font-size: 2em;
  margin-bottom: 20px;
  text-align: left;
}

.info-section {
  width: 100%;
  max-width: 600px;
  margin-left: auto;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.uploader-profile {
  border: 1px solid #ddd;
  padding: 15px;
  background-color: #fff;
  text-align: center;
  min-height: 150px;
}

.description-section h4 {
  margin-bottom: 10px;
  text-align: left;
}

.description-box {
  border: 1px solid #ddd;
  padding: 15px;
  min-height: 100px;
  background-color: #fff;
  text-align: left;
}

.stats {
  text-align: left;
}

.file-likes,
.file-downloads {
  margin: 5px 0;
}

.download-like-buttons {
  display: flex;
  gap: 16px;
  align-items: center;
  margin-top: 10px;
}

.btn-download {
  background-color: #4a90e2;
  color: white;
  padding: 8px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 1em;
}

.btn-download:hover {
  background-color: #357abd;
}

.btn-like {
  background: linear-gradient(90deg, #ff5e62 0%, #ff9966 100%);
  color: #fff;
  padding: 8px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 1em;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: background 0.3s;
}

.btn-like:hover {
  background: linear-gradient(90deg, #ff3c5a 0%, #ff7eb3 100%);
}

.heart-icon {
  font-size: 1.2em;
  vertical-align: middle;
}
</style>