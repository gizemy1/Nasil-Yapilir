<?php $this->load->view('include/header'); ?>
<?php $settings=get_settings(); ?>
<section id="iletisim">
         <div class="row mt-2">
         <div class="col-lg-7 harita">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385398.5898315072!2d28.7319909162893!3d41.00498227834485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa7040068086b%3A0xe1ccfe98bc01b0d0!2zxLBzdGFuYnVs!5e0!3m2!1sen!2str!4v1583613501768!5m2!1sen!2str" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>

         <div class="col-lg-4 mt-3  right">


               <h4>İLETİŞİM</h4>
               <p ><?php echo strip_tags($settings->address); ?></p>
               <p class="p1 mt-3"> <?php echo strip_tags($settings->phone_1); ?> </br> <?php echo strip_tags($settings->email); ?></br></p>

               <h4 class="mt-4 pb-3">Bize Yazın</h4>

               <form id="" class="margin-clear" role="form" method="post" action="<?php echo base_url("mesaj-gonder"); ?>">
              <div class="pb-3">
              <input type="text" id="name" name="name" class="form-control" placeholder=" * Adınız Soyadınız..." required="">
              </div>

              <div class="pb-3">
                <input type="email" id="email" name="email" class="form-control" placeholder=" * Mail Adresiniz" required="">
                </div>

                <div class="pb-3">
                 <input type="text" id="subject" name="subject" class="form-control" placeholder=" * Telefonunuz" required="">
                 </div>

                <div class="pb-3">
                 <input type="text" id="message" name="message" class="form-control" placeholder=" * Mesajınız" required="">
                 </div>

                 <div class="input-group ">
                   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                 <button type="submit" class="submit-button btn btn-default">Gönder</button>
                 <a href="<?php echo base_url('iletisim'); ?>" class="btn ml-4">İPTAL </a>
                </div>
               </form>

             </div>
         </div>
          </section>

     </div> <!-- cerceve sonu -->

     <?php $this->load->view('include/footer'); ?>
