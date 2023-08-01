<?php include "header.php"; 

if (isset($_POST['aranan'])) {
    $aranan=$_POST['aranan'];
} else {
    $aranan=@$_GET['aranan'];

}




$sorgu=$db->prepare("SELECT * from icerik where icerik_ad LIKE ?");
$sorgu->execute(array("%$aranan%"));
$say=$sorgu->rowCount();


?>
			<div role="main" class="main">
    <div class="container">
        <div class="row pt-xl">

            <div class="col-md-7">

                <h1 class="mt-xl mb-none">Sorgu Sonuçları</h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <div class="row">

                    <?php 
                    if ($say==0) {?>

                    <div class="col-md-7">
                        <p><b><?php echo $aranan ?></b> kelimesi ile ilgili sonuç bulunamadı...</p>
                    </div>
                    </div>
                    <?php }   ?>

                    <?php 

                    
         $sayfada = 4;//sayfada gösterilecek icerik miktarı

         

         $toplam_icerik = $sorgu->rowCount();

         $toplam_sayfa = ceil($toplam_icerik / $sayfada);

         //eger sayfa girilmemişse 1 varsayalım
         $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
         
         //eger 1 den kücük bir sayfa sayısı girilmemişse 1 yapalım
         if($sayfa < 1) $sayfa = 1;

         //toplam sayfa sayımızdan  fazla yazılırsa en son sayfayı varsayalım.
         if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;

         $limit = ($sayfa - 1) * $sayfada;

         $iceriksor=$db->prepare("select * from icerik  where icerik_ad LIKE ? order by icerik_zaman  DESC limit $limit,$sayfada");
         $iceriksor->execute(array("%$aranan%"));


         while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC)) { ?>
         <!--başla--> 
        <div class="row mt-xl">
                            <div class="col-md-12">
                            <span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none ">
											
												<img src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-responsive" alt="" style="width: 395px; height: 250px; padding:10px;">
											
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><?php echo $icerikcek['icerik_ad']; ?></h2>
												<span class="post-meta">
													<span><?php echo $icerikcek['icerik_zaman']; ?> | <a href="#"><?php echo $icerikcek['icerik_keyword']; ?></a></span>
												</span>
												<?php echo substr( $icerikcek['icerik_detay'],0, 100); ?>...
												<div style="float:right; padding-bottom: 15px" class="indent-right">
												
												<a class="mt-md" href="haber-detay.php?icerik_id=<?php echo $icerikcek['icerik_id'] ?>">Devamını Oku... <i class="fa fa-long-arrow-right"></i></a>
									</div>
									</span>						
										</span>
									</span>
                            </div>
							</div>
                          
        <?php } ?>

        
      
        </div>
					</div>
				</div>
			</div>

			<?php include "footer.php"; ?>		