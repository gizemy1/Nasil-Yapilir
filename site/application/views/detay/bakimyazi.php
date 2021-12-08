<?php $this->load->view('include/header'); ?>


<section class="main-container">

<div class="container">
   <div class="row">
       <div class="main col-md-8">
           <h1 class="page-title"><?php echo $bakim->title; ?></h1>

               <div class="blogpost-content">
                               <div class="overlay-container">
                                   <a ><img src="<?php echo base_url("frontend/img/urunler/$bakim->img_url"); ?>" alt="<?php echo $bakim->url; ?>" class="img-fluid"> </a>
                               </div>
                   </div>
                   <p><a href="#"></a><?php echo $bakim->description; ?></p>

               </div>

   </div>
</div>
</section>

     <?php $this->load->view('include/footer'); ?>
