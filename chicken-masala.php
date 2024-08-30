<?php

include('header.php');

include('function.php');

?>
<section class="page-title-section bg-img cover-background" data-overlay-dark="6"
    data-background="/theme/img/bg/coriander-powder-bg.jpg"
    style="background-image: url(_/theme/img/bg/coriander-powder-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>
<div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12 content-area">
                <div class="ttm-single-product-details product">
                    <div class="ttm-single-product-info clearfix">
                        <div class="product-gallery images product-center">
                            <figure class="ttm-product-gallery__wrapper">
                                <div class="product-gallery__image">
                                    <img class="img-fluid" src="images/product/chicken-masala.jpg" alt="product-img">
                                    <h6 class="mt-3 txt-center size-heading">AVAILABILITY: 50 g | 100g </h6>
                                </div>
                            </figure>

                        </div>
                        <div class="summary entry-summary">
                            <p class="price mb-25">
                                <span class="Price-amount amount">
                                    <h2>Chicken Masala</h2>
                                </span>
                            </p>
                            <div class="product-details__short-description">
                                <p>Chicken tikka masala, dish consisting of marinated boneless chicken pieces that are traditionally
                                    cooked in a tandoor and then served in a subtly spiced tomato-cream sauce. salt. Chicken Masala
                                    Curry is a bold, spicy, and super flavorful Indian chicken curry made by cooking chicken in an
                                    onion tomato-based gravy. Chicken masala is a popular curried dish made with boneless chicken,
                                    ground spices, onions, tomatoes, cream and herbs.
                                </p>
                            </div>

                            <div class="content-inner active">
                                <h3>About this Item</h3>
                                <ul class="l-height">
                                    <li> Chicken Masala is an essential masala for Indian preparation of chicken</li>
                                    <li>Suitable for Chicken Tikka Masala, Chicken Masala, Butter Chicken, Chicken Tandoori
                                        Masala and more.</li>
                                    <li>Made using Low Temperature Grinding of several Indian spices</li>
                                </ul>
                            </div>
                            <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                <a href=<?php echo " $shoplink " ?> target=_blank class="cart_button ttm-btn ttm-btn-bgcolor-black ttm-btn-shape-round ttm-textcolor-white">Buy Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional-info">
            <h4 class="font-25 pt-20 pd-20">Additional Information</h4>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <div class="tbl-padding-20">
                            <table class="table table-striped">
                                <tbody>
                                    <tr style="background-color: #00460f; padding: 10px;border-radius: 10px;color: #fff;">
                                        <th scope="row" class="f-18">
                                            Health Benefits </th>
                                    </tr>
                                    <tr>
                                        <th scope="row"> <i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i>
                                        Good for bones
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row"> <i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i>
                                        Helps in building muscles </th>
                                    </tr>
                                    <tr>
                                        <th scope="row"> <i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i>
                                        Helps in weight loss
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="row"> <i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i>
                                        Treatment of common cold</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- content-inner end-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="tbl-padding-20">
                            <table class="table table-striped">
                                <tbody>
                                    <tr style="background-color: #00460f; padding: 10px;border-radius: 10px;color: #fff;">
                                        <th scope="row" class="f-18" colspan="2">Ingerdients (Nutrition Value Per 100g)</th>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"> </i> Energy (Calculated)</th>
                                        <td>421 kcal
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"> </i></i> Total Carbohydrates
                                        </th>
                                        <td>78 g</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"> </i> Protein</th>
                                        <td>5.9 g</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"> </i> Total Fat</th>
                                        <td>9.5 g</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i> Saturated Fatty Acid
                                        </th>
                                        <td>0.7 g</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i> Total Trans Fatty Acid

                                        </th>
                                        <td>0 g</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa fa-angle-double-right ttm-textcolor-skincolor"></i> Cholesterol

                                        </th>
                                        <td>0 g</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- content-inner end-->
                    </div>
                </div>
            </div>
        </div>

    </div><!-- row end -->
</div>
<?php
include('latest-product.php');

include('footer.php');

?>