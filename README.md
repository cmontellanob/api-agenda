# instalar aplicacion
# instalar las librerias
composer install
# copiar .env.example a otro nombre y ese cambiaro a .env

# generar llave de a aplicacion
php artisan key:generate



# instalar api 
php artisan install:api

# Crear modelo migracion seeder factory
php artisan make:model Agenda -msf

# listar rutas api
php artisan route:list --path=api

# rectusos para api

Route::apiResource('agenda', AgendaController::class)

# crear controlador para api

php artisan make:controller PhotoController --api

# Dara seguridad a la api  vamos firebase/php-jwt
composer require firebase/php-jwt

#Escribir codigo en el archivo .env
JWT_SECRET=secret
JWT_ALGORITHM=HS256

# Crear el midleware 
php artisan make:middleware JwtMiddleware

# Escribir codigo del midleware




