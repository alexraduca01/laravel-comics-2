## Installazione Laravel

```bash
cd your parent_folder_path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c && clear

```

## Configurazione Laravel

```bash

composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

```

## Aggiunte facoltative

```bash

npm install --save @fortawesome/fontawesome-free

#in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont in resources e se voglio la rinomino

#copio in app.scss:

$fa-font-path: "../webfonts" !default;

@import "~@fortawesome/fontawesome-free/scss/fontawesome";
@import "~@fortawesome/fontawesome-free/scss/regular";
@import "~@fortawesome/fontawesome-free/scss/solid";
@import "~@fortawesome/fontawesome-free/scss/brands";

```

## Comandi Github

```bash
git init
git add .
git commit -m "initial commit"
git branch -M main
git remote add origin your_git_url
git push -u origin main

#creo nuova repo su Github da template

#clono la repo da vscode

composer install 

#copia e rinomina file .env.example in .env

php artisan key:generate

npm install
```
