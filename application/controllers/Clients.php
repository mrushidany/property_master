<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/1/2018
 * Time: 8:21 AM
 */

class Clients extends MY_Controller{


    protected  function middleware(){
        return array('system_auth');
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('client');
    }

    public function clients_list(){

        if($this->input->post('length')){
            $params = dataTable_post_params();
            echo $this->client->clients_list($params['limit'],$params['start'],$params['keyword'],$params['order']);
        }else{
            $data ['title'] = 'Clients';
            $this->load->view('clients/clients_list',$data);
        }
    }

    public function save_client()
    {
        $client = new Client();
        $client->load($this->input->post('client_id'));
        $client->client_name = $this->input->post('client_name');
        $client->phone = $this->input->post('phone');
        $client->alternative_phone = $this->input->post('alternative_phone');
        $client->email = $this->input->post('email');
        $client->address = $this->input->post('address');
        $client->created_by = $this->session->userdata('staff_id');
        $client->save();
    }

    public function delete_client()
    {

        $client = new Client();
        if ($client->load($this->input->post('client_id'))) {
            $client->delete();
        }
    }

    public function clients_profile($client_id)
    {
        $client = new Client();
        $client = $this->client->get(1,0,array('id'=>$client_id));
        $data = ['client'=>array_shift($client)];
        $this->load->view('clients/clients_profile/profile',$data);
    }

	public function clients_profile_list()
	{
//		if($this->input->post('length')){
//			$params = dataTable_post_params();
//			echo $this->client->clients_profile_list($this->input->post('client_id'),$params['limit'],$params['start'],$params['keyword'],$params['order']);
			$this->load->view('clients/clients_profile/profile');
    }


}
