<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/1/2018
 * Time: 8:27 AM
 */
$this->load->view('includes/header');
?>
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="body" style="height: 700px;">
                <div class="col-md-12">
                    <h3><?=$title ?></h3>
                    <div class="row">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?= base_url('app') ?> "><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                            <li>Clients List</li>
                        </ol>
                    </div>
                     <div class="toolbar pull-right">
                             <button data-toggle="modal" href="#new_client" class="btn btn-default btn-xs pull-right">
                                 <i class="glyphicon glyphicon-plus"></i> New Client
                             </button>
                         <div id="new_client" class="modal fade" role="dialog">
                             <?php

                             $this->load->view('clients/clients_form');
                             ?>
                         </div>
                     </div>
                    <!--Begin Datatables-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div id="collapse4" class="body">
                                    <table id="client_list" class="table table-bordered table-responsive table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Phone</th>
                                            <th>Alternative Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
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
                    <!-- /.row -->
                    <!--End Datatables-->
                </div>

            </div>

        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->





<?php $this->load->view('includes/footer');
