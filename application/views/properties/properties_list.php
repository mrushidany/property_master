<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 12/2/2018
 * Time: 2:57 PM
 */
$this->load->view('includes/header');
?>
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="body" style="height: 700px;">
                <div class="col-md-12">
                    <h3><?=$title ?></h3>
                    <div class="row" style="text-">
                        <ol class="breadcrumb pull-right">
                            <li><a href="<?= base_url('app') ?> "><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                            <li>Properties List</li>
                        </ol>
                    </div>
                    <header>
                        <div class="toolbar">
                            <button data-toggle="modal" href="#new_property" class="btn btn-default btn-xs pull-right">
                                  <i class="glyphicon glyphicon-plus"></i> New Property
                             </button>
                             <div id="new_property" class="modal fade" role="dialog">
                                  <?php
                                    $data = array(
                                    'property_type_options'=>$property_type_options,
                                     'parent'=> $parent
                                         );
                                    $this->load->view('properties/properties_form',$data);
                                    ?>
                             </div>
                        </div>
                    </header>
                    <!--Begin Datatables-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div id="collapse4" class="body">
                                    <table id="property_list" class="table table-bordered table-responsive table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Property Name</th>
                                            <th>Property Type</th>
                                            <th>Property Code</th>
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

