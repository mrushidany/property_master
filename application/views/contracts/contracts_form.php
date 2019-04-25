<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/1/2018
 * Time: 2:45 PM
**/
$edit = isset($contract);
$clientEdit = isset($selected_client);
$currencyEdit = isset($selected_currency);
?>
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align: center">New Contract</h4>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div id="select" class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="client"><span class="glyphicon glyphicon-user"></span> &nbsp Client</label>
                        <?php
                        echo form_dropdown('client_id',$client_options,
                            $clientEdit ? $contract->client_id : '',
                            'class="form-control searchable"'
                        );
                        ?>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="contract_number">Contract Number</label>
                        <input id="contract_number" type="text" class="form-control" name="contract_number" value="<?= $edit ? $contract->contract_number : '' ?>">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="contract_sum">Contract Sum</label>
                        <input id="contract_sum" type="text" class="form-control" name="contract_sum" value="<?= $edit ? $contract->contract_sum : '' ?>" >
                    </div>
                    <div id="select" class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="currency"><span class="glyphicon glyphicon-euro"></span> &nbsp Currency </label>
                        <?php
                        echo form_dropdown('currency_id',$currency_options,
                            $currencyEdit ? $contract->currency_id : '',
                        'class="form-control searchable"'
                        );
                        ?>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="start_date"><span class="glyphicon glyphicon-calendar"></span> &nbsp Start Date</label>
                        <input id="start_date" class="form-control datepicker" name="start_date" value="<?= $edit ? $contract->start_date : '' ?>" >
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label for="end_date"><span class="glyphicon glyphicon-calendar"></span> &nbsp End Date </label>
                        <input id="end_date" class="form-control" name="end_date" value="<?= $edit ? $contract->end_date : '' ?>" >
                    </div>
                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                        <label for="description">Description </label>
                        <textarea id="description" rows="2" class="form-control" name="description" ><?= $edit ? $contract->description : '' ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" initialized="false" type="button" class="btn btn-default btn-sm save_contract">Save</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
