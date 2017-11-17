<?php

namespace Kanboard\Plugin\Csp;

use Kanboard\Core\Translator;
use Kanboard\Core\Plugin\Base;


class Plugin extends Base
{
    public function initialize() {

        $this->setContentSecurityPolicy(array('default-src' => "* 'self' 'unsafe-inline' 'unsafe-eval'"));
        // $this->setContentSecurityPolicy(array('script-src' => "* 'self' 'unsafe-inline' 'unsafe-eval'"));
    }

    public function onStartup() {

    }

    public function getPluginName() {
        return 'Csp';
    }

    public function getPluginDescription() {
        return t('This plugin add CSP changes.');
    }

    public function getPluginAuthor() {
        return 'Yannick Herzog';
    }

    public function getPluginVersion() {
        return '0.1.0';
    }

    public function getPluginHomepage() {
        return 'https://github.com/siryan2/kanboard-plugin-csp';
    }
}
