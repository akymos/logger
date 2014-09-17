<?php

namespace Akymos\Logger\Utils;

/**
 * @package   logger
 * @author    Matteo Cusinato <djakymos@gmail.com>
 * @copyright 2014 Matteo Cusinato <djakymos@gmail.com>
 * @link      http://github.com/akymos/logger
 * @since     Class available since Release 1.0.0
 */
class Utils {

    public static function ToString($var){
        ob_start();
        var_dump($var);
        $result = ob_get_clean();
        return htmlentities($result);
    }

} 