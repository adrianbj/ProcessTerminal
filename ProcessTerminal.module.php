<?php

class ProcessTerminal extends Process implements Module {
    public static function getModuleInfo() {
        return array(
            'title' => __('Process Terminal', __FILE__),
            'summary' => __('Terminal shell.', __FILE__),
            'author' => 'Adrian Jones',
            'href' => 'https://processwire.com/talk/topic/12208-tracy-debugger/',
            'version' => '1.0.0',
            'autoload' => false,
            'singular' => true,
            'icon' => 'terminal',
            'page' => array(
                'name' => 'terminal',
                'parent' => 'setup',
                'title' => 'Terminal'
            )
        );
    }


    public function ___execute() {

        error_reporting(0);
        ini_set('display_errors', 0);

        require_once __DIR__ . '/shell.php'/*NoCompile*/;
        exit;
    }

}
