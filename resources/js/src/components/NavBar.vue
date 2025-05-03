<template>
  <nav class="navbar">
    <div class="nav-brand">
      <router-link to="/">
        <img src="https://via.placeholder.com/40" alt="ArchiveSphere Logo" class="logo">
      </router-link>
    </div>
    <div class="nav-links">
      <router-link to="/" class="nav-link">Inicio</router-link>
      <router-link to="/library" class="nav-link">Biblioteca</router-link>
      <router-link to="/documentos" class="nav-link">Documentos</router-link>
      <router-link to="/libros" class="nav-link">Libros</router-link>
      <router-link to="/videos" class="nav-link">Videos</router-link>
    </div>
    <div class="nav-auth">
      <router-link to="/login" class="nav-link">
        <img src="https://via.placeholder.com/30" alt="Profile" class="profile-icon">
      </router-link>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavBar'
}
</script>

<style scoped>
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background-color: #5c7a99;
  color: white;
}

.nav-brand {
  display: flex;
  align-items: center;
}

.logo {
  height: 40px;
}

.nav-links {
  display: flex;
  gap: 1.5rem;
}

.nav-link {
  color: white;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s;
}

.nav-link:hover {
  color: #e0e0e0;
}

.profile-icon {
  height: 30px;
  width: 30px;
  border-radius: 50%;
}

@media (max-width: 768px) {
  .nav-links {
    display: none;
  }

  .navbar {
    padding: 1rem;
  }
}
</style>
