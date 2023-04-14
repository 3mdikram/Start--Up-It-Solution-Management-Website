<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <?php if(count($vendors)>0){
                        foreach($vendors as $ven){ ?>
                        <img src="<?= base_url('asset/').$ven['img_path']?>" alt="">
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>