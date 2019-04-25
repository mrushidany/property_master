<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 1/8/2019
 * Time: 10:21 AM
 */
class Contracts extends MY_Controller{

    protected function middleware()
    {
        return array('system_auth'); // TODO: Change the autogenerated stub
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contract');
    }
    
    public function contracts_list(){
        if($this->input->post('length')){
            $params = dataTable_post_params();
            echo $this->contract->contracts_list($params['limit'],$params['start'],$params['keyword'],$params['order']);
        }else{
            $this->load->model('client');
            $this->load->model('currency');
            $data = array(
                'client_options'=>$this->client->client_options(),
                'currency_options'=>$this->currency->currency_options(),
                'title'=>'Contracts'
            );
            $this->load->view('contracts/contracts_list',$data);
        }
    }

    public function save_contract(){

        $contract = new Contract();
        $contract->contract_number = $this->input->post('contract_number');
        $contract->client_id = $this->input->post('client_id');
        $contract->start_date = $this->input->post('start_date');
        $contract->end_date = $this->input->post('end_date');
        $contract->currency_id = $this->input->post('currency_id');
        $contract->contract_sum = $this->input->post('contract_sum');
        $contract->description = $this->input->post('description');
        $contract->status = 'active';
        $contract->created_by = $this->session->userdata('staff_id');
        $contract->save();

    }

    public function delete_contract(){
        $contract = new Contract();
        if($contract->load($this->input->post('contract_id'))){
            $contract->delete();
        }
    }



}