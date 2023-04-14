<?= $this->extend('template/web_layout'); ?>
<?= $this->section('title') ?>
Blogs
<?= $this->endSection(); ?>
<?= $this->section('content') ?>
<!-- About Start -->
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Contact</a>
                </div>
            </div>
        </div>
    </div>
  <!-- Contact Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+919785658334</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">mdikram9771@gmail.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Visit our office</h5>
                            <h4 class="text-primary mb-0">703,Malviya Malviya C2-Plaza, Jaipur Rajasthan 302017</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form class="formData">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" id="uname" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                                <span class="text-danger namerror"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="uemail" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                                <span class="text-danger emailerror"></span>
                            </div>
                            <div class="col-12">
                                <input type="text" id="usubject" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                                <span class="text-danger subjecterror"></span>
                            </div>
                            <div class="col-12">
                                <textarea id="umessage" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                                <span class="text-danger messagerror"></span>
                            </div>
                            <div class="col-12">
                                <button class="send-message-btn btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe class="position-relative rounded w-100 h-100"
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.4182575105515!2d75.8196458242257!3d26.85844942925922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db66eaa3223e3%3A0xe981e84fadf1ebb9!2sC2%20Plaza%2C%20Apex%20Cir%2C%20Malviya%20Nagar%20Industrial%20Area%2C%20Malviya%20Nagar%2C%20Jaipur%2C%20Rajasthan%20302017!5e0!3m2!1sen!2sin!4v1680612153091!5m2!1sen!2sin"
                 frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<!-- Contact End -->
<!-- Testimonial Start -->
<?= include('component/testimonial.php'); ?>
<!-- Testimonial End -->
<!-- Vendor Start -->
<?= include('component/vendor.php'); ?>
<!-- Vendor End -->
<?= $this->endSection(); ?>
<?= $this->section('script');?>
<script>
    $(document).ready(function(){
        //Remove error filed
        $("#uname").on('input',function(){
            $(".namerror").html("");
        });$("#uemail").on('input',function(){
            $(".emailerror").html("");
        }); $("#usubject").on('input',function(){
            $(".subjecterror").html("");
        }); $("#umessage").on('input',function(){
            $(".messagerror").html("");
        })
        $(".send-message-btn").on("click",function(e){
            e.preventDefault();
            var name=$("#uname").val();
            var email=$("#uemail").val();
            var subject=$("#usubject").val();
            var message=$("#umessage").val();
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(name==""){
                $(".namerror").html("Name Required!");
            }else if(email==""){
                $(".emailerror").html("Email Required!");
            }else if(!regex.test(email)){
                $(".emailerror").html("Please Enter Valid Email Address!");
            }else if(subject==""){
                $(".subjecterror").html("Subject Required!");
            }else if(message==""){
                $(".messagerror").html("Message Required!");
            }else{
                $.post(base_url+"contact_us",{
                    name:name,
                    email:email,
                    message:message,
                    subject:subject
        },
        function(response){
            if(response==1){
                alert("Your message successfully send");
                $(".formData").trigger('reset');
            }else{
                alert("Something went to worng, Please try again?");
            }
        })
            }
        })
    })
</script>
<?= $this->endSection();?>