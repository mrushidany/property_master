<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:36 PM
 */
class Contract_receipt extends MY_Model{

    const DB_TABLE = 'contract_receipts';
    const DB_TABLE_PK = 'id';

    public $contract_id;
    public $receipt_id;

}