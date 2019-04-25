<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 11/24/2018
 * Time: 5:36 PM
 */
$this->load->view('includes/header');
?>

    <div class="outer">
        <div class="inner bg-light lter">
            <div class="body" style="height: 600px;">
                <div class="col-md-12">
                    <h3>
                        Dashboard

                    </h3>
                    <section class="pull-right">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url('app') ?> "><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                            <li><i class="glyphicon glyphicon-building"></i><?= $this->session->userdata("first_name") ?></li>
                        </ol>
                    </section>
                </div>

            </div>

        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->


<?php $this->load->view('includes/footer');
