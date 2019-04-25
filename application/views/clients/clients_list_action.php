<?php

?>

<span class="pull-right">

<button client_id="<?= $client->{$client::DB_TABLE_PK} ?>" class="btn btn-success btn-xs" data-target="<?='#edit_client'.$client->{$client::DB_TABLE_PK} ?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>
    Edit
</button>

    <!-- The Modal -->
<div class="modal" id="<?='edit_client'.$client->{$client::DB_TABLE_PK} ?>">
    <?php
    $data = array(
        'client' => $client
    );
    $this->load->view('clients/clients_form', $data);
    ?>
</div>

<button client_id="<?= $client->{$client::DB_TABLE_PK} ?>" client_name=" <?= $client->client_name ?>" class="delete_client btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>
    Delete
</button>
</span>
