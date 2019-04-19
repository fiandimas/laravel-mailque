<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel MailQue

- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension

## Install

1. Download and install composer (https://getcomposer.org/)
2. Open your cmd and set path to this project
3. copy .env.example to .env
4. Register mailtrap account (https://mailtrap.io/)
5. Copy SMTP user and pass paste to .env
6. Fill MAIL_FROM_ADDRESS with your own email
7. set mysql connection in .env
8. Run "composer install"
9. Run "php artisan migrate"
10. Run "php artisan key:generate"
12. Run "php artisan queue:work"
13. Run "php artisan serve"
14. Enjoy
