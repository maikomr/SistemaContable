# SistemaContable
Este sistema contable es desarrollado para una asignatura en la materia Ingenieria de Software en las carreras Ingenieria de Sistemas e Ingenieria Informatica de la Universidad Mayor de San Simon.

## Instrucciones
Para hacer correr la aplicacion necesitas:
* PHP
* MySQL
* Apache2

### Paso 1
Ejecutar el script `contaumssg2.sql` ubicado en la raiz del proyecto.

### Paso 2
Configurar el servidor MySQL con el user `root` y sin password.

### Paso 3
Crear un Virtual Host con el siguiente contenido

`<VirtualHost *:80>
    ServerName sistema-contable
    DocumentRoot "directorio-del-proyecto"
    <Directory  "directorio-del-proyecto">
        Options +Indexes +Includes +FollowSymLinks +MultiViews
        AllowOverride All
        Require local
    </Directory>
</VirtualHost>`

Reemplazar `directorio-del-proyecto` por la ubicacion donde se encuentra el proyecto.

### Paso 4
Abrir un navegador e ir a la direccion http://sistema-contable