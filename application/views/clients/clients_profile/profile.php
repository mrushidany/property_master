<?php

$this->load->view('includes/header');
$client_name = ucfirst($client->client_name);
?>
<div class="outer">
    <div class="inner bg-light lter">
        <div class="body" style="height: 700px;">
            <div class="col-md-12">
                <h2><?= $client_name ?></h2>
                <div class="row">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?= base_url('app') ?> "><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                        <li><a href="<?= base_url('clients/clients_list')?> ">Clients</a></li>
                        <li>Clients Profile</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#client">Client</a></li>
                            <li><a data-toggle="tab" href="#contracts">Contracts</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="client" class="tab-pane in active">
                                <div class="col-md-10 table-responsive">
                                    <div class="box">
                                        <div class="body">
                                            <table id="clients_profile_list" client_id="<?= $client->{$client::DB_TABLE_PK} ?>" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Client Name</th>
                                                    <th>Address</th>
                                                    <th>Property Type</th>
                                                    <th>Registration Date</th>
                                                    <th>Contract</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
										</div>
									</div>
								</div>
							</div>
                            <div id="contracts" class="tab-pane fade">
                                <div class="col-xs-12 table-responsive ">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->

    <?php $this->load->view('includes/footer');?>
