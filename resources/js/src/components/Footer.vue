<template>
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-links">
        <router-link to="/contacto" class="footer-link">Contacto</router-link>
        <router-link to="/politica-privacidad" class="footer-link">Política de Privacidad</router-link>
        <router-link to="/terminos-servicio" class="footer-link">Términos de Servicio</router-link>
        <router-link to="/blog" class="footer-link">Blog</router-link>
      </div>
      <div class="footer-logo">
        <img src="@/assets/LogoArchiveSphere.png" alt="Logo" />
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2023 ArchiveSphere. Todos los derechos reservados.</p>
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
  background-color: #5c7a99; /* Color azul grisáceo */
  color: #ffffff; /* Texto blanco para mejor contraste */
  padding: 2rem 0 0 0;
  text-align: center;
  width: 100vw;
  position: relative;
  left: 0;
  margin-left: calc(-50vw + 50%);
  box-sizing: border-box;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-links {
  display: flex;
  gap: 2rem;
}

.footer-link {
  text-decoration: none;
  color: #ffffff;
  transition: color 0.3s ease;
}

.footer-link:hover {
  color: rgba(255, 255, 255, 0.7);
}

.footer-logo img {
  height: 40px;
}

.footer-bottom {
  margin-top: 1rem;
}
</style>