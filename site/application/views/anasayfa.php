<?php $this->load->view('include/header'); ?>
  <!--Slider-->
  <section id="myslider">
    <div class="carousel slider" data-ride="carousel" id="cizgi">
      <ol class="carousel-indicators">
      <li data-target="#cizgi" data-slide-to="0" class="active"> </li>
      <li data-target="#cizgi" data-slide-to="1" > </li>
      <li data-target="#cizgi" data-slide-to="2" > </li>
      <li data-target="#cizgi" data-slide-to="3" > </li>

      </ol>

      <div class="carousel-inner" >
        <div class="carousel-item active">
          <img height="150px" src="<?php echo base_url('frontend/');?>img/slider/slide1.jpg"  class="d-block w-100 img-fluid">
        <div class="carousel carousel-caption d-none d-md-block">
          <h5  class="wow zoomIn">YÜKSEK PERFORMANS </h5>
          <p  class="wow fadeInDown">KİŞİYE  ÖZEL BİR ATMOSFER YÜKSEK PERFORMANS,İŞİMİZ!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('frontend/');?>img/slider/slide2.jpg"  class="d-block w-100 img-fluid">
          <div class="carousel carousel-caption d-none d-md-block">
            <h5  class="wow zoomIn">YÜKSEK PERFORMANS </h5>
            <p  class="wow fadeInDown">KİŞİYE  ÖZEL BİR ATMOSFER YÜKSEK PERFORMANS,İŞİMİZ!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('frontend/');?>img/slider/slide1.jpg"  class="d-block w-100 img-fluid">
          <div class="carousel carousel-caption d-none d-md-block">
            <h5  class="wow zoomIn">YÜKSEK PERFORMANS </h5>
            <p  class="wow fadeInDown">KİŞİYE  ÖZEL BİR ATMOSFER YÜKSEK PERFORMANS,İŞİMİZ!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('frontend/');?>img/slider/slide2.jpg"  class="d-block w-100 img-fluid">
          <div class="carousel carousel-caption d-none d-md-block">
            <h5  class="wow zoomIn">YÜKSEK PERFORMANS </h5>
            <p  class="wow fadeInDown">KİŞİYE  ÖZEL BİR ATMOSFER YÜKSEK PERFORMANS,İŞİMİZ!</p>
          </div>
        </div>

      </div>

      <a href="#cizgi" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#cizgi" class="carousel-control-next" role="button" data-slide="prev">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>
 </section>
       <!--slide son--->



    <!--Yüksek Performans-->
      <div class="container mt-5 pt-5">
      <div class="col-md-12">
        <img src="<?php echo base_url('frontend/');?>img/yuksek-performans.png" class="img-fluid">

        </div>
      </div>

      <!--Uygun Fiyat-->
      <div class="container ">
        <div class="col-md-12 text-right wow fadeInLeft ">
          <h4 class="wow fadeInLeft">Uygun Fiyatlı,Kaliteli ve Uygun Dizayn</h4>
          </div>
        </div>

         <!--İçerik-->
         <section id="content-index">
         <div class="row">
         <div class="col-lg-6 wow fadeInLeft">
         <img src="<?php echo base_url('frontend/');?>img/img-index.jpg" class="img-fluid">
         </div>

         <div class="col-lg-6">
         <div class="icerek">
         <p class="p1 wow fadeInRight">TEKNOLOJİ GELİŞTİRME MERKEZİ </p>
               <h3 class="wow fadeInRight" data-wow-duration="1.5s">DRON ÇEKİMLERİ</h3>
               <p class="p2 wow fadeInRight" data-wow-duration="2s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, animi voluptates corrupti sed necessitatibus officia deleniti culpa ducimus distinctio? Ratione iusto eum et sapiente qui vel nobis omnis amet quae!</p>
               <button class="btn btn-secondary mt-3  wow fadeInRight" data-wow-duration="3s">Devamını Oku</button>
              </div>
        </div>


             </div>

          </section>

     </div> <!-- cerceve sonu -->

     <?php $this->load->view('include/footer'); ?>
