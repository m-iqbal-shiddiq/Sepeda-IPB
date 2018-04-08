<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       $halaman ='';
	   if (Request::segment(1) =='peminjaman'){
	   	$halaman ='peminjaman';
	   }
	   if (Request::segment(1) =='datapeminjam'){
	   	$halaman ='datapeminjam';
	   }
	   view()->share('halaman', $halaman);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
