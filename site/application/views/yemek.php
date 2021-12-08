<?php $this->load->view('include/header'); ?>
     <!--urunler-->
     <section id="urunler">
         <div class="row mt-20">
           <?php  foreach ($yemek_list as $sveri ) { ?>
             <div class="col-md-3 col-sm-6 text-center mx-auto">
               <div class="inBorder">
                  <a href="<?php echo base_url("yemekdetay/$sveri->url"); ?>"><img src="<?php echo base_url("frontend/img/urunler/$sveri->img_url"); ?>" alt="<?php echo $sveri->url; ?>" class="img-fluid"> </a>
              </div>
               <div class="mx-auto">
               <h6><a href="<?php echo base_url("yemekdetay/$sveri->url"); ?>"><?php echo $sveri->title ; ?></a></h6>
               <?php echo word_limiter($sveri->description, 10); ?>
               </div>
             </div>

         <?php } ?>

            </div>

          </section>

     </div>
     <?php $this->load->view('include/footer'); ?>
