
## Como instalar

Instalar laragon en nuestro computador, laragon ya viene incluido con composer, php y todo lo necesario para ejecutar el proyecto, en la carpeta de laragon ingresar a la carpeta www y en esta guardamos la carpeta del proyecto que clonamos de github. 
 
debemos revisar el archivo .env del proyecto para modifcar las credenciales de las bases de datos, y con phpmyadmin creamos la base de datos con el nombre "proyecto_backend" o en la consola de comandos ubicada en la carpeta del proyecto con el comando 'mysql -u -p' y luego 'CREATE DATABASE proyecto_backend;'.

y finalmente ejecutamos el comando 'php artisan migrate --seed'


## Como ingresar al sitio

Para ingresar debemos iniciar el servidor de laragon, y en navegador web escribimos 'proyectobackend.test' para ingresar a la pagina web.

### Integrantes

- **[Andrés Camilo Gómez](andresc.gomez@upb.edu.co)**
- **[Samir Eduardo Colpas](samir.colpas@upb.edu.co)**
- **[Daniel Humberto Morales](daniel.moralesr@upb.edu.co)**



