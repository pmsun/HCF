<?php
/**
 * Author: pmsun
 */
class Hcf {

    //全局对象
    private static $hcf;

    //支持的对象
    public $router;

    public function __construct() {
    }

    static public function getInstance() {
        if (!self::$hcf) {
            self::$hcf = new Hcf;
        }
        return self::$hcf;
    }

    public function run() {
        echo "Hello HCF";
    }
}