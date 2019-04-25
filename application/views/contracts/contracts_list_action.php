<?php

?>

<span class="pull-right">

<button contract_id="<?= $contract->{$contract::DB_TABLE_PK} ?>" class="btn btn-success btn-xs" data-target="<?='#edit_contract'.$contract->{$contract::DB_TABLE_PK} ?>" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i>
    Edit
</button>

    <!-- The Modal -->
<div class="modal" id="<?='edit_contract'.$contract->{$contract::DB_TABLE_PK} ?>">
    <?php
    $data = array(
        'contract' => $contract,
        'client_options' => $client_options,
        'currency_options' => $currency_options,
        'selected_client' => $selected_client,
        'selected_currency' => $selected_currency
    );
    $this->load->view('contracts/contracts_form',$data);
    ?>
</div>

<button contract_id="<?= $contract->{$contract::DB_TABLE_PK}?>"  class="delete_contract btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>
    Delete
</button>
</span>
