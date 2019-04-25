<?php

?>

<span class="pull-right">

<button type_id="<?= $type->{$type::DB_TABLE_PK} ?>" class="btn btn-success btn-xs" data-target="<?='#edit_type'.$type->{$type::DB_TABLE_PK} ?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>
    Edit
</button>

    <!-- The Modal -->
<div class="modal" id="<?='edit_type'.$type->{$type::DB_TABLE_PK} ?>">
    <?php
    $data = array(
        'type' => $type
        );
    $this->load->view('properties/properties_type/properties_type_form',$data);
    ?>
</div>

<button type_id="<?= $type->{$type::DB_TABLE_PK}?>" type_name="<?= $type->type_name ?>" class="delete_property_type btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>
    Delete
</button>
</span>
