<?= $this->extend('template/web_layout'); ?>
<?= $this->section('title') ?>
Blogs
<?= $this->endSection(); ?>
<?= $this->section('content') ?>
<!-- About Start -->
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Blog Grid</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Blog Grid</a>
        </div>
    </div>
</div>
</div>
<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <?php if (count($blog) > 0) {
                        foreach ($blog as $bl) { ?>
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="<?= base_url('asset/').$bl['img_path']; ?>" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="<?= base_url('blogs/').$bl['catId'];?>"><?= $bl['category'];?></a>
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i class="far fa-user text-primary me-2"></i><?= $bl['writter_name']; ?></small>
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                        </div>
                                        <h4 class="mb-3"><?= character_limiter($bl['title'],20); ?></h4>
                                        <p><?= character_limiter($bl['message'], 50); ?></p>
                                        <a href="<?= $bl['tagId'];?>"><p>Tags: <?= $bl['tag'];?></p></a>
                                        <a class="text-uppercase" href="<?= base_url('blogs/details/').$bl['id'];?>">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    <?php    }
                    }else{ ?>
                    <div class="col-md-12 wow slideInUp" data-wow-delay="0.6s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="p-4">
                                        <p class="text-center text-danger font-bold">Post Not Founded</p>
                                    </div>
                                </div>
                            </div>
                <?php    } ?>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Categories</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <?php if(count($cat)>0){
                            foreach($cat as $cat){?>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="<?= base_url('blogs/').$cat['id']; ?>"><i class="bi bi-arrow-right me-2"></i><?= $cat['name'];?></a>
                        <?php    }
                        }else{
                            echo "<p class='text-danger'>Category Not Available</p>";
                        } ?>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Recent Post</h3>
                    </div>
                    <?php if (count($blimit) > 0) {
                        foreach ($blimit as $lbl) {
                            ?>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="<?= base_url('asset/').$lbl['img_path']; ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="<?=base_url('blogs/details/').$lbl['id']; ?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?= character_limiter($lbl['title'],20); ?>
                        </a>
                    </div>
                    <?php }  } ?>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <img src="<?= base_url('asset/website/img/blog-1.jpg') ?>" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->
                <!-- Tags Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Tag Cloud</h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1">
                    <?php if (count($tag) > 0) {
                        foreach ($tag as $tg) {
                            ?>
                        <a href="<?= $tg['id']; ?>" class="btn btn-light m-1"><?= $tg['name']; ?></a>
                        <?php }  } ?>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog End -->
<!-- Testimonial Start -->
<?= include('component/testimonial.php'); ?>
<!-- Testimonial End -->
<!-- Vendor Start -->
<?= include('component/vendor.php'); ?>
<!-- Vendor End -->
<?= $this->endSection(); ?>