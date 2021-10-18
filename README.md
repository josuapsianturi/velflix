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
1. install front-end dependencies
    ```sh
    npm install && npm run dev
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

1. Run server 
    > for valet users visit `velflix.test` in your favorite browser
   
    ```sh
    php artisan serve
    ```  
1. Visit `localhost:8000` in your favorite browser.     

    > Make sure to follow your Laravel local Development Environment.

1. Newsletter feature configuration (optional)
 - Go to [mailchimp](https://mailchimp.com)
 - Register your account, follow this step if you need help:
    - Click Sign Up Free
    - Enter your data and check your email
    - select Free, Next
    - Do you have a list of contacts? (NO)
    - Do you sell products or services online? (Neither, Products)
    - continue
 - Go to Profile > Extras > API keys
 - Create a key and copy API key
 - open the velflix project, go to .env file and paste it into `MAILCHIMP_KEY=paste API key here`
 - Go to web.php and paste this code at the bottom or you can follow the documentation [here](https://mailchimp.com/developer/marketing/api/lists/get-lists-info/)
 ```sh
    Route::get('ping', function() {
    $mailchimp = new MailchimpMarketing\ApiClient();
    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us5',
    ]);

    $response = $mailchimp->lists->getAllLists();
    ddd($response);
    });
 ```
 > make sure you fill in the `server` correctly, check the link at the top of your admin Mailchimp, for me its `https://us5.admin.mailchimp.com/account/api/` so i give the value of server is `us5`.
 - visit `localhost:8000/ping` or `velflix.test/ping` and copy value of id in the ` "lists" > 0 > "id"`
 - open project, in .env file paste the id into `MAILCHIMP_LIST_SUBSCRIBERS=paste id here` and we ready to go
 - visit `localhost:8000` or `velflix.test` test email for subscribing , and refresh your admin mailchimp it should be Your audience has 1 contacts.
 
## Contributing
Pull requests are welcome.

## License
Velflix is open-sourced software licensed under [the MIT license](https://choosealicense.com/licenses/mit/)
