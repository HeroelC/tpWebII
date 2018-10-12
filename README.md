#EstadiosModel

Se puede obtener (get), eliminar (delete), editar (edit) y agregar (insert) estadios.
Se puede obtener un estadio por ID. (getId).

#RecitalesModel

Se puede obtener (get), agregar (insert) y eliminar (delete).
Se puede obtener un recital por ID. (getById).

#UsuarioModel [Listo]

Se pueden obtener los usuarios (getAll)
Se puede añadir usuarios (insert)
Se puede obtener el hash de la base de dato de un usuario en particular (getHash)
Se puede pedir un usuario en especifico (getName)

#TourView

Añadido formulario para cargar estadios.
Añadido formulario para cargar recitales.
Se muestra la tabla con todo los recitales y estadios.

#UsuariosController [Listo]

Se encriptan las contraseñas de los usuarios
Se verifica que el usuario no exista en la base de datos, para no tener usuarios duplicados

#LoginController [Listo]

Se verifica la password ingresada con el hash de la base de datos
Verificar si el nombre de usuario que se ingresa existe

#LoginView [Listo]

Añadido formulario para loguearse

#UsuariosView [Listo]

Añadido formulario para registrarse

#NavegacionView [Listo]

En esta sección se encuentra todo el contenido estatico de la página

#Smarty [Listo]

Añadidas las librerias de smarty
Añadidas vistas para Home, Music, Band, Tour, SignUp, Login

#Necesario:

Tour: Faltan todo los filtros, ¿Se muestra la tabla si no esta logueado? Preguntar.

Registrarse: Verificar en front end que los campos no esten vacios, ¿contraseña mayor a 6 digitos? ¿se puede usar el mismo mail para dos usuarios distintos?

Preguntar sobre como eliminar datos que poseean referencia en otra tabla.

Revisar linea 10 de heder

Centrar botoneras de los formularios de estadio, recital y editar.
