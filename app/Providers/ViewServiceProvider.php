<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		// Retorna a localizacao do usuario
		View::composer('*', function($view)
		{
			$view->with('locale', str_replace('_', '-', strtolower(App::getLocale())));
		});


		// // binda os arquivos do admin
		// View::composer('admin.*', function()
		// {
        //     // recupera o nome da regra do usuario logado
        //     $nameRule = UserService::getNameByRules();
		// 	// envia o parametro para todas as views
		// 	View::share('rule', $nameRule);
        //     // recupera a quantidade de mensagens novas
        //     $count = ContactService::countNewMsg();
		// 	// envia o parametro para todas as views
		// 	View::share('count_message', $count);
		// });
    }
}
