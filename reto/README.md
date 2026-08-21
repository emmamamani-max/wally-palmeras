# Wally Palmeras

Proyecto académico responsive e interactivo para el negocio Wally Palmeras.

## Requisitos
- PHP 8.1+
- Composer
- Laravel 10/11/12 compatible
- Laragon (recomendado para la práctica)

## Ejecutar
1. Copiar la carpeta `wally-palmeras` dentro de `C:\laragon\www`.
2. Abrir Terminal de Laragon.
3. Entrar al proyecto:
   `cd C:\laragon\www\wally-palmeras`
4. Instalar dependencias:
   `composer install`
5. Copiar `.env.example` a `.env`.
6. Ejecutar:
   `php artisan key:generate`
7. Levantar:
   `php artisan serve`
8. Abrir `http://localhost:8000`.

## Práctica PHP
La carpeta `php-practica` contiene el formulario con `method="POST"` y `procesar.php`, tal como solicita la consigna.

## Rutas Laravel
- `/` Inicio
- `/contacto` Contacto
