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
            <div class="body" style="height: 600px;">
                <div class="col-md-12">
                    <h3>Property Type List</h3>
                  <header>
                    <div class="toolbar">
                        <button data-toggle="modal" href="#new_property_type" class="btn btn-default btn-xs pull-right">
                            <i class="glyphicon glyphicon-plus"></i> New Property Type
                        </button>
                        <div id="new_property_type" class="modal fade" role="dialog">
                            <?php
                            $this->load->view('properties/properties_type/properties_type_form');
                            ?>
                        </div>
                    </div>
                  </header>
                    <!--Begin Datatables-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div id="collapse4" class="body">
                                    <table id="property_type_list" class="table table-bordered table-responsive table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Property Name</th>
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

