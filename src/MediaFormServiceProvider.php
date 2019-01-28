<?php

namespace Touge\MediaForm;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Admin;
use Encore\Admin\Form;

class MediaFormServiceProvider extends ServiceProvider
{
    public function handle(){
        Admin::js('vendor/touge/laravel-admin-ext-media/media.js');
        Admin::css('vendor/touge/laravel-admin-ext-media/media.css');
    }
    /**
     * {@inheritdoc}
     */
    public function boot(MediaForm $extension)
    {
        if (! MediaForm::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-admin-ext-media');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/touge/laravel-admin-ext-media')],
                'laravel-admin-ext-media'
            );
        }


        Admin::booting(function () {
            Form::extend('media', Media::class);
        });

        $this->app->booted(function () {
            MediaForm::routes(__DIR__.'/../routes/web.php');
        });
    }
}