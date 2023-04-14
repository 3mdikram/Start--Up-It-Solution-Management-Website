<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Website Header Page Update
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
Web Service
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
WS
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card card-whpudate">
            <div class="card-header">
                <h3 class="card-title text-white">Add New Web Service <span class="text-sm ml-3 successColor">
                        <?php if ($session->has('success')) {
                            echo $session->success;
                        }; ?>
                    </span></h3>
            </div>
            <form action="<?php echo base_url('admin/web_service'); ?>" id="form-valid" method="POST" class="requires-validation" novalidate>
                <?php $validation = \Config\Services::validation(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="pagename" class="form-label">Service Title</label>
                        <input type="text" class="form-control" name="servicetitle" id="servicetitle" placeholder="Service Title" value="<?= set_value('servicetitle') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('servicetitle')) {
                                                        echo $validation->getError('servicetitle');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="fontIcon" class="form-label">Service Icon</label>
                        <input type="text" class="form-control" name="pageicon" id="fontIcon" placeholder="Service Icon" value="<?= set_value('pageicon') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('fontIcon')) {
                                                        echo $validation->getError('fontIcon');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">About</label>
                        <input type="text" class="form-control" name="about" id="about" placeholder="About(max:100)" value="<?= set_value('about') ?>" size="100" required>
                        <span class="text-danger"><?php if ($validation->hasError('about')) {
                                                        echo $validation->getError('about');
                                                    } ?></span>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" id="data-update-btn" class="btn btn-whpudate text-white w-100">Add Now</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Web service show -->
    <?php if(count($wservice)>0){
        foreach($wservice as $ws){ ?>
         <div class="col-md-6" id="closetservice">
            <div class="card card-service" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
              <div class="card-header">
                <h3 class="card-title  text-white"><?php echo $ws['font_icon'];?> <?= $ws['title'];?></h3>
                <div class="card-tools">
                  <button class="edit-wpservice bg-transparent border-0" type="button" class="btn btn-tool" data-toggle="modal" data-servname="<?php echo $ws['title'];?>" data-servicon='<?php echo $ws['font_icon'];?>' data-serabout="<?php echo $ws['about'];?>" data-serviceid="<?php echo $ws['id'];?>">
                  <i class="bi bi-pencil-fill editbtncolor"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool delete-data-btn" data-deletedid="<?php echo $ws['id'];?>">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
              <?php echo $ws['about'];?>
              </div>
            </div>
          </div>
    <?php    }
    }else{
        echo "<p class='text-center text-danger'>Data Not Founded!</p>";
    } ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title offset-4">Web Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <span class="offset-4 success-error"></span>
      <div class="form-group">
        <label for="pageurl" class="form-label">Service Title</label>
        <input type="text" class="form-control" name="servicetitles" id="servicetitles" placeholder="Service Title" size="100" required>
        <span class="text-danger servicetitles"></span>
        </div>
        <div class="form-group">
        <label for="pageurl" class="form-label">Service Icon</label>
        <input type="text" class="form-control" name="serviceicon" id="serviceicon" placeholder="Service Icon" size="100" required>
        <span class="text-danger serviceicon"></span>
        </div>
        <div class="form-group">
        <label for="pageurl" class="form-label">About</label>
        <input type="text" class="form-control" name="serviceabout" id="serviceabout" placeholder="About(max:100)" size="100" required>
        <span class="text-danger serviceabout"></span>
        <input type="text" class="form-control" id="svids" hidden>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-whpudate upd-service w-100 text-white">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function(){
        $("#servicetitles").prop('disabled', true);
        $("#serviceicon").prop('disabled', true);
        $("#serviceabout").prop('disabled', true);
        $(".upd-service").prop('disabled', true);
        $(".edit-wpservice").on("click",function(e){
            e.preventDefault();
            var serviceName=$(this).data("servname");
            var serviceIcon=$(this).data("servicon");
            var serviceAbout=$(this).data("serabout");
            var pId=$(this).data("serviceid");
            //Set Data In Input
            $("#servicetitles").val(serviceName);
            $("#serviceicon").val(serviceIcon);
            $("#serviceabout").val(serviceAbout);
            $("#svids").val(pId);
            $("#exampleModal").modal('show');
            //Input
            $("#servicetitles").prop('disabled', false);
            $("#serviceicon").prop('disabled', false);
            $("#serviceabout").prop('disabled', false);
            $(".upd-service").prop('disabled', false);
        });
        $(".upd-service").on("click",function(e){
            e.preventDefault();
            var serviceName=$("#servicetitles").val();
            var serviceIcon=$("#serviceicon").val();
            var serviceAbout=$("#serviceabout").val();
            var pId=$("#svids").val();
            if(serviceName==""){
                $(".servicetitles").html("Service Title Required!");
            }else if(serviceIcon==""){
                $("serviceicon").html("Service Icon Required!");
            }else if(serviceAbout==""){
                $(".serviceabout").html("Service About Required!");
            }else{
                $.ajax({
                    url:app_url+"web_service_update",
                    type:'post',
                    data:{serviceName:serviceName,serviceIcon:serviceIcon,serviceAbout:serviceAbout,pId:pId},
                    success:function(data){
                        if(data==1){
                            $(".success-error").addClass("text-success font-weight");
                            $(".success-error").html("Successfully Updated!").fadeIn();
                            $(".success-error").fadeOut(9000);
                        }else{
                            $(".success-error").addClass("text-danger font-weight");
                            $(".success-error").html("Something went to worng!").fadeIn();
                            $(".success-error").fadeOut(9000);
                        }
                    }
                });
            }
        });
        $(".delete-data-btn").on("click",function(e){
            e.preventDefault();
            var id=$(this).data("deletedid");
            var element=this;
            var conf=confirm("Are you sure you want to delete this?");
            if(conf){
                $.ajax({
                    url:app_url+"web_service_update/"+id,
                    type:'get',
                    data:{id:id},
                    success:function(data){
                        if(data==1){
                            $(element).closest("#closetservice").fadeOut();
                        }
                    }
                });
            }
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