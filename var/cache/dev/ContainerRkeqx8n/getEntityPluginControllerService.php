<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'JMS\Payment\CoreBundle\PluginController\EntityPluginController' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle\\PluginController\\PluginControllerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle\\PluginController\\PluginController.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\payment-core-bundle\\JMS\\Payment\\CoreBundle\\PluginController\\EntityPluginController.php';

$this->services['JMS\Payment\CoreBundle\PluginController\EntityPluginController'] = $instance = new \JMS\Payment\CoreBundle\PluginController\EntityPluginController(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}, ['result_class' => 'JMS\\Payment\\CoreBundle\\PluginController\\Result', 'payment_instruction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction', 'payment_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Payment', 'financial_transaction_class' => 'JMS\\Payment\\CoreBundle\\Entity\\FinancialTransaction', 'credit_class' => 'JMS\\Payment\\CoreBundle\\Entity\\Credit'], ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

$instance->addPlugin(${($_ = isset($this->services['JMS\Payment\PaypalBundle\Plugin\ExpressCheckoutPlugin']) ? $this->services['JMS\Payment\PaypalBundle\Plugin\ExpressCheckoutPlugin'] : $this->load('getExpressCheckoutPluginService.php')) && false ?: '_'});

return $instance;
