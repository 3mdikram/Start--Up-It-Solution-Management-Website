<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Price Plans
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
Price Plans
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
PP's
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card card-whpudate">
            <div class="card-header">
                <h3 class="card-title text-white"><span class="update-title">Add New Price Plans</span> <span class="text-sm ml-3 successColor">
                        <?php if ($session->has('success')) {
                            echo $session->success;
                        }; ?>
                    </span></h3>
            </div>
            <form action="<?php echo base_url('admin/price_plans'); ?>" id="form-valid" method="POST" class="requires-validation" novalidate>
                <?php $validation = \Config\Services::validation(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="pagename" class="form-label">Plans Title</label>
                        <input type="text" class="form-control" name="priceplantitle" id="priceplantitle" placeholder="Service Title" value="<?= set_value('priceplantitle') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('priceplantitle')) {
                                                        echo $validation->getError('priceplantitle');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="fontIcon" class="form-label">Plans About</label>
                        <input type="text" class="form-control" name="plansabout" id="plansabout" placeholder="Plans About(max:50)" value="<?= set_value('plansabout') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('plansabout')) {
                                                        echo $validation->getError('plansabout');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="fontIcon" class="form-label">Plans Price</label>
                        <input type="text" class="form-control" name="planprice" id="planprice" placeholder="Plans Price" value="<?= set_value('planprice') ?>" size="50" required>
                        <span class="text-danger"><?php if ($validation->hasError('planprice')) {
                                                        echo $validation->getError('planprice');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Access One</label>
                        <input type="text" class="form-control" name="accessone" id="accessone" placeholder="Access One(max:50)" value="<?= set_value('accessone') ?>" size="100" required>
                        <span class="text-danger"><?php if ($validation->hasError('accessone')) {
                                                        echo $validation->getError('accessone');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Access Two</label>
                        <input type="text" class="form-control" name="accesstwo" id="accesstwo" placeholder="Access Two(max:50)" value="<?= set_value('accesstwo') ?>" size="100" required>
                        <span class="text-danger"><?php if ($validation->hasError('accesstwo')) {
                                                        echo $validation->getError('accesstwo');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Access Three</label>
                        <input type="text" class="form-control" name="accessthree" id="accessthree" placeholder="Access Three(max:50)" value="<?= set_value('accessthree') ?>" size="100" required>
                        <span class="text-danger"><?php if ($validation->hasError('accessthree')) {
                                                        echo $validation->getError('accessthree');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Access Four</label>
                        <input type="text" class="form-control" name="accessfour" id="accessfour" placeholder="Access Four(max:50)" value="<?= set_value('accessfour') ?>" size="100" required>
                        <span class="text-danger"><?php if ($validation->hasError('accessfour')) {
                                                        echo $validation->getError('accessfour');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Access Icon</label>
                        <input type="text" class="form-control" name="accessicon" id="accessicon" placeholder="Access Icon(max:50)" value="<?= set_value('accessicon') ?>" size="100" required>
                        <span class="text-danger"><?php if ($validation->hasError('accessicon')) {
                                                        echo $validation->getError('accessicon');
                                                    } ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pageurl" class="form-label">Access Not Icon</label>
                        <input type="text" class="form-control" name="accessnoticon" id="accessnoticon" placeholder="Access Not Icon(max:50)" value="<?= set_value('accessnoticon') ?>" size="100" required>
                        <input type="text" class="form-control" id="idisid" hidden>
                        <span class="text-danger"><?php if ($validation->hasError('accessnoticon')) {
                                                        echo $validation->getError('accessnoticon');
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
    <?php if(count($plans)>0){
        foreach($plans as $ws){ ?>
         <div class="col-md-6" id="closetservice">
            <div class="card card-service" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
              <div class="card-header">
                <h3 class="card-title  text-white">₹<?= $ws['price'];?> <?= $ws['title'];?></h3>
                <div class="card-tools">
                  <button class="edit-wpservice bg-transparent border-0" type="button" class="btn btn-tool" data-piddata="<?php echo $ws['id'];?>">
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
              <?php echo $ws['title_about'];?>
              <p class="mt-3 text-sm"><?php echo $ws['access_one'];?> <span class="float-right"><?php echo $ws['access_icon'];?></span></p>
              <p class="mt-1 text-sm"><?php echo $ws['access_two'];?> <span class="float-right"><?php echo $ws['access_icon'];?></span></p>
              <p class="mt-1 text-sm"><?php echo $ws['access_three'];?> <span class="float-right"><?php echo $ws['access_icon'];?></span></p>
              <p class="mt-1 text-sm"><?php echo $ws['access_four'];?> <span class="float-right"><?php echo $ws['not_access_icon'];?></span></p>
              <p class="mt-1 text-sm"><?php echo $ws['title_about'];?> <span class="float-right"><?php echo $ws['not_access_icon'];?></span></p>
              </div>
            </div>
          </div>
    <?php    }
    }else{
        echo "<p class='text-center text-danger'>Data Not Founded!</p>";
    } ?>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function(){
        $(".edit-wpservice").on("click",function(e){
            e.preventDefault();
            var id=$(this).data("piddata");
                $.ajax({
                    url:app_url+"price_plans/"+id,
                    type:'get',
                    data:{id:id},
                    success:function(data){
                        let userObj = JSON.parse(data);
                        $(".update-title").html("Update Price Plans");
                        $(".btn-whpudate").html("Update Now");
                        $(".btn-whpudate").addClass("price-plan-dataupd");
                        userObj.forEach(iofdata=>{
                            $("#priceplantitle").val(iofdata['title']);
                            $("#plansabout").val(iofdata['title_about']);
                            $("#planprice").val(iofdata['price']);
                            $("#accessone").val(iofdata['access_one']);
                            $("#accesstwo").val(iofdata['access_two']);
                            $("#accessthree").val(iofdata['access_three']);
                            $("#accessfour").val(iofdata['access_four']);
                            $("#accessicon").val(iofdata['access_icon']);
                            $("#accessnoticon").val(iofdata['not_access_icon']);
                            $("#idisid").val(iofdata['id']);
                        })
                    }
                });
        });
        $(document).on("click",".price-plan-dataupd",function(e){
            e.preventDefault();
            var title=$("#priceplantitle").val();
            var title_about=$("#plansabout").val();
            var price=$("#planprice").val();
            var access_one=$("#accessone").val();
            var access_two=$("#accesstwo").val();
            var access_three=$("#accessthree").val();
            var access_four=$("#accessfour").val();
            var access_icon=$("#accessicon").val();
            var not_access_icon=$("#accessnoticon").val();
            var id=$("#idisid").val();
            var conf=confirm("Are you sure you want to update this?");
            if(conf){
                $.ajax({
                    url:app_url+"price_plans_update",
                    type:'post',
                    data:{
                        title:title,title_about:title_about,price:price,access_one:access_one,
                        access_two:access_two,access_three:access_three,access_four:access_four,
                        access_icon:access_icon,not_access_icon:not_access_icon,id:id
                    },
                    success:function(data){
                        if(data==1){
                            alert("Data Successfully Updated!");
                            $(".update-title").html("Add New Price Plans");
                            $(".btn-whpudate").html("Add Now");
                            $(".btn-whpudate").removeClass("price-plan-dataupd");
                            $("#form-valid").trigger("reset");
                        }else{
                            alert("Something went to worng!");
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
                    url:app_url+"price_plans_delete/"+id,
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