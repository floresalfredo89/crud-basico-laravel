# 🧩 CRUD de Usuarios con Laravel

Este proyecto es una aplicación web sencilla desarrollada con **Laravel**, que implementa un **CRUD (Crear, Leer, Actualizar, Eliminar)** para gestionar usuarios.  
El objetivo es demostrar la estructura básica de un proyecto Laravel, incluyendo el uso de **migraciones**, **controladores**, **modelos** y **vistas Blade**.

---

## 🚀 Características principales

- Registro de nuevos usuarios  
- Visualización de la lista de usuarios  
- Edición de información de usuario  
- Eliminación de registros  
- Validación de formularios  
- Interfaz sencilla con Blade Templates

---

## 🧱 Requisitos

Antes de comenzar, asegúrate de tener instalado:

- PHP >= 8.1  
- Composer  
- MySQL o MariaDB  
- Node.js y NPM (opcional, para compilar assets)  
- Git

---

## ⚙️ Instalación

1. **Clonar el repositorio**

```bash
git clone https://github.com/floresalfredo89/crud-basico-laravel.git
cd crud-basico-laravel
```

2. **Instalar dependencias de PHP**

```bash
composer install
```

3. **Copiar el archivo de entorno**

```bash
cp .env.example .env
```

4. **Generar la clave de aplicación**

```bash
php artisan key:generate
```

5. **Configurar la base de datos**

Se debe crear una base de datos llamada prueba

Edita el archivo `.env` con tus credenciales de MySQL, por ejemplo:

```
DB_DATABASE=prueba
DB_USERNAME=root
DB_PASSWORD=
```

6. **Ejecutar las migraciones**

```bash
php artisan migrate
```

7. **Ejecutar el llenado de la tabla de usuarios (users)**

```bash
php artisan db:seed
```


---

## 📂 Estructura básica del proyecto

```
├── app/
│   ├── Http/
│   │   ├── Controllers/UserController.php
│   │   └── Requests/
│   │       ├── StoreUserRequest.php
│   │       └── UpdateUserRequest.php
│   └── Models/User.php
├── database/migrations/
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── users/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── show.blade.php
├── routes/web.php
└── README.md
```

---

## 📜 Licencia

Este proyecto se distribuye bajo la licencia **MIT**.  
Siéntete libre de usarlo, modificarlo y adaptarlo según tus necesidades.

---

## ✨ Autor
 
📧 [jairfloresluna@gmail.com](mailto:jairfloresluna@gmail.com)  
🐙 [GitHub](https://github.com/floresalfredo89)
