<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.employee' shared service.

$this->services['prestashop.core.grid.definition.factory.employee'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\EmployeeGridDefinitionFactory(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}->generate("admin_common_reset_search", ["controller" => "employee", "action" => "index"]), ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}->generate("admin_employees_index"));

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});

return $instance;
