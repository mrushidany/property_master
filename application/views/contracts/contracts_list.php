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
                            <li>Contracts List</li>
                        </ol>
                    </div>
                       <header>
                             <div class="toolbar">
                              <button data-toggle="modal" href="#new_contract" class="btn btn-default btn-xs pull-right">
                                  <i class="glyphicon glyphicon-plus"></i> New Contract
                              </button>
                                 <div id="new_contract" class="modal fade" role="dialog">
                                      <?php
                                          $data = array(
                                            'client_options'=> $client_options,
                                            'currency_options'=> $currency_options
                                              );
                                         $this->load->view('contracts/contracts_form',$data);
                                        ?>
                                 </div>
                             </div>
                       </header>
                    <!--Begin Datatables-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div id="collapse4" class="body">
                                    <table id="contract_list" class="table table-bordered table-responsive table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Contract Number</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Currency</th>
                                            <th>Contract Sum</th>
                                            <th>Description</th>
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
