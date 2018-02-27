<?php
require __DIR__ . "/vendor/autoload.php";

use Moip\Moip;
use Moip\Resource\Customer;
use Moip\Auth\BasicAuth;

/*Token*/

$token = "AELVPTYBVTUEBQMCZXW6KN2UP1I8GDMH";
$key = "XDQ17AC74EDZONJUB7YIMCU1C6PMFXIGVEFWGK7Y";

$moip = new Moip(new BasicAuth($token, $key), Moip::ENDPOINT_SANDBOX);


$customers = $moip->customers()->setOwnId(uniqid())
	->setFullname('Djalma Jorgeles')
	->setEmail('djalma@somadev.com.br')
	->setBirthDate('1981-04-20')
	->setTaxDocument(29779877894) //Número de CPF
	->setPhone(12, 991113524)
	->addAddress(Customer::ADDRESS_BILLING, 'Maranhã', 84, 'Vila São Pedro', 'São José dos Campos','SP', '12215680') // Endereço de cobrança, que vai a fatura
	->addAddress(Customer::ADDRESS_SHIPPING, 'Maranhã', 84, 'Vila São Pedro', 'São José dos Campos','SP', '12215680') // Endereço de Entrega do Produto
	->create();

	var_dump($customers);

 ?>