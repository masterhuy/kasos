<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.cms_page_category.command_handler.abstract_cms_page_category_handler' shared service.

return $this->services['prestashop.adapter.cms_page_category.command_handler.abstract_cms_page_category_handler'] = new \PrestaShop\PrestaShop\Adapter\CMS\PageCategory\CommandHandler\AbstractCmsPageCategoryHandler(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
