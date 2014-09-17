<?php

namespace Akymos\Logger\Common;

/**
 * @package   logger
 * @author    Matteo Cusinato <djakymos@gmail.com>
 * @copyright 2014 Matteo Cusinato <djakymos@gmail.com>
 * @link      http://github.com/akymos/logger
 * @since     Class available since Release 1.0.0
 */
class Logger {

    private $_enabled = false;
    private $_isHtml = true;

    public function __construct($enabled, $isHtml){
        $this->_enabled = $enabled;
        $this->_isHtml = $isHtml;
    }

    public function debug($tag, $message){
        $this->_showMessage($tag, $message, LogLevel::$DEBUG);
    }

    public function info($tag, $message){
        $this->_showMessage($tag, $message, LogLevel::$INFO);
    }

    public function verbose($tag, $message){
        $this->_showMessage($tag, $message, LogLevel::$VERBOSE);
    }

    public function warning($tag, $message){
        $this->_showMessage($tag, $message, LogLevel::$WARNING);
    }

    public function error($tag, $message){
        $this->_showMessage($tag, $message, LogLevel::$ERROR);
    }

    private function _showMessage($tag, $message, $level){
        $print = "";
        if(!$this->_enabled){
            return;
        }
        $bt = $this->_getBacktrace();
        $t = explode(" ",microtime());
        if($this->_isHtml){
            $print .= "<p style='color:#333;margin:0;padding:5px;" . $level['style'] . "'>";
        }else{
            $print .= $level['type'] . "&nbsp;->&nbsp;";
        }
        $print .= date("Y-m-d H:i:s",$t[1]) . substr((string)$t[0],1,4) . "&nbsp;";
        $print .= "[" . $bt['fileName'] . ":" . $bt['line'] . "]&nbsp;";
        $print .= $tag . ":&nbsp;" . $message;
        if($this->_isHtml){
            $print .= "</p>";
        }else{
            $print .= "\n";
        }
        echo $print;
    }

    private function _getBacktrace(){
        $bt = debug_backtrace();
        $fileArray = explode(DIRECTORY_SEPARATOR, $bt[3]['file']);
        return array(
            'fileName' => $fileArray[(count($fileArray)-1)],
            'line' => $bt[3]['line']
        );
    }

} 