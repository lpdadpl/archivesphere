## Instalación

---

Para instalar la app hay que tener requisitos previos instalados en tu computadora.

#### Si no usas linux

-   Ubuntu 20.0.4 o superior
    Descargar del mismo market de windows o en su defecto de la página oficial.
-   Docker desktop con wsl2
    Descargar de la página oficial de docker <https://www.docker.com/> .

Una vez instalados ambos los arrancamos para probar su funcionamiento.

Es inpontante tener los dos instalados con el wsl2 habilitado en tu instalación de ubuntu por medio de docker, esto se ve en docker desktop opciones(icono del engranage),
resources y en wsl integration, aquí tienes que tener marcadas la casilla de integración de wsl distro y la de tu distribución de ubuntu.

### Instalación y arranque del proyecto

1. Creamos una carpeta en nuestro ubuntu como /usr/proyectos/archivesphere dentro de esta carpeta clonamos el repositorio de nuestro proyecto
   con el comando (git clone <https://github.com/lpdadpl/archivesphere.git>) te pedirá tu usuario y contraseña de gitlab, despues clonamos el repositorio de laradock con el comando
   (git clone <https://github.com/lpdadpl/laradock_as.git>) una vez lanzado este comando procederemos a renombrar la carpeta de laradoc con el comando (sudo cp laradock_as laradock) (Para mas info <https://laradock.io/getting-started/#google_vignette>) tras esto
   tenemos que tener dos carpetas dentro de /usr/proyectos/archivesphere una como archivesphere que contiene nuestro proyecto y otra como laradock.

-   Nota: recomiendo tener en nuestro IDE como Notepad, Visual Studio Code o PhpStorm los proyectos separados uno abierto con la carpeta archivesphere y otro
    con la carpeta laradock, esto nos falicitará el trabajo a la hora de realizar los siguientes pasos.

2. Nos ubicamos en la carpeta principal del proyecto (archivesphere) donde está el archivo .env.example lo copiamos y lo renombramos como .env, este archivo ya
   contiene la configuracion necesaria para que funcione nuestro proyecto en un entorno local como <https://localhost>, esto lo puedes hacer desde tu IDE o desde el mismo ubuntu.

3. Nos posicionamos en la carpeta laradock también donde está el archivo .env.example lo copiamos y renombramos como .env, ahora en este archivo tenemos que hacer unos
   cambios en varias variables, abrimos el archivo y sobrescribimos lo siguiente:

```bash
APP_CODE_PATH_HOST=../archivesphere
DATA_PATH_HOST=~/.archivesphere/data
COMPOSE_PROJECT_NAME=archivesphere-laradock
PHP_VERSION=8.2
WORKSPACE_NODE_VERSION=16.18.1
MYSQL_VERSION=8.4.0
MYSQL_DATABASE=db_archivesphere
MYSQL_USER=admin_as
MYSQL_PASSWORD=123456
REDIS_PASSWORD=123456
```

-   En este punto es muy importante ajustar estas opciones tanto para el paso 2 como para el 3 o la instalación fallará por multiples razones.

-   Opcional: Pero recomendado descomentar estas lineas del módulo de nginx para tener certificado SSL en la app, seguirá siendo no segura pero tendra https.
    Debemos ir a la carpeta laradock al siguiente directorio laradock/nginx/sites y abrir el archivo default.conf, aqui podemos habilitar el certificado
    y si controlas sobre servidores con nginx podemos añadir un host virtual para que nuestro sitio sea accesible desde este.

```bash
    listen 443 ssl default_server;
    listen [::]:443 ssl default_server ipv6only=on;
    ssl_certificate /etc/nginx/ssl/default.crt;
    ssl_certificate_key /etc/nginx/ssl/default.key;
```

4. Tras esto nos situaremos en la carpeta de laradock en nuestro ubuntu para lanzar los siguientes comandos:

-   (docker-compose build --no-cache nginx mysql phpmyadmin redis), con esto se generaran las imagenes para los contenedores que deseamos usar.
-   Una vez haya terminado docker de hacer sus cosas y todo haya salido correcto lanzamos el comando (docker-compose up -d nginx mysql phpmyadmin redis ).
    Este comando creara los contenedores y posteriormente los lanzará para que sean ejecutados, en esta parte si no está bien configurado el .env de
    laradock dará algún fallo.

También puede fallar algún contenedor si está su puerto ocupado, es importante no tener corriendo otros servidores de apps como Wampp o Xampp, para ver en que
puertos se están sirviendo los contenedores podeis verlo en el docker desktop en windows o lanzando el comando (docker ps) en ubuntu.

-   Nota: Tras realizar estos cambios podremos lanzar el comando (docker ps) para ver que están todos los contenedores en funcionamiento, otra opción más gráfica
    es hacerlo desde docker desktop y comprobar que todos los contenedores del proyecto archivesphere-laradock están corriendo en color verde, si es así podemos cerrar el IDE
    que tenía abierta la carpeta de laradock porque a partir de aquí ya solo trabajaremos en el proyecto archivesphere.

5. Con los contenedores levantados vamos a lanzar unos comandos para generar nuestras carpetas con las dependencias tanto para Laravel como para Node JS.

-   Para esto tenemos que entrar dentro de contenedor workspace, para hacer esto podemos hacerlo con comandos o como se menciona más abajo en la Nota con el docker desktop.
    Desde ubuntu con comandos lanzamos el comando (docker ps) que nos mostrará un listado de los contenedores que tenemos corriendo ahora mismo y así identificar
    sus nombres y sus ids, después lanzamos el comando (docker exec -it nombre_contenedor /bin/bash) debería ser algo así (docker exec -it archivesphere-laradock-workspace-1 /bin/bash)
    una vez dentro del contenedor lanzamos el comando (composer install), una vez terminada la intalación lanzamos (php artisan migrate:fresh --seed)
    en esta parte creamos las tablas y repoblamos la base de datos, es importante haber tenido bien configurados los .env en la parte de la base de datos para que no falle.
