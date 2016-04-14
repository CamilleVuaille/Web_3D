<?php
/**
 * Created by PhpStorm.
 * User: Boss
 * Date: 13/04/2016
 * Time: 23:14
 */

namespace Model\User;


use Model\Base\Main;

/**
 * Class User
 * @package Model\User
 */
class User extends Main
{
    public function Get_user($id){
        $sql = 'SELECT * FROM `user` WHERE `id` = '.$id.'';
        $user = $app['db']->fetchAssoc($sql, array((int) $id));
    }

}