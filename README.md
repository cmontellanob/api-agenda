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