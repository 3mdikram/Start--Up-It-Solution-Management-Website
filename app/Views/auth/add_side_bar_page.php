<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Sidebar Page Add
<?= $this->endSection(); ?>
<?= $this->section('style'); ?>
<style>
    .successColor{
        color:#eafa5a;
        font-weight: 900;
    }
</style>
<?= $this->endSection(); ?>
<?= $this->section('startitle'); ?>
Sidebar Page Add
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
SPA
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session();?>
<div class="col-md-6 offset-3">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Pages <span class="text-sm ml-3 successColor">
                <?php if($session->has('success')){
                    echo $session->success;
                };?>
            </span></h3>
        </div>
        <form action="<?php echo base_url('admin/sidebar_page_add');?>" method="POST" class="requires-validation" novalidate>
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
                <button type="submit" class="btn btn-primary w-100">Submit</button>
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