<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/6/2018
 * Time: 12:38 PM
 */
class Contract extends MY_Model{

    const DB_TABLE = 'contracts';
    const DB_TABLE_PK = 'id';

    public $contract_number;
    public $client_id;
    public $start_date;
    public $end_date;
    public $currency_id;
    public $contract_sum;
    public $description;
    public $status;
    public $created_by;

    public function contracts_list($limit,$start,$keyword,$order){

        $order_string = dataTable_order_string(['client_id','contract_number','start_date','end_date','currency_id','contract_sum','description','status'],$order,'client_id');
        $rows = [];
        $where = '';
          if($keyword != ''){
                $where = 'client_id LIKE "%'.$keyword.'%" OR contract_number LIKE "%'.$keyword.'%" OR start_date LIKE "%'.$keyword.'%" OR end_date LIKE "%'.$keyword.'%"
             OR currency_id LIKE "%'.$keyword.'%" OR contract_sum LIKE "%'.$keyword.'%" OR description LIKE "%'.$keyword.'%" OR status LIKE "%'.$keyword.'%"';
        }

                 $contracts = new self();
                 $contracts = $this->get($limit,$start,$where,$order_string);

        $this->load->model('client');
        $this->load->model('currency');

        foreach ($contracts as $contract){
            $data = array(
                'contract'=>$contract,
                'client_options'=> $this->client->client_options(),
                'currency_options'=> $this->currency->currency_options(),
                'selected_client' => $this->contract_client_name($contract->client_id),
                'selected_currency' => $this->contract_currency_name($contract->currency_id)
            );

            $rows []=array(
                $this->contract_client_name($contract->client_id),
                $contract->contract_number,
                $contract->start_date,
                $contract->end_date,
                $this->contract_currency($contract->currency_id),
                $contract->contract_sum,
                $contract->description,
                $this->load->view('contracts/contracts_list_action',$data,true)
            );
        }
        $json = array(
            'data'=> $rows,
            'recordsFiltered'=> $this->count_rows($where),
            'recordsTotal'=> $this->count_rows()
        );

        return json_encode($json);
    }

    public function contract_client_name($client_id){
        $this->load->model('client');
        $name = new Client();
        $name = $this->client->get(1,0,array('id'=>$client_id));

        return array_shift($name)->client_name;
    }

    public function contract_currency_name($currency_id){
        $this->load->model('currency');
        $name = new Currency();
        $name = $this->currency->get(1,0,array('id'=>$currency_id));

        return array_shift($name)->name;
    }

    public function contract_currency($currency_id){
        $currency = new Currency();
        $currency = $this->currency->get(1,0,array('id'=>$currency_id));

        return array_shift($currency)->name;

    }
}