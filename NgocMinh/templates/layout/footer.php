<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news col-md-5 mgb-res">
                    <h2 class="footer-title">Thông tin liên hệ</h2>
                    <div class="footer-name"><?=$footer['name'.$lang]?></div>
                    <div class="footer-info"><?=htmlspecialchars_decode($footer['content'.$lang])?></div>
                    <ul class="social social-footer list-unstyled p-0 m-0 d-flex align-items-center justify-content-start flex-wrap">
                        <?php foreach($social2 as $k => $v) { ?>
                            <li class="d-inline-block align-top mr-1 hvr-float-shadow">
                                <a href="<?=$v['link']?>" target="_blank">
                                    <?=$func->getImage(['sizes' => '48x48x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="footer-news col-md-3 mgb-res">
                    <h2 class="footer-title">Chính sách hỗ trợ</h2>
                    <div class="line-footer mb-3"></div>
                    <ul class="footer-ul">
                        <?php foreach($policy as $v) { ?>
                            <li><a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                        <?php } ?>
                    </ul>
                </div>
        
                <div class="footer-news col-md-4">
                    <h2 class="footer-title">fanpage facebook</h2>
                    <?=$addons->set('fanpage-facebook', 'fanpage-facebook', 0);?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        
        <div class="wrap-content">
            <div class="row">
                <div class="footer-copyright col-md-6">Copyright © By</div>
                <div class="footer-statistic col-md-6">
                    <span><?=dangonline?>: <?=$online?></span><span>|</span>
                    <span><?=tongtruycap?>: <?=$counter['total']?></span>
                </div>
            </div>
        </div>
    </div>
    
    <?=$addons->set('messages-facebook', 'messages-facebook', 0);?>
    <?=$addons->set('footer-map', 'footer-map', 0);?>
</div>
<?php  if($com!='gio-hang') { ?>
    <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?=(!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0?></span>
    </a>
<?php }  ?>
<?php if(isset($config['setting']['link_maps']) && $config['setting']['link_maps'] == true) { ?>
<a class="btn-map btn-frame text-decoration-none" target="_blank" href="<?=$optsetting['link_maps'];?>" style="bottom:400px;">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?=$func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'icon-t5.png', 'alt' => 'Map'])?></i>
</a>
<?php } ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?=$func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo'])?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?=$func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline'])?></i>
</a>