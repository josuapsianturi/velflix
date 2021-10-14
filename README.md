<h1 align="center" >Velflix</h1>
<p align="center"><a href="https://packagist.org/packages/cpriego/valet-linux"><img src="https://poser.pugx.org/cpriego/valet-linux/license.svg" alt="License"></a>
</p>

## About Velflix

Velflix is a Laravel [Netflix](https://netflix.com) clone project, that i build using TALL stack ([Tailwindcss](https://tailwindcss.com/), [Alpinejs](https://github.com/alpinejs/alpine/), [Laravel](https://laravel.com/), [Livewire](https://laravel-livewire.com/) ).

> Note: Work in Progress.

## View
![screenshot](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/screenshot1.png)
![screenshot](https://raw.githubusercontent.com/josuapsianturi/velflix/main/public/img/screenshot2.png)

## Installation
Here is how you can run the project locally:
1. Clone this repo
    ```sh
    git clone https://github.com/josuapsianturi/velflix.git
    ```
1. Go into the project root directory
    ```sh
    cd velflix
    ```
1. Install PHP dependencies 
    ```sh
    composer install
    ```
1. Create account and get an API key themoviedb [ here](https://www.themoviedb.org/settings/api). Make sure to copy `API Read Access Token (v4 auth)`.
1. Copy .env.example file to .env
    ```sh
    cp .env.example .env
    ```
1. Go to `.env` file 
    - set database credentials (`DB_DATABASE=velflix`, `DB_USERNAME=root`, `DB_PASSWORD=`)
    - paste `TMDB_TOKEN=(your API key)` 
1. Generate key 
    ```sh
    php artisan key:generate
    ```
1. Create database `velflix`
1. Run migration
    ```
    php artisan migrate
    ```
1. install front-end dependencies
    ```sh
    npm install && npm run dev
    ```
1. Run server 
    > for valet users visit `velflix.test` in your favorite browser
   
    ```sh
    php artisan serve
    ```  
1. Visit `localhost:8000` in your favorite browser.     

    > Make sure to follow your Laravel local Development Environment.

## Contributing
Pull requests are welcome.

## License
Velflix is open-sourced software licensed under [the MIT license](https://choosealicense.com/licenses/mit/)
