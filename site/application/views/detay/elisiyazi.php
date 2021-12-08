<?php $this->load->view('include/header'); ?>


<section class="main-container">

<div class="container">
   <div class="row">
       <div class="main col-md-8">
           <h1 class="page-title"><?php echo $elisi->title; ?></h1>

               <div class="blogpost-content">
                               <div class="overlay-container">
                                   <a ><img src="<?php echo base_url("frontend/img/urunler/$elisi->img_url"); ?>" alt="<?php echo $elisi->url; ?>" class="img-fluid"> </a>
                               </div>
                   </div>
                   <p><a href="#"></a><?php echo $elisi->description; ?></p>

               </div>

   </div>
</div>
</section>

     <?php $this->load->view('include/footer'); ?>
