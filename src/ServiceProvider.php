<?php
namespace MBCore\MCore;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Blade;

use MBCore\MCore\Console\Commands\MBCoreCommand;

//
class ServiceProvider extends BaseServiceProvider{

    /**
     * 在注册后进行服务的启动。
     *
     * @return void
     */
	public function boot()
	{

        # 资源文件
        $this->publishes([
            __DIR__.'/app/Global' => app_path('Global'),
        ], 'global');
	}


    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
	public function register()
	{

	}


}