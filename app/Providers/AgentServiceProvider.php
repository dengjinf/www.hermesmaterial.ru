<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Jenssegers\Agent\Agent;

class AgentServiceProvider extends ServiceProvider
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
        //
        $agent = new Agent();//Agent对象用于判断移动设备

        View::share('agent', $agent);//用于在所有视图层通过对象判断设备
    }
}
