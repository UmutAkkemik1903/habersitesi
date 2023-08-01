<?php include 'header.php'; 

include '../netting/baglan.php';

$haksor=$db->prepare("SELECT * from hakkimizda where hak_id=?");
$haksor->execute(array(0));
$hakcek=$haksor->fetch(PDO::FETCH_ASSOC);



?>
<head> 
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

</head>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

             

            <div class="clearfix"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Genel Ayarlar <small> <?php
      
      if (@$_GET['durum']=='ok'){  ?>
          
       <b style="color:green;">Güncelleme Başarılı</b>
      
     <?php }  elseif (@$_GET['durum']=='no') {?>
        <b style="color:red;">Güncelleme Başarısız</b> <?php
     } ?> </small></h2>
      <ul class="nav navbar-right panel_toolbox">
      
       
          
      
      </ul>
      <div class="clearfix"></div>
    </div>
                <div class="x_content">

                <form  action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda Başlık <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hak_baslik" value="<?php echo $hakcek['hak_baslik'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda İçerik <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="ckeditor" id="editor1" name="hak_icerik" ><?php echo $hakcek['hak_icerik'] ?></textarea>
                        </div>
                      </div>
                        
 
                      <script type="text/javascript">
                        CKEDITOR.replace( 'editor1',
                        {
                          filebrowserBrowseUrl : '/ckfinder/ckfinder.html',
                          filebrowserImageBrowseUrl : '/ckfinder/ckfinder.html?type=Images',
                          filebrowserFlashBrowseUrl : '/ckfinder/ckfinder.html?type=Flash',
                          filebrowserUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                          filebrowserImageUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                          filebrowserFlashUploadUrl : '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                          filebrowserWindowWidth : '1000',
                          filebrowserWindowHeight : '700'
                        });

                        </script>


                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda Video <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hak_video"  value="<?php echo $hakcek['hak_video'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda Vizyon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hak_vizyon"  value="<?php echo $hakcek['hak_vizyon'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Hakkımızda Misyon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="hak_misyon"  value="<?php echo $hakcek['hak_misyon'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" name="hakkaydet" class="btn btn-primary">Güncelle</button>
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