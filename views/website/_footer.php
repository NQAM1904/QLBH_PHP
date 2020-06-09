<style>
    .color-div {
        background: white !important;
    }

    hr.new4 {
        border: 1px solid red;
    }

    .font-size {
        font-size: 16px;
        font-weight: 300;
        color: gray;
        font: 13px/20px "Open Sans", sans-serif;
    }
</style>
<hr class="new4">
<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <!-- <h4 class="widget-title">Instagram Feed</h4> -->
                    <img src="<?= base_url() ?>assets/image/logovape.png" width="250" />
                    <div class="font-size">Chúng tôi là hệ thống cửa hàng chính hãng cung cấp tinh dầu, thân máy, đầu đốt, phụ kiện vape với sự phục vụ chuyên nghiệp và uy tín được đặt lên hàng đầu.
                        Tel: 024 6686 6600 | 08 9999 2550
                        Mail: thevapeclub@helix.com.vn</div>
                    <div id="beta-instagram-feed">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Dịch vụ </h4>
                    <div>
                        <ul>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Địa chỉ</h4>
                        <div>
                            <div class="contact-info">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.0508336824805!2d106.7146250449666!3d10.802498989957753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528a459cb43ab%3A0x6c3d29d370b52a7e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIdXRlY2g!5e0!3m2!1svi!2s!4v1591082086559!5m2!1svi!2s" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- #footer -->
<div class="copyright">
    <div class="clearfix"></div>
</div>
<!-- .copyright -->
<!-- include js files -->
<script src="<?= base_url() ?>assets/dest/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="<?= base_url() ?>assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="<?= base_url() ?>assets/dest/vendors/animo/Animo.js"></script>
<script src="<?= base_url() ?>assets/dest/vendors/dug/dug.js"></script>
<script src="<?= base_url() ?>assets/dest/js/scripts.min.js"></script>
<script src="<?= base_url() ?>assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url() ?>assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= base_url() ?>assets/dest/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/dest/js/wow.min.js"></script>
<!--customjs-->
<script src="<?= base_url() ?>assets/dest/js/custom2.js"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 150) {
                $(".header-bottom").addClass('fixNav')
            } else {
                $(".header-bottom").removeClass('fixNav')
            }
        })
    })
</script>
</body>

</html>