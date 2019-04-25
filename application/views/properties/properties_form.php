<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 3:48 PM
 */
$edit = isset($property);
$typeEdit = isset($selected_type);
$propertyEdit = isset($selected_property);

?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align: center">New Property</h4>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="property_name">Property name</label>
                        <input id="property_name" type="text" class="form-control" name="property_name" placeholder="Property name" value="<?= $edit ? $property->property_name : '' ?>">
                    </div>
                    <div id="select" class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="parent_id">Parent Property</label><br>
                        <?php
                          echo form_dropdown('parent_id', $parent,
                                     $propertyEdit ? $property->{$property::DB_TABLE_PK} : '',
                            'class="form-control searchable"'
                        )
                        ?>
                    </div>
                    <div id="select" class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="property_type">Property Type</label><br>
                        <?php
                          echo form_dropdown('property_type_id',$property_type_options,
                               $typeEdit ? $property->property_type_id : '',
                              'class="form-control searchable"'
                          );
                        ?>

                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="property_code">Property Code</label>
                        <input id="property_code" type="text" class="form-control" name="property_code" placeholder="Property Code" value="<?= $edit ? $property->property_code: '' ?>">
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="description"></span> Description</label>
                        <textarea name="description" id="description" rows="2" class="form-control"  placeholder="Description"><?= $edit ? $property->description: '' ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" initialized="false" property_id="<?= $edit ? $property->{$property::DB_TABLE_PK}:''?>" type="button" class="btn btn-default btn-sm save_property">Save</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
