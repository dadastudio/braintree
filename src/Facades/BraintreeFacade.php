<?php
namespace DadaStudio\Braintree\Facades;
use Illuminate\Support\Facades\Facade;

class BraintreeFacade extends Facade{
	protected static function getFacadeAccessor() { return 'Braintree'; }
}