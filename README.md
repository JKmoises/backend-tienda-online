# Desafio _Backend_ - **Bsale** 

## Tecnologías:
Para el desarrollo de la _API REST_ se usaron las siguientes tecnologías:
- **_PHP:_** Con este lenguaje de _backend_ se crean los _endpoints_, _Api en formato JSON_, etc.
- **_SQL:_** Con este lenguaje de consulta se accede a la base de datos de **MySQL** para la construcción de la _API REST_.
- **_Composer:_** Gestor de dependencias de **PHP** para instalar las librerías necesarias para el desafío.
- **_phpdotenv_**: Esta librería permite crear _variables de entorno_ para proteger datos sensibles de la app (como lo es la contraseña de la _BD_, su usuario, etc).

---

## ¿Que patrón de arquitectura usa esta *_API_*?
Esta _API_ usa los siguientes patrones de arquitectura:

### Active Record:
- Patrón que se usa para interactuar con la _BD_ de la _API_.
- Responsable de trabajar con los datos, en un _MVC_ entraría en el **M** de _Model_.
- Trabaja con el paradigma de _POO_ para sincronizar una _tabla_ de la _BD_ con un objeto en memoria que tiene los mismos datos que esta _tabla_.
- Establece los métodos necesarios para crear, actualizar, leer y eliminar datos.
### Model View Controller (MVC):
Este patrón nos permite desacoplar el código para que sea mantenible o escalable.

- **_Model:_** Se encarga de consultar a la _BD_ y crear el modelo de una respectiva tabla.
- **_View:_** Se encarga de todo lo que se ve en pantalla, en este caso como es un _API REST_ se renderizarán datos en formato _JSON_.
- **_Controller_:** Comunica el _Modelo_ con la _Vista_, antes que el _Modelo_ consulte la _BD_. También contiene toda la lógica de la _API_.
- **_Router:_** Registra todas las _URL's_ o _endpoints_ de la _API_. Cada _endpoint_ tiene un _Controlador_ asociado.

