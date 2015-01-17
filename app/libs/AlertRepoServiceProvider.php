<?php
namespace Technasium;
use Technasium\AlertRepo;
use Illuminate\Support\ServiceProvider;


Class AlertRepoServiceProvider extends \Illuminate\Support\ServiceProvider{
	protected $defer = true;
	public function register(){
		$this->app->singleton('Technasium\AlertRepo',function($app){
			return new Technasium\AlertRepo();
		});
	}

	public function provides(){
		return ['Technasium\AlertRepo'];
	}

}