<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Website Header Page Add
<?= $this->endSection(); ?>
<?= $this->section('style'); ?>
<style>
    .successColor{
        color:#eafa5a;
        font-weight: 900;
    }
    .card-whp_add:not(.card-outline)>.card-header{
        background: linear-gradient(45deg,#e83e8c, #17a2b8);
    }
    .btn-wph{
        background: linear-gradient(45deg,#e83e8c, #17a2b8);
    }
</style>
<?= $this->endSection(); ?>
<?= $this->section('startitle'); ?>
Website Header Page Add
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
WHPA
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session();?>
<div class="col-md-6 offset-3">
    <div class="card card-whp_add text-sm text-white">
        <div class="card-header">
            <h3 class="card-title">Website Header Page Add <span class="text-sm ml-3 successColor">
                <?php if($session->has('success')){
                    echo $session->success;
                };?>
            </span></h3>
        </div>
        <form action="<?php echo base_url('admin/add_web_header_page');?>" method="POST" class="requires-validation" novalidate>
        <?php $validation = \Config\Services::validation(); ?>
            <div class="card-body">
                <div class="form-group">
                <label for="pagename" class="form-label">Page Name</label>
                    <input type="text" class="form-control" name="pagename" id="pageName" placeholder="Page Name" value="<?= set_value('pagename') ?>" size="50" required>
                    <span class="text-danger"><?php if ($validation->hasError('pagename')){
                        echo $validation->getError('pagename'); }?></span>
                </div>
                <div class="form-group">
                    <label for="fontIcon" class="form-label">Page Icon</label>
                    <input type="text" class="form-control" name="pageicon" id="fontIcon" placeholder="Page Icon" value="<?= set_value('pageicon') ?>" size="50" required>
                    <span class="text-danger"><?php if ($validation->hasError('fontIcon')){
                        echo $validation->getError('fontIcon'); }?></span>
                </div>
                <div class="form-group">
                    <label for="pageurl" class="form-label">Page Url</label>
                    <input type="text" class="form-control" name="pageurl" id="pageurl" placeholder="Page Url" value="<?= set_value('pageurl') ?>" size="50" required>
                    <span class="text-danger"><?php if ($validation->hasError('pageurl')){
                        echo $validation->getError('pageurl'); }?></span>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-wph text-white w-100">Submit</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script');?>
<script>
(function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
    if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
    }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
<?= $this->endSection(); ?>