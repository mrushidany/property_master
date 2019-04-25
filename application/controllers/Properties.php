<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 2:46 PM
 */
class Properties extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('property');
    }

    protected function middleware()
    {
        return array('system_auth'); // TODO: Change the autogenerated stub
    }

    public function properties_list(){
        if($this->input->post('length')){
            $params = dataTable_post_params();
            echo $this->property->properties_list($params['limit'],$params['start'],$params['keyword'],$params['order']);
        }else{
            $this->load->model('property_type');
            $data= array(
                'property_type_options'=> $this->property_type->property_type_options(),
                'title'=> 'Properties',
                'parent'=>$this->property->parent_options()
            );
            $this->load->view('properties/properties_list',$data);
        }

    }

    public function save_property(){

        $property = new Property();
        if($this->input->post('parent_id') == '') {
            $property->parent_id = null;
        }else{
            $property->parent_id = $this->input->post('parent_id');
        }
        $property->load($this->input->post('property_id'));
        $property->property_type_id = $this->input->post('property_type_id');
        $property->property_name = $this->input->post('property_name');
        $property->property_code = $this->input->post('property_code');
        $property->description = $this->input->post('description');
        $property->created_by = $this->session->userdata('staff_id');
        $property->save();
        }

    public function delete_property(){
        $property = new Property();
        if($property->load($this->input->post('property_id'))){
            $property->delete();
        }

    }
    
    public function properties_type_list(){
        $this->load->model('property_type');

        if($this->input->post('length')){
           $params = dataTable_post_params();
                 echo $this->property_type->properties_type_list($params['limit'],$params['start'],$params['keyword'],$params['order']);
        }
        else{
            $this->load->view('properties/properties_type/properties_type_list');
        }
    }

    public function save_property_type(){
        $this->load->model('property_type');
        $type = new Property_type();
        $type->load($this->input->post('type_id'));
        $type->type_name = $this->input->post('type_name');
        $type->description = $this->input->post('description');
        $type->created_by = $this->session->userdata('staff_id');
        $type->save();
    }

    public function delete_property_type()
    {
        $this->load->model('property_type');
        $type = new Property_type();
        if($type->load($this->input->post('type_id'))){
            $type->delete();
        }
    }

    public function properties_profile($property_id)
    {
        $property = new Property();
        $property = $this->property->get(1,0,array('id'=>$property_id));

        $data = array(
        'property'=>array_shift($property),
        'properties'=> $this->property->get()
        );
        $this->load->view('properties/properties_profile/profile',$data);
    }




}
