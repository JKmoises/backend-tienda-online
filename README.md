# Desafio _Backend_ - **Bsale**

![PHP API REST](https://2.bp.blogspot.com/-8S0LVYAxT-M/WHGAUwDNGzI/AAAAAAAAB_U/jmlnEz0mmPkz4meyYocDPhLDS72DXY1AwCLcB/s1600/API-Using-PHP.jpg)

## Tecnologías:

Para el desarrollo de esta _API REST_ se usaron las siguientes tecnologías:

- **_PHP:_** Con este lenguaje de _backend_ se crean los _endpoints_, _Api en formato JSON_, etc.
- **_SQL:_** Con este lenguaje de consulta se accede a la base de datos de **MySQL** para la construcción de la _API REST_.
- **_Composer:_** Gestor de dependencias de **PHP** para instalar las librerías necesarias para el desafío.
- **_phpdotenv_**: Esta librería permite crear _variables de entorno_ para proteger datos sensibles de la app (como lo es la contraseña de la _BD_, su usuario, etc).

---

## Endpoints

### Listado de todos los productos

`GET` [https://tienda--bsale.herokuapp.com/api/productos](https://tienda--bsale.herokuapp.com/api/productos)

### Listado de categorías de productos

`GET` [https://tienda--bsale.herokuapp.com/api/categorias](https://tienda--bsale.herokuapp.com/api/categorias)

##### **_Respuesta:_**

```json
[
  { "id": "7", "name": "vodka" },
  { "id": "6", "name": "cerveza" },
  { "id": "5", "name": "snack" },
  { "id": "4", "name": "bebida" },
  { "id": "3", "name": "ron" },
  { "id": "2", "name": "pisco" },
  { "id": "1", "name": "bebida energetica" }
]
```

### Listado de productos por categoría

`GET` https://tienda--bsale.herokuapp.com/api/productos?categoria=snack

##### **_Respuesta:_**

```json
[
  {
    "id": "47",
    "name": "Man\u00ed salado",
    "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/manisaladomp4415.jpg",
    "price": "600",
    "discount": "0",
    "category": "snack"
  },
  {
    "id": "53",
    "name": "Mani Sin Sal",
    "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/manisinsalmp6988.jpg",
    "price": "500",
    "discount": "0",
    "category": "snack"
  },
  {
    "id": "54",
    "name": "Papas Fritas Lisas Bolsa Grande",
    "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/papaslisasgrande7128.jpg",
    "price": "1490",
    "discount": "0",
    "category": "snack"
  },
  {
    "id": "55",
    "name": "Papas Fritas Bolsa Peque\u00f1a",
    "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/papaslisas7271.jpg",
    "price": "500",
    "discount": "0",
    "category": "snack"
  },
  {
    "id": "56",
    "name": "Papas Fritas Tarro",
    "url_image": "https://dojiw2m9tvv09.cloudfront.net/11132/product/78028005335657432.jpg",
    "price": "1990",
    "discount": "0",
    "category": "snack"
  }
]
```

#### Parámetros:

- **_categoria_**: Filtra los por categoría.
  - #### **Categorías disponibles:**
    - vodka
    - cerveza
    - snack
    - bebida
    - ron
    - pisco
    - bebida energetica

---

---

## ¿Que patrón de arquitectura usa esta _*API*_?

Esta _API_ usa los siguientes patrones de arquitectura:

### Active Record:

- Patrón que se usa para interactuar con la _BD_ de la _API_.
- Responsable de trabajar con los datos, en un _MVC_ entraría en el **M** de _Model_.
- Trabaja con el paradigma de _POO_ para sincronizar una _tabla_ de la _BD_ con un objeto en memoria que tiene los mismos datos que esta _tabla_.
- Establece los métodos necesarios para crear, actualizar, leer y eliminar datos.

### Model View Controller (MVC):

Este patrón nos permite desacoplar el código para que sea mantenible o escalable.

- **_Model:_** Se encarga de consultar a la _BD_ y crear el _modelo_ de una respectiva tabla.
- **_View:_** Se encarga de todo lo que se ve en pantalla, en este caso como es un _API REST_ se renderizarán datos en formato _JSON_.
- **_Controller_:** Comunica el _Modelo_ con la _Vista_, antes que el _Modelo_ consulte la _BD_. También contiene toda la lógica de la _API_.
- **_Router:_** Registra todas las _URL's_ o _endpoints_ de la _API_. Cada _endpoint_ tiene un _Controlador_ asociado.

---

## Estructura de carpetas y archivos:

| Carpeta / Archivo          | Funcionalidad                                                                                                 |
| -------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `/controllers`             | Guarda los **controladores** creados                                                                          |
| `/includes`                | Contiene las _variables de entorno_, funciones globales y configuración a la base de datos.                   |
| `/models`                  | Contiene todos los **modelos** creados                                                                        |
| `/models/ActiveRecord.php` | _Clase_ que hereda a los _modelos_ ya que tiene todos las propiedades y métodos para comunicarse con la _BD_. |
| `/public`                  | Contiene el archivo con todos los _endpoints_ de la api.                                                      |
| `/vendor`                  | Carpeta que guarda las dependecias instaladas con _composer_.                                                 |
| `.gitignore`               | Establece carpetas o archivos que son de desarrollo y no tendrán seguimiento con _Git_.                       |
| `composer.json`            | Archivo de configuración de dependencias de _PHP_.                                                            |
| `Router.php`               | _Clase_ que contiene los métodos para definir los _endpoints_ ya sea vía `GET` o `POST`.                      |
