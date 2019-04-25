<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 3:48 PM
 */
$edit = isset($type);
?>
<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align: center">New Property Type</h4>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="property_name">Type name</label>
                        <input id="property_name" type="text" class="form-control" name="type_name" placeholder="Property Type name" value="<?= $edit? $type->type_name:'' ?> ">
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="description"></span> Description</label>
                        <textarea name="description" id="description" rows="2" class="form-control"  placeholder="Description"><?=$edit? $type->description:'' ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" initialized="false" type="button" class="btn btn-default btn-sm save_property_type">Save</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
