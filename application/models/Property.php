<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 2:49 PM
 */
class Property extends MY_Model{

    const DB_TABLE = 'properties';
    const DB_TABLE_PK = 'id';

    public $parent_id;
    public $property_type_id;
    public $property_name;
    public $property_code;
    public $description;
    public $created_by;


    public function properties_list($limit,$start,$keyword,$order)
    {
        $this->load->model('property_type');
        $property = new self();
        $property = $this->get(0,0);

        $records_total = $this->count_rows();
        $rows = [];
        $order_string = dataTable_order_string(['property_name','property_types.type_name','property_code','description'],$order,'property_name');
        $where = '';
        if($keyword !=''){
            $where = 'property_name LIKE "%'.$keyword.'%" OR property_types.type_name LIKE "%'.$keyword.'%" OR property_code LIKE "%'.$keyword.'%" OR properties.description LIKE "%'.$keyword.'%"';
        }

        $sql = 'SELECT SQL_CALC_FOUND_ROWS properties.id,property_name,property_types.type_name,property_code,properties.description FROM properties
               LEFT JOIN property_types ON properties.property_type_id = property_types.id
               '.$where.' ORDER BY '.$order_string.' LIMIT '.$limit.' OFFSET '.$start;

        $query = $this->db->query($sql);
        $results = $query->result();

        foreach ($results as $result){
            $data = array(
                'property'=> array_shift($property),
                'property_type_options'=> $this->property_type->property_type_options(),
                'selected_type' => $result->type_name,
                'selected_property'=> $this->selected_property($result->id),
                'parent'=>$this->property->parent_options()

            );
            $rows[]=array(
                anchor(base_url('properties/properties_profile/'.$result->id), $result->property_name),
                $result->type_name,
                $result->property_code,
                $result->description,
                $this->load->view('properties/properties_list_action',$data,true)
            );
        }
        $json = array(
            'data' => $rows,
            'recordsFiltered' => $this->count_rows($where),
            'recordsTotal' => $records_total
        );
        return json_encode($json);
    }

    public function parent_options(){
        $parents = new self();
        $parents = $this->get();

        $options[''] = "&nbsp;";
        foreach($parents as $parent){
            $options[$parent->id] = $parent->property_name;
        }

        return $options;
    }

    public function selected_property($property_id){
        $property = new self();
        $property = $this->get(1,0,array('id'=>$property_id));

        return array_shift($property)->property_name;
    }

}