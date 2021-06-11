<div class="banner__slider">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php require_once 'Mvc/frontend/controllers/CategoryController.php';
        $category_controller = new CategoryController();
        $category_controller->getCategoryProduct();
        ?>
      </div>
      <div class="col-sm-6">
        <div class="slider">
          <img src="Assets/Frontend/images/banner_slider1.png" alt="">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="img_banner_center">
          <img src="Assets/Frontend/images/banner55.png" alt="">
        </div>
        <div class="img_banner_center">
          <img src="Assets/Frontend/images/banner77.png" alt="">
        </div>
      </div>
      <!--      <div class="col-sm-3">-->
      <!--        <div class="title__news">-->
      <!--          <div class="title__left">-->
      <!--            <i class="fa fa-signal"></i>&nbsp; &nbsp;Tin Khuyến Mãi-->
      <!--          </div>-->
      <!--          <div class="title__right">-->
      <!--            <a href=""><i class="fa fa-hand-o-right"></i> Xem tất cả</a>-->
      <!--          </div>-->
      <!--          <div style="clear: both"></div>-->
      <!--        </div>-->
      <!--        <div class="news__detail">-->
      <!--          <div class="detail__news1">-->
      <!--            <a href="">-->
      <!--              <div class="news__image">-->
      <!--                <img src="Assets/Frontend/images/mtban.jpg" alt="">-->
      <!--              </div>-->
      <!--              <div class="news__title">-->
      <!--                <h4>[Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại]-->
      <!--                  Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn</h4>-->
      <!--                <p>08/04/2021 - 17:30</p>-->
      <!--              </div>-->
      <!--            </a>-->
      <!--            <div style="clear:both"></div>-->
      <!--          </div>-->
      <!--          <div class="detail__news1">-->
      <!--            <a href="">-->
      <!--              <div class="news__image">-->
      <!--                <img src="Assets/Frontend/images/mtban.jpg" alt="">-->
      <!--              </div>-->
      <!--              <div class="news__title">-->
      <!--                <h4>[Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại]-->
      <!--                  Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn</h4>-->
      <!--                <p>08/04/2021 - 17:30</p>-->
      <!--              </div>-->
      <!--            </a>-->
      <!--            <div style="clear:both"></div>-->
      <!--          </div>-->
      <!--          <div class="detail__news1">-->
      <!--            <a href="">-->
      <!--              <div class="news__image">-->
      <!--                <img src="Assets/Frontend/images/mtban.jpg" alt="">-->
      <!--              </div>-->
      <!--              <div class="news__title">-->
      <!--                <h4>[Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại]-->
      <!--                  Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn</h4>-->
      <!--                <p>08/04/2021 - 17:30</p>-->
      <!--              </div>-->
      <!--            </a>-->
      <!--            <div style="clear:both"></div>-->
      <!--          </div>-->
      <!--          <div class="detail__news1">-->
      <!--            <a href="">-->
      <!--              <div class="news__image">-->
      <!--                <img src="Assets/Frontend/images/mtban.jpg" alt="">-->
      <!--              </div>-->
      <!--              <div class="news__title">-->
      <!--                <h4>[Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn [Khuyến mại]-->
      <!--                  Quà ngập tràn - Sale sập sàn [Khuyến mại] Quà ngập tràn - Sale sập sàn</h4>-->
      <!--                <p>08/04/2021 - 17:30</p>-->
      <!--              </div>-->
      <!--            </a>-->
      <!--            <div style="clear:both"></div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->
    </div>
  </div>
</div>
<div class="main">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img src="Assets/Frontend/images/banner14.jpg" width="100%" alt="">
      </div>
    </div>
    <div class="row" style="margin-top: 10px">
      <div class="col-sm-6">
        <img src="Assets/Frontend/images/banner16.jpg" width="100%" alt="">
      </div>
      <div class="col-sm-6">
        <img src="Assets/Frontend/images/banner15.jpg" width="100%" alt="">
      </div>
    </div>
  </div>
  <?php require_once 'Mvc/frontend/controllers/ProductController.php';
  $product_controller = new ProductController();
  $product_controller->hotProduct();
  ?>
  <div class="container">
    <div class="row" style="margin-top: 10px">
      <div class="col-sm-6">
        <img src="Assets/Frontend/images/banner22.jpg" width="100%" alt="">
      </div>
      <div class="col-sm-6">
        <img src="Assets/Frontend/images/banner33jpg.jpg" width="100%" alt="">
      </div>
    </div>
  </div>
  <?php require_once 'Mvc/frontend/controllers/ProductController.php';
  $product_controller = new ProductController();
  $product_controller->NewsProduct();
  ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="img__banner_center">
          <img src="Assets/Frontend/images/banner12.jpg" alt="">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="img__banner_center">
          <img src="Assets/Frontend/images/banner13.jpg" alt="">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="img__banner_center">
          <img src="Assets/Frontend/images/banner12.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'Mvc/frontend/controllers/ProductController.php ';
  $product_controller = new ProductController();
  $product_controller->SellingProducts();
  ?>
  <!--<div class="article-homepage bg-w loaded" id="js-article-homepage" style="margin-bottom: 100px;">-->
  <?php require_once 'Mvc/frontend/controllers/NewsController.php ';
  $new_controller = new NewsController();
  $new_controller->hotNews();
  ?>
</div>