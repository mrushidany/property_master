<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:33 PM
 */

class Contract_property extends MY_Model{

    const DB_TABLE = 'contract_properties';
    const DB_TABLE_PK = 'id';

    public $contract_id;
    public $property_id;
}