<!-- filepath: /usr/proyectos/ArchiveSphereLaravel/archivesphere/resources/views/layouts/privacy_policy.blade.php -->
@extends('app')
@section('content')
@include('components.Header')
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidad</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .container {
            width: 100%;
        }

        h1 {
            color: #0056b3;
            margin-bottom: 20px;
        }

        .accordion {
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        .accordion-header {
            background-color: #f5f5f5;
            padding: 15px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .accordion-header:hover {
            background-color: #e9e9e9;
        }

        .accordion-header .icon {
            transition: transform 0.3s ease;
        }

        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 15px;
        }

        .accordion-content.active {
            max-height: 1000px;
            padding: 15px;
        }

        .accordion-header.active .icon {
            transform: rotate(180deg);
        }

        ul {
            padding-left: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Política de Privacidad</h1>
        <p>Última actualización: <span id="currentDate"></span></p>

        <p>En ArchiveSphere, valoramos tu privacidad y nos comprometemos a proteger la información personal que compartes con nosotros. Esta política de privacidad describe cómo recopilamos, usamos y protegemos tu información.</p>

        <div class="accordion">
            <div class="accordion-header">
                1. Información que recopilamos
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>Podemos recopilar la siguiente información cuando utilizas nuestros servicios:</p>
                <ul>
                    <li>Información personal, como tu nombre, dirección de correo electrónico y número de teléfono.</li>
                    <li>Datos de inicio de sesión, como tu dirección IP, tipo de navegador y sistema operativo.</li>
                    <li>Información sobre tus interacciones con nuestro sitio web, como las páginas que visitas y el tiempo que pasas en ellas.</li>
                </ul>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion-header">
                2. Cómo usamos tu información
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>Utilizamos la información recopilada para los siguientes propósitos:</p>
                <ul>
                    <li>Proporcionar y mejorar nuestros servicios.</li>
                    <li>Responder a tus consultas y solicitudes.</li>
                    <li>Enviar notificaciones importantes relacionadas con tu cuenta.</li>
                    <li>Personalizar tu experiencia en nuestro sitio web.</li>
                </ul>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion-header">
                3. Compartir tu información
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>No compartimos tu información personal con terceros, excepto en los siguientes casos:</p>
                <ul>
                    <li>Cuando sea necesario para cumplir con la ley o responder a solicitudes legales.</li>
                    <li>Para proteger nuestros derechos, propiedad o seguridad, así como los de nuestros usuarios.</li>
                    <li>Con proveedores de servicios que nos ayudan a operar nuestro sitio web y servicios.</li>
                </ul>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion-header">
                4. Seguridad de tu información
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>Implementamos medidas de seguridad técnicas y organizativas para proteger tu información personal contra el acceso no autorizado, pérdida o destrucción.</p>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion-header">
                5. Tus derechos
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>Tienes derecho a acceder, corregir o eliminar tu información personal. Si deseas ejercer estos derechos, contáctanos a través de nuestro formulario de contacto.</p>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion-header">
                6. Cambios en esta política
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>Podemos actualizar esta política de privacidad ocasionalmente. Te notificaremos sobre cualquier cambio publicando la nueva política en esta página.</p>
            </div>
        </div>

        <div class="accordion">
            <div class="accordion-header">
                7. Contacto
                <span class="icon">▼</span>
            </div>
            <div class="accordion-content">
                <p>Si tienes preguntas o inquietudes sobre esta política de privacidad, no dudes en contactarnos a través de nuestro formulario de <a href="#" id="contactLink">contacto</a>.</p>
            </div>
        </div>
    </div>

    <script>
        // Obtener la fecha actual en formato dd/mm/yyyy
        const today = new Date();
        const day = String(today.getDate()).padStart(2, '0');
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const year = today.getFullYear();
        document.getElementById('currentDate').textContent = `${day}/${month}/${year}`;

        // Funcionalidad del acordeón
        const accordionHeaders = document.querySelectorAll('.accordion-header');

        accordionHeaders.forEach(header => {
            header.addEventListener('click', () => {
                // Toggle active class on the clicked header
                header.classList.toggle('active');

                // Toggle active class on the content
                const content = header.nextElementSibling;
                content.classList.toggle('active');

                // Close other accordion items
                accordionHeaders.forEach(otherHeader => {
                    if (otherHeader !== header) {
                        otherHeader.classList.remove('active');
                        otherHeader.nextElementSibling.classList.remove('active');
                    }
                });
            });
        });

        // Reemplazar el enlace de contacto con el adecuado para Laravel
        document.getElementById('contactLink').href = "/contact";
    </script>
</body>
</html>
@include('components.Footer')
@endsection
