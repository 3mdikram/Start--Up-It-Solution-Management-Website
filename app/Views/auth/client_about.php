<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Client About
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
    .card-whpudate:not(.card-outline)>.card-header{
        background: linear-gradient(45deg,#e83e8c, #17a2b8);
    }
    .btn-whpudate{
        background: linear-gradient(45deg,#e83e8c, #17a2b8);
    }
    .card-service:not(.card-outline)>.card-header{
        background: linear-gradient(45deg,#e83e8c, #17a2b8);
    }
    .editbtncolor{
        color: #495057;
    }
</style>
<?= $this->endSection(); ?>
<?= $this->section('startitle'); ?>
Client About
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
CA
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>
<div class="row">
    <!-- Web service show -->
    <?php if(count($cabout)>0){
        foreach($cabout as $ca){ ?>
         <div class="col-md-6" id="closetservice">
            <div class="card card-service" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
              <div class="card-header">
                <h3 class="card-title  text-white"><?= $ca['name'];?></h3>
                <div class="card-tools">
                  <button class="edit-wpservice bg-transparent border-0" type="button" class="btn btn-tool" data-piddata="<?php echo $ca['id'];?>">
                  <i class="bi bi-pencil-fill editbtncolor"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool delete-data-btn" data-deletedid="<?php echo $ca['id'];?>">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <img class="offset-5" style="border-radius:50%;" src="<?php echo base_url("asset/").$ca['img_path'];?>">
              <p class="mt-2 text-sm"><span class="float-right"><?php echo $ca['profession'];?></span></p>
              <p class="mt-5 text-sm"><?php echo $ca['about'];?></p>
              </div>
            </div>
          </div>
    <?php    }
    }else{
        echo "<p class='text-center text-danger'>Data Not Founded!</p>";
    } ?>
</div>
<?= $this->endSection(); ?>