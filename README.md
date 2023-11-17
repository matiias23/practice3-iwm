# PARA EL SERVIDOR
## Prerequisitos tener PHP instalado y composer, además de una base de datos
1. Clona el repositorio: `git clone https://github.com/matiias23/practice2-iwm.git`
2. Navege hasta el directorio BACKENDCITAS-LARAVEL: cd BACKENDCITAS-LARAVEL
3. Instala las dependencias: composer install
4. Configure el .env con sus 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'
5. Genere la key: php artisan key:generate 
6. Verifique si en la estructura de su proyecto se encuentran las carpetas storage/framework/cache-sessions-views
6. Ejecute las migraciones: php artisan migrate
7. Ejecute los seeders: php artisan db:seed
8. Corra el programa: php artisan serve

#PARA EL CLIENTE
## Prerequisito tener Node.js instalado y Angular CLI: npm install -g @angular/cli
1. Navege hasta el directorio portfolio-frontend: cd portfolio-frontend
2. Instale las dependencas: npm install
3. Corra el programa: ng serve