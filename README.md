#EstadiosModel

Se puede obtener (get), eliminar (delete), editar (edit) y agregar (insert) estadios.
Se puede obtener un estadio por ID. (getId).

#RecitalesModel

Se puede obtener (get), agregar (insert) y eliminar (delete).
Se puede obtener un recital por ID. (getById).

#UsuarioModel

Se pueden obtener los usuarios (getAll)
Se puede añadir usuarios (insert)
Se puede obtener el hash de la base de dato de un usuario en particular (getHash)
Se puede pedir un usuario en especifico (getName)

#TourView

Añadido formulario para cargar estadios.
Añadido formulario para cargar recitales.
Se muestra la tabla con todo los recitales y estadios.

#UsuariosController

Se encriptan las contraseñas de los usuarios
Se verifica la password ingresada con el hash de la base de datos

#UsuariosView

Añadido formulario para agregar usuarios
Añadido formulario para loguearse

#NavegacionView

En esta sección se encuentra todo el contenido estatico de la página

#Smarty

Añadidas las librerias de smarty
Añadidas vistas para Home, Music, Band, Tour, SignUp, Login

#Necesario:

Tour: Faltan todo los filtros

Login: Falta verificar si el nombre de usuario que se ingresa existe

Registrarse: Falta verificar que no exista un usuario con el mismo nombre antes de Registrarse
Verificar en front end que los campos no esten vacios, ¿contraseña mayor a 6 digitos? ¿se puede usar el mismo mail para dos usuarios distintos?

Preguntar sobre como eliminar datos que poseean referencia en otra tabla.

Revisar linea 10 de heder:  <base href="http://localhost/tpwebii/">

Centrar botoneras de los formularios de estadio, recital y editar.

Smarty: Generar un panel para el usuario logueado
