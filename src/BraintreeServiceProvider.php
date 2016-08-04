<?php
namespace DadaStudio\Braintree;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class BraintreeServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	 {
		
	// 	// $this->publishes([
	// 	//     __DIR__.'/../../config/braintree.php' => config_path('billing_braintree.php'),
	// 	// ]);
		
		
	// 	$loader = AliasLoader::getInstance();
	// 	$loader->alias('Billing', 'DadaStudio\Braintree\Facades\Billing');
	 }
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Braintree', function($app)
		{
			return new Braintree();//$app['config']['AdminMenu']
		});
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}