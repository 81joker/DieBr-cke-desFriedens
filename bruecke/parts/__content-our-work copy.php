     <!-- Gallery Start -->
     <section class="gallery gallery-page" id="gallery">
     <div class="container-fluid gallery py-5  px-0">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <!-- <h5 class="text-uppercase text-primary">Our work</h5> -->
                <h3 class="text-uppercase text-primary-main ">We consider environment welfare</h3>
                <p class="mb-0 text-white">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.</p>
            </div>
            <div class="row g-4 row-cols-4">
                <?php $countLoop = 0 ?>
                <?php for ($i=0; $i < 10 ; $i++) : ?>
                    <div class="gallery-item" style="height: 400px;">
                        <img src="<?php echo get_theme_file_uri('img/gallery-' . $i . '.jpg');?>" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="<?php echo get_theme_file_uri('img/gallery-' . $i . '.jpg');?>" data-lightbox="gallery-' . $i . '" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Beauty Of Life</a>
                                <a href="#" class="text-white"><p class="mb-0">Gallery Name</p></a>
                            </div>
                        </div>
                    </div>
                    <?php $countLoop++?>

              <?php endfor; ?>
            </div>
        </div>
     </section>
        <!-- Gallery End -->

