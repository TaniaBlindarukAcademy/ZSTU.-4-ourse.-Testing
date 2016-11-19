<?php

/**
 * Created by tania.
 * Date: 19.11.16
 * Time: 12:13
 * @corporation Maksi
 */

require_once 'src/Address/Model/Address.php';

class Address_Model_Singleton
{

    static private $model = null;

    protected function __construct()
    {
    }

    static public function getModel()
    {
        if (is_null(static::$model)) {
            static::$model = new Address_Model_Address();
        }
        return static::$model;
    }
}