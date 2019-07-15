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
  <div class="prelative container mx-auto">
    <div class="row">
      <div class="col-md-20">
      <img href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>" src="<?php echo $this->assetBaseurl; ?>logo-atas.png" alt="" class="img img-fluid">
      </div>
      <div class="col-md-40">
        <div class="menu-block-top text-right align-middle">
          <div class="d-inline-block mx-2 calls_info align-middle">
            OPMS HOTLINE
            <img src="<?php echo $this->assetBaseurl; ?>wa-atas.png" alt="" class="d-inline px-2 img img-fluid">
            <a href="#"><b>0812 3500 9900</b></a>
          </div>
          <div class="separate_line_white d-inline-block align-middle"></div>
          <div class="languages d-inline-block align-middle">
            <ul class="m-0 list-unstyled">
              <li class="active"><a href="#"rel="noopener noreferrer">INDONESIA</a></li>
              <li class="separator"></li>
              <li class="kanan-eng"><a href="#"rel="noopener noreferrer">ENGLISH</a></li>
            </ul>
          </div>

        </div>
        <div class="menu-block-bottom">
          <ul class="list-inline menuuu">
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Tentang Kami</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang'=>Yii::app()->language)); ?>">layanan</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubinvest', 'lang'=>Yii::app()->language)); ?>">hubungan investor</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">karir</a></li>
            <li class="list-inline-item menu paling-kanan"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubungi', 'lang'=>Yii::app()->language)); ?>">Hubungi Kami</a></li>
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

<section id="myAffix" class="header-affixs affix-top">
  <!-- <div class="clear height-15"></div> -->
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">
            <img href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>" src="<?php echo $this->assetBaseurl; ?>logo-atas.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right"> 
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Tentang Kami</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang'=>Yii::app()->language)); ?>">layanan</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubinvest', 'lang'=>Yii::app()->language)); ?>">hubungan investor</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">karir</a></li>
            <li class="list-inline-item menu paling-kanan"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubungi', 'lang'=>Yii::app()->language)); ?>">Hubungi Kami</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>

<header class="header-mobile homepage_head">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>opms-logo.png" alt="" class="img img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang'=>Yii::app()->language)); ?>">Home</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang'=>Yii::app()->language)); ?>">Tentang Kami</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/layanan', 'lang'=>Yii::app()->language)); ?>">layanan</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubinvest', 'lang'=>Yii::app()->language)); ?>">hubungan investor</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/career', 'lang'=>Yii::app()->language)); ?>">karir</a></li>
            <li class="list-inline-item menu paling-kanan"><a href="<?php echo CHtml::normalizeUrl(array('/home/hubungi', 'lang'=>Yii::app()->language)); ?>">Hubungi Kami</a></li>  
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
</header>

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

