<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 3:48 PM
 */
?>


<div class="modal-dialog modal-md">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align: center">New Property</h4>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div id="select" class="form-group col-md-4 col-sm-6 col-xs-12">
                        <label for="client">Client</label><br>
                        <?php
                        echo form_dropdown('client_id', $client,
                            '',
                            'class="form-control searchable"');
                        ?>
                    </div>
                    <div id="select" class="form-group col-md-4 col-sm-6 col-xs-12">
                        <label for="property_type">Property Type</label><br>
                        <?php
                        echo form_dropdown('property_type_id', $type,
                            '',
                            'class="form-control searchable"');
                        ?>
                    </div>
                    <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        <label for="property_code">Property Code</label>
                        <input id="property_code" type="text" class="form-control" name="property_code" placeholder="Property Code" value="">
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="description"></span> Description</label>
                        <textarea name="description" id="description" rows="2" class="form-control"  placeholder="Description"></textarea>
                    </div>
                </div>
            </div>
            <h4 class="modal-title" style="text-align: center">Client Contract Details</h4>
            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="opening_balance">Opening Balance</label>
                        <input name="opening_balance" id="opening_balance" class="form-control" value="">
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="2" class="form-control" placeholder=""></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" initialized="false" type="button" class="btn btn-default btn-sm save_property_client">Save</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
