<?php

namespace Akymos\Common;

/**
 * @package   logger
 * @author    Matteo Cusinato <djakymos@gmail.com>
 * @copyright 2014 Matteo Cusinato <djakymos@gmail.com>
 * @link      http://github.com/akymos/logger
 * @since     Class available since Release 1.0.0
 */
class LogLevel {
    public static $DEBUG = array('type' => 'debug', 'style' => 'background-color:#d9edf7;');
    public static $INFO = array('type' => 'info', 'style' => 'background-color:#dff0d8;');
    public static $VERBOSE = array('type' => 'verbose', 'style' => '');
    public static $WARNING = array('type' => 'warning', 'style' => 'background-color:#fcf8e3;');
    public static $ERROR = array('type' => 'error', 'style' => 'background-color:#f2dede;');
} 