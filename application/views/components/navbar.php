<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <STRONG style="color: white; font-size: 30px;" >ONIRIX</STRONG>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li <?php if($active==1) { ?> class="active" <?php } ?> ><a href="<?php echo site_url('Welcome/'); ?>">Accueil</a></li>
                            <li <?php if($active==2) { ?> class="active" <?php } ?> ><a href="<?php echo site_url('Welcome/onirix'); ?>">Onirix</a></li>
                            <li <?php if($active==3) { ?> class="active" <?php } ?> ><a href="<?php echo site_url('Welcome/institus'); ?>">IIR</a></li>
                            <li <?php if($active==4) { ?> class="active" <?php } ?> ><a href="<?php echo site_url('Welcome/cauchemar'); ?>">Aide</a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="<?php echo site_url('Welcome/connecter'); ?>"><button class="btn btn-primary" style="background-color: #1A237E; border-color: #1A237E;">LOGIN</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>