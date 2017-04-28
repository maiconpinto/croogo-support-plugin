<?php
/**
 * Support Activation
 *
 * Activation class for Support plugin.
 *
 * @package  Support
 * @author   Maicon Pinto <maiconsilva.pinto@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.maiconpinto.com.br
 */

namespace Support\Config;

use Cake\ORM\TableRegistry;

class PluginActivation
{

/**
 * onActivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
    public function beforeActivation(&$controller)
    {
        return true;
    }

/**
 * Called after activating the plugin in ExtensionsPluginsController::admin_toggle()
 *
 * @param object $controller Controller
 * @return void
 */
    public function onActivation(&$controller)
    {
        // ACL: set ACOs with permissions
        // $controller->Croogo->addAco('Support/admin_index'); // ExampleController::admin_index()
        // $controller->Croogo->addAco('Support/index', ['registered', 'public']); // ExampleController::index()

        $Links = TableRegistry::get('Croogo/Menus.Links');

        // Main menu: add an Example link
        $mainMenu = $Links->Menus->findByAlias('main')->first();
        $Links->addBehavior('Tree', [
            'scope' => [
                'Links.menu_id' => $mainMenu->id,
            ],
        ]);
        $Links->save($Links->newEntity([
            // Menu in which the link should go
            'menu_id' => $mainMenu->id,
            // Link caption
            'title' => 'Support',
            // The link
            'link' => 'plugin:support/controller:support/action:index',
            // Status : activated or not (0 or 1)
            'status' => 1,
            // Link class
            'class' => 'support',
            // Roles which link is visible. Empty string means visible to all
            'visibility_roles' => '["1","2","3"]',
        ]));
    }

/**
 * onDeactivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
    public function beforeDeactivation(&$controller)
    {
        return true;
    }

/**
 * Called after deactivating the plugin in ExtensionsPluginsController::admin_toggle()
 *
 * @param object $controller Controller
 * @return void
 */
    public function onDeactivation(&$controller)
    {
        // ACL: remove ACOs with permissions
        // $controller->Croogo->removeAco('Example'); // ExampleController ACO and it's actions will be removed

        /*$Links = ClassRegistry::init('Menus.Link');
        // Main menu: delete Example link
        $link = $Links->find('first', [
            'joins' => [
                [
                    'table' => 'menus',
                    'alias' => 'JoinMenu',
                    'conditions' => [
                        'JoinMenu.alias' => 'main',
                    ],
                ],
            ],
            'conditions' => [
                'Link.link' => 'plugin:support/controller:support/action:index',
            ],
        ]);
        if (empty($link)) {
            return;
        }
        $Links->Behaviors->attach('Tree', [
            'scope' => [
                'Link.menu_id' => $link['Link']['menu_id'],
            ],
        ]);
        if (isset($link['Link']['id'])) {
            $Links->delete($link['Link']['id']);
        }*/
    }

}
