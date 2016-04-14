<?php
/**
 * Created by PhpStorm.
 * User: Boss
 * Date: 13/04/2016
 * Time: 23:15
 */

namespace Model\Base;


/**
 * Class Main
 * @package Model\Base
 */
class Main
{
    public $db;

    /**
     * Main constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->$db = $db;
    }
}