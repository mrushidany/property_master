<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:47 PM
 */
class Receipt extends MY_Model{

    const DB_TABLE = 'receipts';
    const DB_TABLE_PK = 'id';

    public $debit_account_id;
    public $credit_account_id;
    public $receipt_date;
    public $reference;
    public $currency_id;
    public $amount_paid;
    public $exchange_rate;
    public $description;
    public $created_by;
}