<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 11/24/2018
 * Time: 6:35 PM
 */
class User extends MY_Model{

    const DB_TABLE = 'users';
    const DB_TABLE_PK = 'id';

    public $username;
    public $password;
    public $staff_id;
    public $created_by;
}