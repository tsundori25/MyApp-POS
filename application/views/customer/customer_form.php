<section class="content-header">
    <h1>
      Customers
      <small>Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Customers</li>
    </ol>
</section>

  <!-- Main content -->
<section class="content">
  
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Customers</h3>
            <div class="pull-right">
                <a href="<?=site_url('customer')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
           <div class="row">
               <div class="col-md-4 col-md-offset-4">
                   <?php //echo validation_errors() ?>
                    <form action="<?=site_url('customer/process')?>" method="post">
                        <div class="form-group">
                            <label for="">Customer Name *</label>
                            <input type="hidden" name="id" value="<?=$row->customer_id?>">
                            <input type="text" name="customer_name" value="<?=$row->name?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Gender *</label>
                            <select name="gender" class="form-control" required>
                               <option value="">- Pilih -</option>
                               <option value="L"<?=$row->gender == 'L' ? 'selected' : null?>>- Laki-laki -</option>
                               <option value="P"<?=$row->gender == 'P' ? 'selected' : null?>>- Perempuan -</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Phone *</label>
                            <input type="text" name="phone" value="<?=$row->phone?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address *</label>
                            <textarea name="addr" class="form-control" required><?=$row->address?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-md">Save</button>
                            <button type="Reset" class="btn btn-md">Reset</button>
                        </div>
                    </form>
               </div>
           </div>
        </div>
    </div>

</section>