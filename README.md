# TASK MANAGER - API

## Tecnologías utilizadas

 [![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=fff&style=flat)](https://www.php.net/docs.php) [![Laravel](https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=fff&style=flat)](https://laravel.com/docs/10.x/readme) [![Git](https://img.shields.io/badge/Git-F05032?logo=git&logoColor=fff&style=flat)](https://developer.mozilla.org/en-US/docs/Glossary/Git)

## Indice 

- [Descripción general del proyecto :speech_balloon:](#descripción-general-del-proyecto)

- [Modo de empleo :on:](#modo-de-empleo)

- [Funcionamiento :arrow_forward:](#funcionamiento) 

- [Endpoints :end:](#endpoints)  

#

### Descripción general del proyecto

El presente proyecto consiste en una *API REST* que brinda los servicios para acceder y modificar la base de datos de un gestor de tareas. Permitiendo Llevar a cabo acciones de *CRUD* pero centrándose especialmente en el acceso a datos aplicando filtros para su búsqueda.

### Modo de empleo

Pasos para lanzar la aplicación:

1- Abre el repositorio de la API con el *editor de código* y ejecuta los siguientes comandos por la terminal:

php artisan migrate
php artisan db:seed

2- Ejecuta el siguiente comando para levantar el servidor de la API:

php artisan serve --port=5000

### Funcionamiento

A través de *laravel* se genera una base de datos mediante un proceso de *migration* y *seed* de los modelos de sus tablas (aunque se han dejado comentados unos archivos factory para rellenar las tablas, en lugar de hacer seed, si se estima oportuno). Laravel mismo levanta también el servidor en el puerto que le indiquemos en el propio comando para levantarlo.

Siguiendo un esquema *modelo vista controlador*, la aplicación enruta las peticiones que puedan llegar al servidor, para interactuar con las diferentes funciones que contienen los controladores de cada tabla (quienes se encuentran enlazados a los archivos *request* y *resource*).

Además la API emplea los controladores mediados por unos filters que nos permiten filtrar las búsquedas a trabés de la URL tal y como se desprende de los ejemplos que se muestran en el siguiente apartado.

### Endpoints

**Ejemplos de endpoints con GET**

GET, http://localhost:5000/api/v1/customers

Trae los datos de todos los clientes.

GET, http://localhost:5000/api/v1/customers?includeTasks=true

Trae los datos de todos los clientes con sus tareas asociadas.

GET, http://localhost:5000/api/v1/customers${id}

Trae los datos del cliente con el número de id introducido.

GET, http://localhost:5000/api/v1/customers${id}?includeTasks=true

Trae los datos del cliente con el número de id introducido y los datos de sus tareas asociadas.

GET, http://localhost:5000/api/v1/tasks

Trae los datos de todas las tareas.

GET, http://localhost:5000/api/v1/tasks?customerId[eq]=${id}

Trae los datos de todas las tareas correspondientes al cliente con el número de id introducido.

GET, http://localhost:5000/api/v1/tasks?status[eq]=hecho

Trae los datos de todas las tareas ya realizadas.

GET, http://localhost:5000/api/v1/tasks?status[eq]=por%20hacer

Trae los datos de todas las tareas todavía no realizadas.

GET, http://localhost:5000/api/v1/tasks?status[eq]=hecho&customerId[eq]=${id}

Trae los datos de todas las tareas realizadas por el cliente con el número de id introducido.

GET, http://localhost:5000/api/v1/tasks?status[eq]=por%20hacer&customerId[eq]=${id}

Trae los datos de todas las tareas todavía no realizadas correspondientes al cliente con el número de id introducido.

**Otros endpoints**

POST, http://localhost:5000/api/v1/customers

Añade los datos de un nuevo cliente.

POST, http://localhost:5000/api/v1/tasks

Añade los datos de una nueva tarea.

PUT, http://localhost:5000/api/v1/customers/{id}

Modifica los datos correspondientes al cliente con el número de id introducido.

PUT, http://localhost:5000/api/v1/tasks/{id}

Modifica los datos correspondientes a la tarea con el número de id introducido.

DELETE, http://localhost:5000/api/v1/customers/{id}

Elimina los datos correspondientes al cliente con el número de id introducido.

DELETE, http://localhost:5000/api/v1/tasks/{id}

ELimina los datos correspondientes a la tarea con el número de id introducido.