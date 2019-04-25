<?php

$this->load->view('includes/header');
$property_name = ucfirst($property->property_name);
?>
    <div class="outer">
        <div class="inner bg-light lter">
            <div class="body" style="height: 700px;">
                <div class="col-md-12">
                                    <h2><?= $property_name ?></h2>
                                    <div class="row">
                                        <ol class="breadcrumb pull-right">
                                            <li><a href="<?= base_url('app') ?> "><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                                            <li><a href="<?= base_url('properties/properties_list')?>">Properties</a></li>
                                            <li>Properties Profile</li>
                                        </ol>
                                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#properties">Properties</a></li>
                                <li><a data-toggle="tab" href="#contracts">Contracts</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="properties" class="tab-pane in active">
                                    <div class="col-xs-12 table-responsive">
                                        <div class="box">
                                            <div class="container-fluid">
                                                <div class="col-md-12">
													<table class="table table-borderless">
													  <tbody>
													     <td>1</td>
													     <td>Daniel</td>
													     <td>Jumanne</td>
													     <td>Mrushi</td>
													  </tbody>
													</table>
                                                </div>
                                            </div>
                                            <div class="">
                                                <?php
                                                $data = ['properties'=>$properties,
                                                          'property'=>$property
                                                        ];
                                                $this->load->view('properties/properties_profile/properties_accordion',$data);
                                                ?>      
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
<?php
$this->load->view('includes/footer'); ?>


