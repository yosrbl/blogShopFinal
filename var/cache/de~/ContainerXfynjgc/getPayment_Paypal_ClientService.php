<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payment.paypal.client' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\payment-paypal-bundle\\JMS\\Payment\\PaypalBundle\\Client\\Client.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\payment-paypal-bundle\\JMS\\Payment\\PaypalBundle\\Client\\Authentication\\AuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\payment-paypal-bundle\\JMS\\Payment\\PaypalBundle\\Client\\Authentication\\TokenAuthenticationStrategy.php';

return $this->services['payment.paypal.client'] = new \JMS\Payment\PaypalBundle\Client\Client(${($_ = isset($this->services['payment.paypal.authentication_strategy.token']) ? $this->services['payment.paypal.authentication_strategy.token'] : ($this->services['payment.paypal.authentication_strategy.token'] = new \JMS\Payment\PaypalBundle\Client\Authentication\TokenAuthenticationStrategy('your_api_username', 'your_api_password', 'your_api_signature'))) && false ?: '_'}, true);
