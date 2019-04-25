<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/5/2018
 * Time: 4:11 AM
 */
class Account extends MY_Model{

    const DB_TABLE = 'accounts';
    const DB_TABLE_PK = 'id';

    public $account_name;
    public $account_group_id;
    public $opening_balance;
    public $description;


}