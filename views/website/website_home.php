<div class="rev-slider">
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <div class="bannercontainer" >
                        <div class="banner" >
                            <ul>
                                <!-- THE FIRST SLIDE -->
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="<?=base_url()?>assets/image/promech2kit-camo.jpg" data-src="<?=base_url()?>assets/image/promech2kit-camo.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('<?=base_url()?>assets/image/promech2kit-camo.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>
                                </li>
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="<?=base_url()?>assets/image/jucievgod.jpg" data-src="<?=base_url()?>assets/image/jucievgod.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('<?=base_url()?>assets/image/jucievgod.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 2; visibility: inherit;">
                                        </div>
                                    </div>
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="<?=base_url()?>assets/image/vapebear.jpg" data-src="<?=base_url()?>assets/image/vapebear.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('<?=base_url()?>assets/image/vapebear.jpg'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 3; visibility: inherit;">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!--slider-->
        </div>
<div class="container">
  <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="space60">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="beta-products-list">
                                <h4>New Products</h4>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                <?php foreach ($products as $item) : ?>
                                    <div class="col-sm-3">
                                    <br>
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.php"> 
                                                <img src="/MVC/upload/product/<?= $item['image']?>" width="350px" height="300px" style="object-fit: cover" /></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title"><?= $item['name']?></p>
                                                <p class="single-item-price">
                                                    <span><?= number_format($item['price'])?> VND</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="<?=base_url()?>index.php?controller=website&action=addcart&id=<?= $item['id']?>" ><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="<?=base_url()?>index.php?controller=website&action=product">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach?>
                                </div>
                            </div>
                            <!-- .beta-products-list -->
                            <div class="space50">&nbsp;</div>
                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left"> 8 styles found</p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.php"><img src="<?=base_url()?>assets/image/mechcamo.png" width="350px" height="300px" style="object-fit: cover"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Mech mod camo</p>
                                                <p class="single-item-price">
                                                    <span>3,450,000 VND</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shoping_cart.php"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.php">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>
                                            <div class="single-item-header">
                                                <a href="product.php"><img src="<?=base_url()?>assets/image/tinhdau.jpg" width="350px" height="300px" style="object-fit: cover "></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">Ejuice</p>
                                                <p class="single-item-price">
                                                    <span class="flash-del">350,000 VND</span>
                                                    <span class="flash-sale">300,000 VND</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shoping_cart.php"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.php">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.php"><img src="<?=base_url()?>assets/image/MMHTGD-2.jpg" width="350px" height="300px" style="object-fit: cover "></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">HERITAGE</p>
                                                <p class="single-item-price">
                                                    <span>350,000 VND</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shoping_cart.php"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.php">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>  <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.php"><img src="<?=base_url()?>assets/image/dray.jpg" width="350px" height="300px" style="object-fit: cover "></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">DRAG</p>
                                                <p class="single-item-price">
                                                    <span>1,500,000 VND</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shoping_cart.php"><i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.php">Details <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <!-- .beta-products-list -->
                        </div>
                    </div>
                    <!-- end section with sidebar and main content -->
                </div>
                <!-- .main-content -->
            </div>
            <!-- #content -->
        </div>
        <!-- .container -->    
