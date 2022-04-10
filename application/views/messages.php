<!-- Messages Success -->
<?php if ($this->session->has_userdata('success')) { ?>
<div class="alert alert-success alert-dismissible" style="width:25%;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-check"></i><?=$this->session->flashdata('success');?>
</div>
<?php } ?>


<!-- Messagess Error -->
<?php if ($this->session->has_userdata('error')) { ?>
<div class="alert alert-error alert-dismissible" style="width:30%;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <i class="icon fa fa-ban"></i><?=$this->session->flashdata('error');?>
</div>
<?php } ?>