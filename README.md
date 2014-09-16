#logger

**logger** is a simple PHP logger

## Installation

Add a dependency on `akymos/logger` to your `composer.json` file.

    {
        "require": {
            "akymos/logger": "dev-master"
        }
    }

##Usage
    $log = new Log($enabled, $isHtml);

* $enabled  bool  true, enable logging
* $isHtml   bool  true, output is HTML


    $log->i($tag,$message); //INFO
    $log->d($tag,$message); //DEBUG
    $log->w($tag,$message); //WARNING
    $log->e($tag,$message); //ERROR
    $log->v($tag,$message); //VERBOSE

##Example

    <?php
        use Akymos\Log;
        $log = new Log(true, false);
        $log->e("example_tag","message_example");
    ?>

    OUTPUT:
    error -> 2014-09-16 10:25:33.080 [test.php:4] example_tag: message_example
