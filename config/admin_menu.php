<?php

namespace Supoprt\Config;

use Croogo\Core\Nav;

Nav::add('sidebar', 'support', [
  'icon' => 'cog',
  'title' => 'Support',
  'url' => [
    'prefix' => 'admin',
    'plugin' => 'Support',
    'controller' => 'Support',
    'action' => 'index',
  ],
  'weight' => 100,
]);