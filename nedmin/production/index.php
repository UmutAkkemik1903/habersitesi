<?php include 'header.php';
$haksor=$db->prepare("SELECT * from hakkimizda where hak_id=?");
$haksor->execute(array(0));
$hakcek=$haksor->fetch(PDO::FETCH_ASSOC);

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Anasayfa</h3>
              </div>


            <div class="clearfix"></div>

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Yönetim Paneline Hoşgeldiniz... </h2>
      <ul class="nav navbar-right panel_toolbox">
       
       
        
      </ul>
      <div class="clearfix"></div>
    </div>
                <div class="x_content">

<p>Ayarlarınızı Sol Sekmeden Yapabilirsiniz.</p>


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