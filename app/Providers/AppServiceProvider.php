<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = [
            [
                'title' => 'Информация',
                'alias' => 'admin::information::information',
            ],
            [
                'title' => 'Категории',
                'alias' => 'admin::category::index',
            ],
            [
                'title' => 'Новости',
                'alias' => 'news::catalog',
            ],
            [
                'title' => 'Авторизация',
                'alias' => 'admin::authorization::authorization'
            ],
            [
                'title' => 'Админка',
                'alias' => 'admin::news::index'
            ],

        ];

        \View::share('menu', $menu);
    }
}
