<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:30 PM
 */
class Account_group extends MY_Model{

    const DB_TABLE = 'account_groups';
    const DB_TABLE_PK = 'id';

    public $group_name;
    public $description;
    public $parent_id;
    public $group_nature_id;
    public $level;



}