<?= $this->extend('template/web_layout') ;?>
<?= $this->section('title')?>
<?= $this->endSection();?>
<?= $this->section('content')?>
 <!-- Slider Include -->
   <?php include('component/website_slider.php') ;?>
    <!-- Navbar & Carousel End -->
    <!-- Facts Start -->
    <?php include('component/fact.php') ;?>
    <!-- Facts Start -->
    <!-- About Start -->
    <?php include('component/about_us.php') ;?>
    <!-- About End -->
    <!-- Features Start -->
    <?php include('component/features_start.php') ;?>
    <!-- Features Start -->
    <!-- Service Start -->
    <?php include('component/service.php') ;?>
    <!-- Service End -->
    <!-- Pricing Plan Start -->
    <?php include('component/pricing.php') ;?>
    <!-- Pricing Plan End -->
    <!-- Quote Start -->
    <?php include('component/quote.php') ;?>
    <!-- Quote End -->
    <!-- Testimonial Start -->
    <?php include('component/testimonial.php') ;?>
    <!-- Testimonial End -->
    <!-- Team Start -->
    <?php include('component/team.php') ;?>
    <!-- Team End -->
    <!-- Blog Start -->
    <?php include('component/blog.php') ;?>
    <!-- Blog Start -->
    <!-- Vendor Start -->
    <?php include('component/vendor.php') ;?>
    <!-- Vendor End -->
<?= $this->endSection();?>