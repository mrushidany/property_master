<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/1/2018
 * Time: 2:45 PM
 */
$edit = isset($client);

?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align: center">New Client</h4>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
              <div class="row">
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <label for="client_name"><span class="glyphicon glyphicon-user"></span>Client name</label>
                      <input id="client_name" type="text" class="form-control" name="client_name" placeholder="Client name" value="<?= $edit ? $client->client_name:'' ?>" >
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <label for="email"><span class="glyphicon glyphicon-envelope"></span> E-mail</label>
                      <input id="email" type="text" class="form-control" name="email" placeholder="E-mail"value="<?= $edit ? $client->email:'' ?>">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <label for="phone"><span class="glyphicon glyphicon-phone"></span>Phone</label>
                      <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone number" value="<?= $edit ? $client->phone:'' ?>">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                      <label for="alternative_phone"><span class="glyphicon glyphicon-phone"></span> Alternative Phone</label>
                      <input id="phone" type="text" class="form-control" name="alternative_phone" placeholder="Alternative Phone number" value="<?= $edit ? $client->alternative_phone:'' ?>">
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                      <label for="address"><span class="glyphicon glyphicon-home"></span> Address</label>
                      <textarea name="address" id="address" rows="2" class="form-control"  placeholder="Address"><?= $edit ? $client->address:'' ?></textarea>
                  </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" initialized="false" client_id="<?= $edit ? $client->{$client::DB_TABLE_PK} : '' ?>" type="button" class="btn btn-default btn-sm save_client">Save</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
