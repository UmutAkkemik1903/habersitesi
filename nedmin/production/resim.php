<?php include 'header.php'; 
 
include '../netting/baglan.php';
if (isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];
    $galerisor=$db->prepare("SELECT * from galeri where galeri_ad LIKE '%$aranan%' order by  galeri_sira ASC limit 25");
$galerisor->execute();
$say=$galerisor->rowCount();
} 

$galerisor=$db->prepare("SELECT * from galeri where galeri_id=?");
$galerisor->execute(array(0));
$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);
    


?>


        <!-- page content -->
        <div class="thumb-gallery">
       <div class="lightbox" data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
        <div class="owl-carousel owl-theme manual thumb-gallery-detail show-nav-hover" id="thumbGalleryDetail">
         
         <?php  
         

         $emlakresimler=explode('|', $galericek['emlak_resimyol']);
         foreach ($emlakresimler as $emlakresimbas) { 
         ?>
         <div>
          
          <a href="<?php echo $emlakresimbas ?>">
           <span class="thumb-info thumb-info-centered-info thumb-info-no-borders font-size-xl">
            <span class="thumb-info-wrapper font-size-xl">
             <img alt="Property Detail" src="<?php echo $emlakresimbas ?>" class="img-responsive">
             <span class="thumb-info-title font-size-xl">
              <span class="thumb-info-inner font-size-xl"><i class="icon-magnifier icons font-size-xl"></i></span>
             </span>
            </span>
           </span>
          </a>
         </div>


         <?php

         } ?>
 
        </div>
       </div>

       <div class="owl-carousel owl-theme manual thumb-gallery-thumbs mt" id="thumbGalleryThumbs">
        
        <?php  


        $emlakresimler=explode('|', $galericek['galeri_resimyol']);

        foreach ($emlakresimler as $emlakresimbas) { ?>

        
        <img src="<?php echo $emlakresimbas ?>"  class="img-responsive cur-pointer">


        <?php } ?>

       </div>
      </div>

     </div>
        <!-- /page content -->

       <?php include 'footer.php'; ?>