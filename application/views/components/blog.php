<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Article</span>
                    <h2>Explorez un univers captivant de contenus sur l'IA</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest__slider owl-carousel">
                <?php foreach($Contenu as $row){ ?>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4><?php echo $this->db->escape_str($row['titre']); ?></h4>
                        <ul>
                            <li><?php echo $this->db->escape_str($row['date']); ?></li>
                        </ul>
                        <p><?php echo $this->db->escape_str($row['conclusion']); ?></p>
                        <a href="<?php echo site_url('Welcome/details'); ?>/<?php echo $this->db->escape_str($row['slug']); ?>-<?php echo $row['id']; ?>.html">Voir plus<span class="arrow_right"></span></a>
                        <br>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>