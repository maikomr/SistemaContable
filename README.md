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

`<VirtualHost *:80><br />
    ServerName sistema-contable<br />
    DocumentRoot "directorio-del-proyecto"<br />
    <Directory  "directorio-del-proyecto"><br />
        Options +Indexes +Includes +FollowSymLinks +MultiViews<br />
        AllowOverride All<br />
        Require local<br />
    </Directory><br />
</VirtualHost>`

Reemplazar `directorio-del-proyecto` por la ubicacion donde se encuentra el proyecto.

### Paso 4
Abrir un navegador e ir a la direccion http://sistema-contable