<?php
namespace DadaStudio\Braintree;

use \Braintree\Configuration as Braintree_Configuration;
use \Braintree\ClientToken as Braintree_ClientToken;
use \Braintree\Customer as Braintree_Customer;
use \Braintree\Subscription as Braintree_Subscription;
use \Braintree\Transaction as Braintree_Transaction;
use \Braintree\Plan as Braintree_Plan;
use \Braintree\AddOn as Braintree_AddOn;
use \Braintree\Discount as Braintree_Discount;
use \Braintree\PaymentMethod as Braintree_PaymentMethod;

use Carbon\Carbon;
use Config;
use Exception;

class Braintree {
	
	public function __construct() {
		
		Braintree_Configuration::environment(Config::get('braintree.environment'));
		Braintree_Configuration::merchantId(Config::get('braintree.merchantId'));
		Braintree_Configuration::publicKey(Config::get('braintree.publicKey'));
		Braintree_Configuration::privateKey(Config::get('braintree.privateKey'));
	}
	
	public function getClientToken() {
		return Braintree_ClientToken::generate();
	}
	
	public function sale($props) {
		return Braintree_Transaction::sale($props);
	}
}
