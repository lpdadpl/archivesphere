<!-- filepath: /usr/proyectos/ArchiveSphereLaravel/archivesphere/resources/views/layouts/privacy_policy.blade.php -->
@extends('layouts.app')
@include('components.navbar')
@section('content')
<div class="container">
    <h1>Política de Privacidad</h1>
    <p>Última actualización: {{ date('d/m/Y') }}</p>

    <p>En ArchiveSphere, valoramos tu privacidad y nos comprometemos a proteger la información personal que compartes con nosotros. Esta política de privacidad describe cómo recopilamos, usamos y protegemos tu información.</p>

    <h2>1. Información que recopilamos</h2>
    <p>Podemos recopilar la siguiente información cuando utilizas nuestros servicios:</p>
    <ul>
        <li>Información personal, como tu nombre, dirección de correo electrónico y número de teléfono.</li>
        <li>Datos de inicio de sesión, como tu dirección IP, tipo de navegador y sistema operativo.</li>
        <li>Información sobre tus interacciones con nuestro sitio web, como las páginas que visitas y el tiempo que pasas en ellas.</li>
    </ul>

    <h2>2. Cómo usamos tu información</h2>
    <p>Utilizamos la información recopilada para los siguientes propósitos:</p>
    <ul>
        <li>Proporcionar y mejorar nuestros servicios.</li>
        <li>Responder a tus consultas y solicitudes.</li>
        <li>Enviar notificaciones importantes relacionadas con tu cuenta.</li>
        <li>Personalizar tu experiencia en nuestro sitio web.</li>
    </ul>

    <h2>3. Compartir tu información</h2>
    <p>No compartimos tu información personal con terceros, excepto en los siguientes casos:</p>
    <ul>
        <li>Cuando sea necesario para cumplir con la ley o responder a solicitudes legales.</li>
        <li>Para proteger nuestros derechos, propiedad o seguridad, así como los de nuestros usuarios.</li>
        <li>Con proveedores de servicios que nos ayudan a operar nuestro sitio web y servicios.</li>
    </ul>

    <h2>4. Seguridad de tu información</h2>
    <p>Implementamos medidas de seguridad técnicas y organizativas para proteger tu información personal contra el acceso no autorizado, pérdida o destrucción.</p>

    <h2>5. Tus derechos</h2>
    <p>Tienes derecho a acceder, corregir o eliminar tu información personal. Si deseas ejercer estos derechos, contáctanos a través de nuestro formulario de contacto.</p>

    <h2>6. Cambios en esta política</h2>
    <p>Podemos actualizar esta política de privacidad ocasionalmente. Te notificaremos sobre cualquier cambio publicando la nueva política en esta página.</p>

    <h2>7. Contacto</h2>
    <p>Si tienes preguntas o inquietudes sobre esta política de privacidad, no dudes en contactarnos a través de nuestro formulario de <a href="{{ route('contact') }}">contacto</a>.</p>
</div>
@endsection
@include('components.footer')
