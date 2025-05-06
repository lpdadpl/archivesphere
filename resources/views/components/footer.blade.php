<style>
    .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #0056b3;
        /* Azul fuerte */
        color: white;
        padding: 1.5rem 2rem;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        z-index: 1000;
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 1200px;
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
        color: #ffd700;
        /* Amarillo en hover */
    }

    .footer-logo img {
        height: 60px;
        /* Ajusta según el tamaño del logo */
    }

    .footer-bottom {
        text-align: center;
        font-size: 0.9rem;
        color: #d1d5db;
        /* Gris claro */
    }
</style>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-links">
            <a href="/contact" class="footer-link">Contacto</a>
            <a href="/politica-privacidad" class="footer-link">Política de Privacidad</a>
            <a href="/terminos-servicio" class="footer-link">Términos de Servicio</a>
            <a href="/blog" class="footer-link">Blog</a>
        </div>
        <div class="footer-logo">
            <img src="{{ asset('assets/LogoArchiveSphere.png') }}" alt="Logo">
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} ArchiveSphere. Todos los derechos reservados.</p>
    </div>
</footer>
