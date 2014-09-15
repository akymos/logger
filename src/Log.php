<?php

namespace Akymos;

use Akymos\Common\Logger;

/**
 * @package   logger
 * @author    Matteo Cusinato <djakymos@gmail.com>
 * @copyright 2014 Matteo Cusinato <djakymos@gmail.com>
 * @link      http://github.com/akymos/logger
 * @since     Class available since Release 1.0.0
 */
class Log{

    private $_l;

    public function __construct($enabled = true, $isHtml = true){
        $this->_l = new Logger($enabled, $isHtml);
    }

    public function d($tag = "", $message = ""){
        $this->_l->debug($tag, $message);
    }

    public function i($tag = "", $message = ""){
        $this->_l->info($tag, $message);
    }

    public function v($tag = "", $message = ""){
        $this->_l->verbose($tag, $message);
    }

    public function w($tag = "", $message = ""){
        $this->_l->warning($tag, $message);
    }

    public function e($tag = "", $message = ""){
        $this->_l->error($tag, $message);
    }

}