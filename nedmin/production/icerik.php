<?php include 'header.php'; 
 
include '../netting/baglan.php';
if (isset($_POST['arama'])) {
    $aranan=$_POST['aranan'];
    $iceriksor=$db->prepare("SELECT * from icerik where icerik_ad LIKE '%$aranan%' order by icerik_id ASC limit 25");
$iceriksor->execute();
$say=$iceriksor->rowCount();
} else {
    


$iceriksor=$db->prepare("SELECT * from icerik order by icerik_id DESC limit 25");
$iceriksor->execute();
$say=$iceriksor->rowCount();

}
?>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İçerik Ayarları   <small> 
                
      
      
              </div>
             
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                
                 <form action="" method="POST">
                 <div class="input-group">
                   
                  
                  <input type="text" class="form-control" name="aranan" placeholder="Arama...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama" >Ara!</button>
                    </span>
                  </div>
    </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

<div class="row">

  <div class="clearfix"></div>

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <div align="left" class="col-md-6">
          

            <?php 

            echo $say."  Kayıt Listelendi";




            if (@$_GET['durum']=='ok') {?>

            <b style="color: green;">Güncelleme Başarılı...</b>

            <?php   }

            elseif (@$_GET['durum']=='no') {?>

            <b style="color: red;">Güncelleme Yapılamadı...</b>

            <?php }
            ?>



          </small>  </h2><br>
        </div>
    <div align="right" class="col-md-6">
            <a href="icerik-ekle.php"><button   class="btn btn-success" >
            <i class="fa fa-plus" adia-hideden="true"></i> Yeni Ekle</button></a>
</div>
            
     
 
     
     
      <div class="clearfix"></div>
    </div>
                


                <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                            <th class="column-title ">İçerik Zaman </th>
                            <th class="column-title text-left">İçerik Ad </th>
                            
                            <th class="column-title text-center">icerik Durum </th>
                            <th width="80"; class="column-title"></th>
                            <th width="80"; class="column-title"></th>
                            
                           
                            
                          </tr>
                        </thead>


                        <tbody>

                                                <?php
                        

                      
                        while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC))  {
                        ?>
                                            
                       
                       
                       
                       
                       
                         <tr>
                           
                            <td><?php echo $icerikcek['icerik_zaman'] ?></td>
                            <td ><?php echo $icerikcek['icerik_ad'] ?></td>
                            <td class=" text-center"><?php 
                            if ($icerikcek['icerik_durum']=="1") {
                                echo "AKTİF";
                            } else {
                                echo "PASİF";
                            }
                            
                            
                            ?></td>
                           
                           
                            <td class="text-center "><a href="icerik-duzenle.php?icerik_id=<?php echo $icerikcek['icerik_id']; ?>"> <button style="width:100px;" class="btn btn-primary btn-xm" ><i class="success fa fa-pencil"adia-hideden="true"></i> Düzenle</button></a></td>
                           
                            <td class="text-center "><a href="../netting/islem.php?iceriksil=ok&icerik_id=<?php echo $icerikcek['icerik_id']; ?>&icerik_resimyol=<?php echo $icerikcek['icerik_resimyol']; ?>"><button style="width:100px;" class="btn btn-danger btn-xm" ><i class="success fa fa-trash"adia-hideden="true"></i> Sil</button></td>
                            
                            </td>
                          </tr>
                        <?php } ?>
                   
                        </tbody>
                      </table>
                </div>
                    </div>
</div>
</div>
</div>
                     
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       <?php include 'footer.php'; ?>