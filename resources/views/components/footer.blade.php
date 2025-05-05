<!-- filepath: /resources/views/components/footer.blade.php -->
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
