<?=$this->section('style');?>
<style>
    .name-error{
        color:#f9ff00;
    }.email-error{
        color:#f9ff00;
    }.service-error{
        color:#f9ff00;
    }.message-error{
        color:#f9ff00;
    }
</style>
<?= $this->endSection();?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <?php if(count($Requestquote)>0){
                    foreach($Requestquote as $Req){?>
                    <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo $Req['title'];?></h5>
                        <h1 class="mb-0"><?php echo $Req['title_one'];?></h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i><?php echo $Req['replay_one'];?></h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i><?php echo $Req['replay_two'];?></h5>
                        </div>
                    </div>
                    <p class="mb-4"><?php echo $Req['about'];?></p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo $Req['call_text'];?></h5>
                            <h4 class="text-primary mb-0">+91<?php echo $Req['phone'];?></h4>
                        </div>
                    </div>
                </div>
                <?php    }
                }?>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form class="formData">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" name="name" id="uname" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                    <span class='name-error'></span>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" id="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                    <span class='email-error'></span>
                                </div>
                                <div class="col-12">
                                    <select name="service" id="service" class="form-select bg-light border-0" style="height: 55px;">
                                        <option value="">Select A Service</option>
                                        <?php if(count($Showservices)){
                                            foreach($Showservices as $serv){?>
                                            <option value="<?php echo $serv['id'];?>"><?php echo $serv['name'];?></option>
                                        <?php    }
                                        }?>
                                    </select>
                                    <span class='service-error'></span>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="message" class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                    <span class='message-error'></span>
                                </div>
                                <div class="col-12">
                                    <button class="btn send-btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->section('script');?>
<script>
    $(document).ready(function(){
        //Remove Error Filed
        $("#uname").on('input',function(){
            $(".name-error").html(""); })
        $("#email").on('input',function(){
            $(".email-error").html(""); })
        $("#service").on('input',function(){
            $(".service-error").html(""); })
        $("#message").on('input',function(){
            $(".message-error").html(""); })
       $(".send-btn").on("click",function(e){
        e.preventDefault();
        var name=$("#uname").val();
        var email=$("#email").val();
        var message=$("#message").val();
        var service=$("#service").val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(name==""){
            $(".name-error").html("Name Required!");
        }else if(email==""){
            $(".email-error").html("Email Required!");
        }else if(!regex.test(email)){
            $(".email-error").html("Please Enter Valid Email!");
        }else if(service==""){
            $(".service-error").html("Service Required!");
        }else if(message==""){
            $(".message-error").html("Message Required!");
        }else{
        $.post(base_url+"quote_form",{
            name:name,
            email:email,
            message:message,
            service:service
        },
        function(response){
            if(response==1){
                alert("Your request successfully send");
                $(".formData").trigger('reset');
            }
        })
    }
       })
    })
</script>
<?= $this->endSection();?>