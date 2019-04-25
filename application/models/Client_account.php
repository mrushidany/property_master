<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 11:53 AM
 */

class Client_account extends MY_Model{

    const DB_TABLE = 'client_accounts';
    const DB_TABLE_PK = 'id';

    public $client_id;
    public $account_id;
}