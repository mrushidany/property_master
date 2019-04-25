<?php

?>

<span class="pull-right">

<button property_id="<?= $property->{$property::DB_TABLE_PK} ?>" class="btn btn-success btn-xs" data-target="<?='#edit_property'.$property->{$property::DB_TABLE_PK} ?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>
    Edit
</button>

    <!-- The Modal -->
<div class="modal" id="<?='edit_property'.$property->{$property::DB_TABLE_PK} ?>">
    <?php
    $data = array(
        'property' => $property,
        'property_type_options' => $property_type_options,
        'selected_type' => $selected_type,
        'selected_property'=> $selected_property,
        'parent'=> $parent

    );
    $this->load->view('properties/properties_form',$data);
    ?>
</div>

<button property_id="<?= $property->{$property::DB_TABLE_PK}?>" property_name="<?= $property->property_name ?>" class="delete_property btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>
    Delete
</button>
</span>
