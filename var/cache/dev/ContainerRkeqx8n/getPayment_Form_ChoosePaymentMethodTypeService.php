<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payment.form.choose_payment_method_type' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle\\Form\\ChoosePaymentMethodType.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\DataTransformerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle\\Form\\Transformer\\ChoosePaymentMethodTransformer.php';

$this->services['payment.form.choose_payment_method_type'] = $instance = new \JMS\Payment\CoreBundle\Form\ChoosePaymentMethodType(${($_ = isset($this->services['JMS\Payment\CoreBundle\PluginController\EntityPluginController']) ? $this->services['JMS\Payment\CoreBundle\PluginController\EntityPluginController'] : $this->load('getEntityPluginControllerService.php')) && false ?: '_'}, ['paypal_express_checkout' => 'JMS\\Payment\\PaypalBundle\\Form\\ExpressCheckoutType']);

$instance->setDataTransformer(${($_ = isset($this->services['payment.form.choose_payment_method_transformer']) ? $this->services['payment.form.choose_payment_method_transformer'] : ($this->services['payment.form.choose_payment_method_transformer'] = new \JMS\Payment\CoreBundle\Form\Transformer\ChoosePaymentMethodTransformer())) && false ?: '_'});

return $instance;