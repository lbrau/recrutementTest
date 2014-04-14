<?php

namespace Recrutement\MyDashboardBundle\Menu;

use Symfony\Component\HttpFoundation\Request;
use Admingenerator\GeneratorBundle\Menu\AdmingeneratorMenuBuilder;

class AdminMenu extends AdmingeneratorMenuBuilder
{
    /**
     * @inheritDoc
     */
    public function createAdminMenu(Request $request)
    {
        $menu = parent::createAdminMenu($request);
        $menu->setExtra('translation_domain', 'AdminMenu');

        // here add menu items for top menu

        return $menu;
    }

    /**
     * @inheritDoc
     */
    public function createDashboardMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->setChildrenAttributes(array('id' => 'dashboard_sidebar', 'class' => 'nav nav-list'));
        $menu->setExtra('request_uri', $this->container->get('request')->getRequestUri());
        $menu->setExtra('translation_domain', 'MyTranslationDomain');

        // here add menu items for dashboard menu

        return $menu;
    }
}