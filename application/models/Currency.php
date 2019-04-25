<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:41 PM
 */
class Currency extends MY_Model{

    const DB_TABLE = 'currencies';
    const DB_TABLE_PK = 'id';

    public $name;
    public $symbol;
    public $created_by;

    public function currency_options(){
        $currencies = new self();
        $currencies = $this->get();

        $options = array();

        foreach($currencies as $currency){
            $options[$currency->id] = $currency->name;
        }

        return $options;
    }
}