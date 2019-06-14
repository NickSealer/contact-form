## Contact form for Laravel

This composer package offers a functional contact form template via smtp.

## Installation

```bash
composer require taskuniverse/contact-form
composer update
composer dump-autoload
Config .env file
php artisan config:clear
```

Add service provider to your config\\app.php file.

```bash
Taskuniverse\ContactForm\ContactFormServiceProvider::class
```

## Config .env file

Enable in your email account the access to third party apps.

```bash
MAIL_DRIVER=smtp
MAIL_PORT=587
MAIL_USERNAME=your mail
MAIL_PASSWORD=your passwor email
MAIL_ENCRYPTION=tls
```

## Modify views

If you want to customer the contact form partials, you can run:

```bash
php artisan vendor:publish --provider="Taskuniverse\ContactForm\ContactFormServiceProvider"
```

## Usage

Navigate to \<host\>/contact

## Tested

- php 7.2
- laravel 5.8
