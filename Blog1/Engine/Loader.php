<?php

namespace TestProject\Engine;
use TestProject\Engine\Pattern\Singleton;
require_once _DIR_ . '/Pattern/Base.trait.php';
require_once _DIR_ . 'Pattern/Singleton.trait.php';
class Loader
{
    use Simgleton;
    public function init()
    {
        spl_autoload_register(array(_CLASS_, '_loadClasses'));
    }
    private function _loadClasses($sClass)
    {
    $sClass = str_replace(array(_NAMESPACE_, 'TestProject', '\\'), '/', $sClass);
            if (is_file(_DIR_ . '/' . $sClass . '.php')) {
            require_once _DIR_ . '/' . $sClass . '.php';
            }
            if (is_file(ROOT_PATH . $sClass . '.php')){
            require_once ROOT_PATH . $sClass . '.php';
            }
            
        }
    }
