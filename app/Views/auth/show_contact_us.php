<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Show Contact Us
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
Show Contact Us
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
SCU
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session(); ?>
<div class="row">
<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Contact Us Message</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(count($contact)>0){
                        foreach($contact as $cnt){ ?>
                        <tr>
                            <td><?= $cnt['name'];?></td>
                            <td><?= $cnt['email'];?></td>
                            <td><?= $cnt['subject'];?></td>
                            <td><?= character_limiter($cnt['message'], 25);?></td>
                            <td>Monday 12th April 2023</td>
                            <td class="text-center text-danger"><i class="bi bi-x-circle-fill"></i></td>
                        </tr>
                    <?php    }
                    } ?>
                  </tbody>
                </table>
                <div class="pagination mt-3 float-right">
                    <?= $pager->links() ?>
                </div>
              </div>
            </div>
          </div>
      </div>
      <style>
.pagination a {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 2px;
    background-color: #f2f2f2;
    color: #444;
    border-radius: 3px;
    text-decoration: none;
}

.pagination strong {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 2px;
    background-color: #4CAF50;
    color: #fff;
    border-radius: 3px;
}

.pagination .disabled {
    display: none;
}
</style>
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