<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 2:53 PM
 */
class Property_type extends MY_Model{

    const DB_TABLE = 'property_types';
    const DB_TABLE_PK = 'id';

    public $type_name;
    public $description;
    public $created_by;

    public function property_type_options(){
        $types = new self();
        $types = $this->get();
         $options = array();

         foreach($types as $type){
             $options[$type->id] = $type->type_name;
         }
         return $options;

    }

    public function properties_type_list($limit,$start,$keyword,$order)
    {
        $rows = [];
        $records_total = $this->count_rows();
        $where = 'type_name LIKE "%'.$keyword.'%" OR description LIKE "%'.$keyword.'%"';
        $order_string = dataTable_order_string(['type_name','description'],$order,'type_name');
        $types = new self();
        $types = $this->get($limit,$start,$where,$order_string);
        $records_filtered = $this->count_rows($where);

        foreach($types as $type){
            $data = array(
                'type' => $type
            );
            $rows[] = array(
                $type->type_name,
                $type->description,
                $this->load->view('properties/properties_type/properties_type_list_action',$data,true)
            );
        }

        $json = array(
            'data' => $rows,
            'recordsFiltered' => $records_filtered,
            'recordsTotal' => $records_total
        );

        return json_encode($json);
    }
}