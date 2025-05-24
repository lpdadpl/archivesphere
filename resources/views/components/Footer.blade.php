{{-- filepath: /usr/proyectos/ArchiveSphereLaravel/archivesphere/resources/views/components/footer.blade.php --}}
<style>
    .footer {
        width: 100vw;
        background-color: #0056b3; /* Azul fuerte */
        color: white;
        padding: 1.5rem 2rem;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        margin-bottom: 0;
    }

    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .content-container {
        flex: 1;
        width: 100%;
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 100%;
        padding: 0 2rem;
    }

    .footer-links {
        display: flex;
        gap: 2rem;
    }

    .footer-link {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 1rem;
        transition: color 0.3s;
    }

    .footer-link:hover {
        color: #ffd700; /* Amarillo en hover */
    }

    .footer-logo img {
        height: 60px; /* Ajusta según el tamaño del logo */
    }

    .footer-bottom {
        text-align: center;
        font-size: 0.9rem;
        color: #d1d5db; /* Gris claro */
    }

    /* Ajustar el contenido para que no quede oculto debajo del footer */
    .content-container {
        padding-bottom: 120px; /* Altura del footer */
    }
</style>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="/contact" class="footer-link">Contacto</a>
            <a href="/privacy-policy" class="footer-link">Política de Privacidad</a>
            <a href="/terminos-servicio" class="footer-link">Términos de Servicio</a>
            <a href="/blog" class="footer-link">Blog</a>
        </div>
        <div class="footer-logo">
            <img src="{{ asset('assets//LogoArchiveSphereWhite.png') }}" alt="Logo">
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} ArchiveSphere. Todos los derechos reservados.</p>
    </div>
</footer>
