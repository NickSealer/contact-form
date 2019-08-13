<?php

namespace Taskuniverse\ContactForm;

use Illuminate\Support\ServiceProvider;
use Taskuniverse\ContactForm\Controllers\ContactController;

class ContactFormServiceProvider extends ServiceProvider
{
  /**
  * Register services.
  *
  * @return void
  */
  public function register()
  {
    $this->app->make('Taskuniverse\ContactForm\ContactController');
  }

  /**
  * Bootstrap services.
  *
  * @return void
  */
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    $this->loadViewsFrom(__DIR__.'/views', 'contactform');
    $this->publishes([__DIR__.'/views' => base_path('resources/views/vendor/contactform')]);
  }
}
