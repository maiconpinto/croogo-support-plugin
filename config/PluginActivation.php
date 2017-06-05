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
        $Acos = TableRegistry::get('Croogo/Acl.Acos');
        $Acos->addAco('Support/Admin/Support/index'); // ExampleController::admin_index()
        $Acos->addAco('Support/Support/index', ['registered', 'public']); // ExampleController::index()

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
        $Acos = TableRegistry::get('Croogo/Acl.Acos');
        $Acos->removeAco('Support'); // Plugin ACOs and it's actions will be removed

    }

}
