# Prueba Técnica: CRUD de Pagos — Laravel 10

Proyecto base para la prueba técnica de desarrollador PHP. El candidato debe completar la funcionalidad de un CRUD de pagos sobre una estructura inicial ya provista.

---

## Descripción

Se proporciona un proyecto Laravel 10 con una estructura parcial: vistas, controlador base y rutas iniciales. El candidato debe implementar las funcionalidades faltantes para gestionar un listado de pagos (crear, leer, actualizar y eliminar), siguiendo los pasos detallados en la vista de introducción (`/`).

**Punto extra (no obligatorio):** conectar una API REST externa y mostrar los datos en una vista.

---

## Requisitos previos

- PHP >= 8.1
- Composer
- MySQL o SQLite

---

## Instalación

```bash
# 1. Instalar dependencias
composer install

# 2. Copiar el archivo de entorno
cp .env.example .env

# 3. Generar la clave de la aplicación
php artisan key:generate
```

---

## Configuración de la base de datos

Edita el archivo `.env` con tus credenciales. Puedes elegir entre **MySQL** o **SQLite**.

**Opción A — MySQL:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_tecnica
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

**Opción B — SQLite:**
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

Para SQLite, crea primero el archivo:
```bash
touch database/database.sqlite
```

---

## Migraciones y datos de ejemplo

```bash
# Crear las tablas
php artisan migrate

# Cargar los datos de ejemplo
php artisan db:seed
```

El seeder inserta **5 pagos de ejemplo** para que todos los candidatos trabajen con el mismo conjunto de datos.

---

## Levantar el servidor

```bash
php artisan serve
```

Abre [http://localhost:8000](http://localhost:8000) en tu navegador. La página de inicio (`/`) muestra las instrucciones completas de la prueba.

---

## Estructura del proyecto

```
app/Http/Controllers/
    PaymentsController.php   ← completar (store, edit, update, destroy)
    BonusController.php      ← completar (punto extra)

app/Models/
    ← crear modelo Payment

database/migrations/
    2024_01_01_000000_create_payments_table.php

database/seeders/
    DatabaseSeeder.php       ← 5 pagos de ejemplo precargados

resources/views/payments/
    list.blade.php           ← completar con datos dinámicos
    create.blade.php         ← completar (CSRF + action)
    bonus.blade.php          ← completar con tabla de API externa
    ← crear edit.blade.php

routes/web.php               ← agregar rutas faltantes
```

---

## Lo que debe implementar el candidato

| Paso | Tarea |
|------|-------|
| 1 | Configurar base de datos en `.env` |
| 2 | Crear el modelo `Payment` con `$fillable` |
| 3 | Mostrar los pagos en el listado (`index`) |
| 4 | Implementar creación de pagos (`store`) con validación |
| 5 | Implementar edición de pagos (`edit` / `update`) |
| 6 | Implementar eliminación de pagos (`destroy`) |
| 7 | Manejar notificaciones de éxito/error con sesión |
| 8 | Asegurar la navegación entre vistas |
| **Bonus** | Consumir `https://jsonplaceholder.typicode.com/users` y mostrar los datos en una tabla |

Las instrucciones detalladas de cada paso están disponibles en la ruta `/` de la aplicación.
