<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Sbar Page Update
<?= $this->endSection(); ?>
<?= $this->section('style'); ?>
<style>
    .successColor {
        color: #eafa5a;
        font-weight: 900;
    }
    .cursor-pointer{
        cursor: pointer;
    }
</style>
<?= $this->endSection(); ?>
<?= $this->section('startitle'); ?>
Sbar Page Update
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
SPU
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Sbar Page Update <span class="text-sm ml-3 successColor">
                        <?php if ($session->has('success')) {
                            echo $session->success;
                        }; ?>
                    </span></h3>
            </div>
            <form action="<?php echo base_url('admin/sidebar_page_update'); ?>" id="form-valid" method="POST" class="requires-validation" novalidate>
                <?php $validation = \Config\Services::validation(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="pagename" class="form-label">Page Name</label>
                        <input type="text" class="form-control" name="pagename" id="pageName" placeholder="Page Name" value="<?= set_value('pagename') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('pagename')) {
                                                        echo $validation->getError('pagename');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="fontIcon" class="form-label">Page Icon</label>
                        <input type="text" class="form-control" name="pageicon" id="fontIcon" placeholder="Page Icon" value="<?= set_value('pageicon') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('fontIcon')) {
                                                        echo $validation->getError('fontIcon');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Page Url</label>
                        <input type="text" class="form-control" name="pageurl" id="pageurl" placeholder="Page Url" value="<?= set_value('pageurl') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('pageurl')) {
                                                        echo $validation->getError('pageurl');
                                                    } ?></span>
                    </div>
                    <input type="text" class="form-control" name="pageid" id="pageId" value="<?= set_value('pageid') ?>"  hidden>
                </div>
                <div class="card-footer">
                    <button type="submit" id="data-update-btn" class="btn btn-primary w-100">Update</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">Sbar Page Preview</h3>
            </div>
            <div class="card-body">
                <?php if(count($sidebar)>0){
                    foreach($sidebar as $sbar){ ?>
                    <div class="input-group mb-3" disabled>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?= $sbar['page_icon'];?></span>
                    </div>
                    <input type="text" class="form-control"   placeholder="<?php echo $sbar['page_name'];?>" disabled>
                    <div class="input-group-prepend">
                        <span class="input-group-text edit-data" data-pname='<?= $sbar['page_name'];?>' data-picon='<?= $sbar['page_icon'];?>' data-purl='<?= $sbar['page_url'];?>' data-pid='<?= $sbar['id'];?>'>
                        <i class="bi bi-pencil text-success cursor-pointer"></i></span>
                    </div>
                    <div class="input-group-prepend">
                        <span class="input-group-text" onclick="return confirm('Are you sure you want to delete this?')"> <a href="<?= base_url('admin/sidebar_page_update/').$sbar['id'];?>"> <i class="bi bi-x-circle-fill text-danger cursor-pointer"></i></a></span>
                    </div>
                </div>
                <?php    }
                }else{
                    echo "<p class='text-center'>Page Not Founded!</p>";
                } ?>
                
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function(){
        $("#form-valid input").prop('disabled', true);
        $("#data-update-btn").prop('disabled', true);
        $(".edit-data").on("click",function(e){
            e.preventDefault();
            var pageName=$(this).data("pname");
            var pageUrl=$(this).data("picon");
            var pageIcon=$(this).data("purl");
            var pId=$(this).data("pid");
            //Set Data In Input
            $("#pageName").val(pageName);
            $("#fontIcon").val(pageUrl);
            $("#pageurl").val(pageIcon);
            $("#pageId").val(pId);
            $("#form-valid input").prop('disabled', false);
            $("#data-update-btn").prop('disabled', false);
        });
    })
</script>
<script>
    (function() {
        'use strict'
        const forms = document.querySelectorAll('.requires-validation')
        Array.from(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
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