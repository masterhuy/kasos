<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.import.entity_deleter' shared service.

return $this->services['prestashop.adapter.import.entity_deleter'] = new \PrestaShop\PrestaShop\Adapter\Import\ImportEntityDeleter(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'jms_', ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.image.file_deleter']) ? $this->services['prestashop.core.image.file_deleter'] : ($this->services['prestashop.core.image.file_deleter'] = new \PrestaShop\PrestaShop\Core\Image\Deleter\ImageFileDeleter())) && false ?: '_'});
