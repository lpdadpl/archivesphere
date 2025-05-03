<template>
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>ArchiveSphere</h3>
        <p>Tu biblioteca digital personal</p>
      </div>
      <div class="footer-section">
        <h3>Enlaces</h3>
        <router-link to="/" class="footer-link">Inicio</router-link>
        <router-link to="/library" class="footer-link">Biblioteca</router-link>
        <router-link to="/documentos" class="footer-link">Documentos</router-link>
      </div>
      <div class="footer-section">
        <h3>Contacto</h3>
        <p>Email: info@archivesphere.com</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 ArchiveSphere. Todos los derechos reservados.</p>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'AppFooter'
}
</script>

<style scoped>
.footer {
  background-color: #5c7a99;
  color: white;
  padding: 2rem 0;
  margin-top: auto;
}

.footer-content {
  display: flex;
  justify-content: space-around;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1rem;
}

.footer-section {
  flex: 1;
  margin: 0 1rem;
}

.footer-section h3 {
  margin-bottom: 1rem;
}

.footer-link {
  display: block;
  color: white;
  text-decoration: none;
  margin-bottom: 0.5rem;
}

.footer-link:hover {
  color: #e0e0e0;
}

.footer-bottom {
  text-align: center;
  margin-top: 2rem;
  padding-top: 1rem;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

@media (max-width: 768px) {
  .footer-content {
    flex-direction: column;
    text-align: center;
  }

  .footer-section {
    margin: 1rem 0;
  }
}
</style>
