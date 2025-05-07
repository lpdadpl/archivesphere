<template>
  <div class="documentos-container">
    <h1>Documentos Disponibles</h1>
    
    <div class="search-bar">
      <span class="material-icons">search</span>
      <input 
        type="text" 
        v-model="searchQuery" 
        placeholder="Buscar documentos..."
      >
    </div>

    <div class="filters">
      <select v-model="selectedCategory">
        <option value="">Todas las categorías</option>
        <option value="pdf">PDFs</option>
        <option value="word">Word</option>
        <option value="excel">Excel</option>
      </select>
    </div>

    <div class="documents-grid">
      <div v-for="doc in documents" :key="doc.id" class="document-card">
        <span class="material-icons doc-icon">description</span>
        <h3>{{ doc.title }}</h3>
        <p>{{ doc.description }}</p>
        <div class="card-footer">
          <span class="file-info">{{ doc.size }} - {{ doc.type }}</span>
          <button class="download-btn">
            <span class="material-icons">download</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Documentos',
  data() {
    return {
      searchQuery: '',
      selectedCategory: '',
      documents: [
        {
          id: 1,
          title: 'Manual de Usuario',
          description: 'Guía completa para usuarios finales',
          size: '2.5MB',
          type: 'PDF'
        },
        {
          id: 2,
          title: 'Reporte Mensual',
          description: 'Informe de actividades Enero 2025',
          size: '1.8MB',
          type: 'Excel'
        },
        {
          id: 3,
          title: 'Presentación Corporativa',
          description: 'Presentación general de la empresa',
          size: '5.2MB',
          type: 'PowerPoint'
        }
      ]
    }
  }
}
</script>

<style scoped>
.documentos-container {
  padding: 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
  color: #2c3e50;
  margin-bottom: 2rem;
}

.search-bar {
  display: flex;
  align-items: center;
  background: #f5f5f5;
  padding: 0.5rem 1rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
}

.search-bar input {
  border: none;
  background: none;
  padding: 0.5rem;
  width: 100%;
  margin-left: 0.5rem;
  font-size: 1rem;
}

.filters {
  margin-bottom: 2rem;
}

.filters select {
  padding: 0.5rem;
  border-radius: 4px;
  border: 1px solid #ddd;
}

.documents-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
  gap: 1.5rem;
}

.document-card {
  background: white;
  border-radius: 8px;
  padding: 1.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.doc-icon {
  font-size: 2.5rem;
  color: #5c7a99;
  margin-bottom: 1rem;
}

.card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 1rem;
  padding-top: 1rem;
  border-top: 1px solid #eee;
}

.file-info {
  color: #666;
  font-size: 0.9rem;
}

.download-btn {
  background: #5c7a99;
  border: none;
  border-radius: 4px;
  padding: 0.5rem;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s;
}

.download-btn:hover {
  background: #4a6278;
}

@media (max-width: 768px) {
  .documentos-container {
    padding: 1rem;
  }
  
  .documents-grid {
    grid-template-columns: 1fr;
  }
}
</style>