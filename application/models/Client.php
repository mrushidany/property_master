<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/1/2018
 * Time: 8:22 AM
 */

class Client extends MY_Model{

    const DB_TABLE = 'clients';
    const DB_TABLE_PK = 'id';

    public $client_name;
    public $phone;
    public $alternative_phone;
    public $email;
    public $address;
    public $created_by;


    public function clients_list($limit,$start,$keyword,$order){
        $this->load->model('account');
        
       $row = array();

       $order_string = dataTable_order_string(['client_name','phone','alternative_phone','email','address'],$order,'client_name');
       $where = 'client_name LIKE "%'.$keyword.'%" OR phone LIKE "%'.$keyword.'%" OR alternative_phone LIKE "%'.$keyword.'%"
         OR email LIKE "%'.$keyword.'%" OR address LIKE "%'.$keyword.'%"';

       $clients = $this->client->get($limit,$start,$where,$order_string);


        foreach($clients as $client){
           $account_details = $this->account->get(1,0,array('account_name'=>$client->client_name));
            $found_account_details = array_shift($account_details);
           $data = array(
               'client'=> $client
           );

           $row[]= array(
            anchor(base_url('clients/clients_profile/').$client->{$client::DB_TABLE_PK},$client->client_name),
            $client->phone,
            $client->alternative_phone,
            $client->email,
            $client->address,
            $this->load->view('clients/clients_list_action',$data,true)
           );
       }

       $json = array(
           'data'=> $row,
           'recordsFiltered'=> $this->client->count_rows($where),
           'recordsTotal'=> $this->client->count_rows()
       );
      return json_encode($json);
    }

    public function client_options(){

        $clients = new self();
        $clients = $this->get();

        $options = array();

        foreach($clients as $client){
            $options[$client->id] = $client->client_name;
        }
        return $options;

    }

    public function latest_client_id($client_id){
        $client = new self();
        $client = $this->get(1,0,array('id'=>$client_id),'id DESC');
        return array_shift($client)->id;
    }

    public function clients_profile_list($client_id,$limit,$start,$keyword,$order){

    }

}
