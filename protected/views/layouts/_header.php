<?php 
    $e_activemenu = $this->action->id;
    $controllers_ac = $this->id;
    $session=new CHttpSession;
    $session->open();
    $login_member = $session['login_member'];

    $active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>


<!-- <section class="header-top">
    <div class="prelative container-header">
        <div class="row">
            <div class="col-md-45">

            </div>
            <div class="col-md-15">
                <div class="box-telp">
                    <p>
                        <a href="#"><span><img src="<?php echo $this->assetBaseurl; ?>phone-white.png" alt=""></span> 081 6550 2656</a>
                    </p>
                </div>
                <div class="contact">
                    <a href="#">
                        <p>CONTACT</p>
                    </a>
                </div>
                <div class="bahasa">
                    <p>
                        <a href="#"><span class="active">EN</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>IN</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->


<header class="head <?php if ($active_menu_pg != 'home/index'): ?>insides-head<?php endif ?>">
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-15">
        <div class="image"><img src="<?php echo $this->assetBaseurl; ?>DESIGN2_04.jpg" alt=""></div>
      </div>
      <div class="col-md-45">
        <div class="menu-block-bottom">
          <ul class="list-inline">
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
            <li class="list-inline-item menu"><a href="#">tentang kami</a></li>
            <li class="list-inline-item menu"><a href="#">produk</a></li>
            <li class="list-inline-item menu"><a href="#">proses & kualitas</a></li>
            <li class="list-inline-item menu"><a href="#">hubungi kami</a></li>
            <li class="list-inline-item wa"><a href="#">wa <span><img src="<?php echo $this->assetBaseurl; ?>WA-Logo.png" alt="">0812 3500 8800</span></a>
            </li>      
            <li class="list-inline-item border-garis"><div class="garis"></div></li>      
            <li class="list-inline-item bahasa1 active"><a href="#">indonesia</a></li>
            <li class="list-inline-item bahasa2">-</li>
            <li class="list-inline-item bahasa3"><a href="#">english</a></li>      
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- <div class="menu-block-bottom text-right cmenubot">
  <ul class="list-inline text-right">
    <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
    <li class="list-inline-item menu"><a href="#">tentang kami</a></li>
    <li class="list-inline-item menu"><a href="#">produk</a></li>
    <li class="list-inline-item menu"><a href="#">proses & kualitas</a></li>
    <li class="list-inline-item menu"><a href="#">hubungi kami</a></li>
  </ul>
</div> -->

<!-- <header class="header-mobile homepage_head">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>logo-header.png" alt="" class="img img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">About Us</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product', 'lang'=>Yii::app()->language)); ?>">Our Products</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/project', 'lang'=>Yii::app()->language)); ?>">Our Projects</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/partner', 'lang'=>Yii::app()->language)); ?>">Our Partners</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">Career</a></li>
      <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang'=>Yii::app()->language)); ?>">Contact</a></li>      
      <li class="nav-item">
      <?php
      $get = $_GET; $get['lang'] = 'en';
      ?>
      <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="ENG">EN | </a>
      <a href="<?php echo $this->createUrl($this->route, $get) ?>" title="Bahasa">ID</a>
      </li>
    </ul>
  </div>
  </nav>
</header> -->

<script type="text/javascript">
  $(function(){

  var sn_width = $(window).width();
  if (sn_width > 1150) {

      $(window).scroll(function(){
        var sntop1 = $(window).scrollTop();

        if(sntop1 > 115){
          // console.log(sntop1);
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        }else{
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>



<script>
  $(document).ready(function(){
    $("#headerproduct").css("display","none");
  });
</script>

