<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:43 PM
 */
class Exchange_rate_update extends MY_Model{

    const DB_TABLE = 'exchange_rate_updates';
    const DB_TABLE_PK = 'id';

    public $update_date;
    public $currency_id;
    public $exchange_rate;
    public $updater_id;
}