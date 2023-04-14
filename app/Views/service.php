<?= $this->extend('template/web_layout'); ?>
<?= $this->section('title') ?>
Service
<?= $this->endSection(); ?>
<?= $this->section('content') ?>
<!-- About Start -->
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Services</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Services</a>
        </div>
    </div>
</div>
</div>
<!-- Service Start -->
<?= include('component/service.php'); ?>
<!-- Service End -->
<!-- Testimonial Start -->
<?= include('component/testimonial.php'); ?>
<!-- Testimonial End -->
<!-- Vendor Start -->
<?= include('component/vendor.php'); ?>
<!-- Vendor End -->
<?= $this->endSection(); ?>