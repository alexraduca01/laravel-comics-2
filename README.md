## Installazione Laravel

```bash
cd your parent_folder_path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c

```
## Configurazione Laravel
```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont e se voglio la rinomino

#installo dbal per migration e seeder
composer require doctrine/dbal:^3.3


#comandi git

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url 
git push -u origin main


```
## Clono progetto da github 

```bash
# copio file .env.example e lo rinomino in .env

composer install

php artisan key:generate

npm install

# creo il database da phpmyadmin

# inserisco i dati per il collegamento al db in env

#creo migration es.
php artisan make:migration create_nome_tabella_table
php artisan make:migration update_users_table --table=users
php artisan make:migration add_phone_number_to_users_table

#lanciare migration
php artisan migrate

#revert migration
php artisan migrate:rollback

#creare il model e contestualmente resource controller, migration, seeder e form request per validazioni
php artisan make:model Nome -rcms --request

#popolare il db  es.
php artisan make:seeder UsersTableSeeder

php artisan db:seed --class=UsersTableSeeder

# preparo le rotte file web.php es. 
Route::get('/books', [BookController::class, 'index'])->name('books.index');

# creo controller
php artisan make:controller NomeController


# creo le views relative

# creo form request per validazione

php artisan make:request StoreNOMEMODELRequest

```
