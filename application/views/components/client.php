<section class="testimonial spad set-bg" data-setbg="<?php echo site_url('assets/img/testimonial/J4x.gif'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="margin-top: 3em;" class="section-title center-title">
                    <span>AIMÉ PAR LES CLIENTS</span>
                    <h2>QUE DISENT LES CLIENTS ?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <?php foreach ($Appreciation as $liste) { ?>
                <div class="col-lg-4">
                    <div style="background-color: #100028;" class="testimonial__item">
                        <div class="testimonial__text">
                            <p><?php echo $liste['commentaire']; ?></p>
                        </div>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="<?php echo site_url('assets/img/testimonial/4305692.png'); ?>" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5><?php echo $liste['etoile']; ?> étoile(s)</h5> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>