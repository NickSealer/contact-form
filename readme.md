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
MAIL_PASSWORD=your password email
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

## Preview

![contact-form-preview](https://user-images.githubusercontent.com/27818621/59525871-1384f100-8e9d-11e9-8e3e-0f69d8bb96db.png)
