<?php 
ob_start();
session_start();
include 'baglan.php';

//Login İşlemleri----------------------------

if (isset($_POST['loggin'])) {
  $kullanici_ad=$_POST['kullanici_ad'];
  $kullanici_password=md5($_POST['kullanici_password']);
 
   if ($kullanici_ad && $kullanici_password) {
       $kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_ad=:ad and kullanici_password=:sifre");
       $kullanicisor->execute(array(
        'ad' => $kullanici_ad,
        'sifre' => $kullanici_password

       )); 
       $say=$kullanicisor->rowCount();
   
   if ($say>0) {
       $_SESSION['kullanici_ad'] = $kullanici_ad;
      
       header('Location:../production/index.php');
  
    } else {
      
        header('Location:../production/login.php?login=no');
   }
    }

}
//Yönetim Paneli Ayarlar Başlangıç
if(isset($_POST['genelayarkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
    ayar_siteurl=:siteurl,
    ayar_title=:title,
    ayar_description=:descriptioon,
    ayar_keywords=:keywords,
    ayar_author=:author

    WHERE ayar_id=0");

 $update=$ayarkaydet->execute(array(
'siteurl' => $_POST['ayar_siteurl'],
'title' => $_POST['ayar_title'],
'descriptioon' => $_POST['ayar_description'],
'keywords' => $_POST['ayar_keywords'],
'author' => $_POST['ayar_author']

));   

if ($update) {
   header("Location:../production/genel-ayar.php?durum=ok");
}else {
    header("Location:../production/genel-ayar.php?durum=no");
}




}


if(isset($_POST['iletisimkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
    ayar_tel=:tel,
    ayar_gsm=:gsm,
    ayar_faks=:faks,
    ayar_mail=:mail,
    ayar_adres=:adres,
    ayar_il=:il,
    ayar_ilce=:ilce,
    ayar_mesai=:mesai

    WHERE ayar_id=0");

 $update=$ayarkaydet->execute(array(
'tel' => $_POST['ayar_tel'],
'gsm' => $_POST['ayar_gsm'],
'faks' => $_POST['ayar_faks'],
'mail' => $_POST['ayar_mail'],
'adres' => $_POST['ayar_adres'],
'il' => $_POST['ayar_il'],
'ilce' => $_POST['ayar_ilce'],
'mesai' => $_POST['ayar_mesai']

));   

if ($update) {
   header("Location:../production/iletisim-ayar.php?durum=ok");
}else {
    header("Location:../production/iletisim-ayar.php?durum=no");
}




}


if(isset($_POST['apikaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
    ayar_recapctha=:recapctha,
    ayar_googlemap=:map,
    ayar_analystic=:anal


    WHERE ayar_id=0");

 $update=$ayarkaydet->execute(array(
'recapctha' => $_POST['ayar_recapctha'],
'map' => $_POST['ayar_googlemap'],
'anal' => $_POST['ayar_analystic']


));   

if ($update) {
   header("Location:../production/api-ayar.php?durum=ok");
}else {
    header("Location:../production/api-ayar.php?durum=no");
}




}



if(isset($_POST['sosyalkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
    ayar_facebook=:facebook,
    ayar_twitter=:twitter,
    ayar_youtube=:youtube,
    ayar_google=:google


    WHERE ayar_id=0");

 $update=$ayarkaydet->execute(array(
'facebook' => $_POST['ayar_facebook'],
'twitter' => $_POST['ayar_twitter'],
'youtube' => $_POST['ayar_youtube'],
'google' => $_POST['ayar_google']


));   

if ($update) {
   header("Location:../production/sosyal-ayar.php?durum=ok");
}else {
    header("Location:../production/sosyal-ayar.php?durum=no");
}




}

if(isset($_POST['mailkaydet'])) {

    $ayarkaydet=$db->prepare("UPDATE ayar SET 
    ayar_smtphost=:smtphost,
    ayar_smtppassword=:puser,
    ayar_smtpuser=:pass,
    ayar_smtpport=:port


    WHERE ayar_id=0");

 $update=$ayarkaydet->execute(array(
'smtphost' => $_POST['ayar_smtphost'],
'puser' => $_POST['ayar_smtppassword'],
'pass' => $_POST['ayar_smtpuser'],
'port' => $_POST['ayar_smtpport']


));   

if ($update) {
   header("Location:../production/mail-ayar.php?durum=ok");
}else {
    header("Location:../production/mail-ayar.php?durum=no");
}




}

//Yönetim Paneli Bitiş
//------------------------------------------------------------------------------------------//

//Yönetim Paneli Hakkımızda Başlangıc


if(isset($_POST['hakkaydet'])) {

    $hakkaydet=$db->prepare("UPDATE hakkimizda SET 
    hak_baslik=:bas,
    hak_icerik=:icerik,
    hak_video=:video,
    hak_vizyon=:vizyon,
    hak_misyon=:misyon

    WHERE hak_id=0");

 $update=$hakkaydet->execute(array(
'bas' => $_POST['hak_baslik'],
'icerik' => $_POST['hak_icerik'],
'video' => $_POST['hak_video'],
'vizyon' => $_POST['hak_vizyon'],
'misyon' => $_POST['hak_misyon']


));   

if ($update) {
   header("Location:../production/hakkimizda.php?durum=ok");
}else {
    header("Location:../production/hakkimizda.php?durum=no");
}




}
//Bitiş

//----------------------------------------------------------------------------------------
//Slider Başlangıç

if (isset($_POST['sliderkaydet'])) 
 {

 $uploads_dir = '../../dimg/slider';
        @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
        @$name = $_FILES['slider_resimyol']["name"];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $hanedan=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $kaydet=$db->prepare("INSERT INTO slider (slider_resimyol, slider_ad, slider_link, slider_sira, slider_durum) VALUES   (:resimyol, :ad,  :link, :sira, :durum )");
  $insert=$kaydet->execute(array(
  'ad'=> $_POST['slider_ad'],
  'link'=> $_POST['slider_link'],
  'sira'=> $_POST['slider_sira'],
  'durum'=> $_POST['slider_durum'],
  'resimyol'=>$hanedan
   ));

      
    if ($insert) {
      
      Header("Location:../production/slider.php?durum=ok");

    } else {


        Header("Location:../production/slider.php?durum=no");
    }

    }
    //Slider Sil

    if ($_GET['slidersil']=="ok"&isset($_GET['slider_resimyol'])) {
 
 
        $sil=$db->prepare("DELETE from slider WHERE slider_id=:slider_id");
        $kontrol=$sil->execute(array(
         'slider_id' => $_GET['slider_id']
        ));
        $resimyol=$_GET['slider_resimyol'];
        $resimyolson="../../$resimyol";
          unlink($resimyolson);
         
        
         if ($kontrol) {
       
          
         header("Location:../production/slider.php?durum=ok");
          
        } else {
          header("Location:../production/slider.php?durum=no");
          
         }
         
        
       }

       //Slider Düzenle

       if(isset($_POST['sliderduzenle'])) {


        
        if ($_FILES['slider_resimyol']["size"] > 0) {
            
                    $uploads_dir = '../../dimg/slider';
                @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
                @$name = $_FILES['slider_resimyol']["name"];
        $benzersizsayi1=rand(20000,32000);
        $benzersizsayi2=rand(20000,32000);
        $benzersizsayi3=rand(20000,32000);
        $benzersizsayi4=rand(20000,32000);
        $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
        $hanedan=substr($uploads_dir, 6)."/".$benzersizad.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $duzenle=$db->prepare("UPDATE slider SET 
        slider_ad=:sad,
        slider_link=:slink,
        slider_sira=:ssira,
        slider_durum=:sdurum,
        slider_resimyol=:syol
        
    
        WHERE slider_id={$_POST['slider_id']}");
    
     $update=$duzenle->execute(array(
    'sad' => $_POST['slider_ad'],
    'slink' => $_POST['slider_link'],
    'ssira' => $_POST['slider_sira'],
    'sdurum' => $_POST['slider_durum'],
    'syol' => $hanedan
    
    
    
    ));   
    $slider_id=$_POST['slider_id'];
    
    if ($update) {
        $resimsilunlink=$_POST['slider_resimyol'];
        unlink("../../$resimsilunlink");

       header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
    }else {
        header("Location:../production/slider-duzenle.php?durum=no");
    }
    
}
            
     else {
            
      
        

        $duzenle=$db->prepare("UPDATE slider SET 
        slider_ad=:sad,
        slider_link=:slink,
        slider_sira=:ssira,
        slider_durum=:sdurum
        
    
        WHERE slider_id={$_POST['slider_id']}");
    
     $update=$duzenle->execute(array(
    'sad' => $_POST['slider_ad'],
    'slink' => $_POST['slider_link'],
    'ssira' => $_POST['slider_sira'],
    'sdurum' => $_POST['slider_durum']
    
    
    
    ));   
    $slider_id=$_POST['slider_id'];
    
    if ($update) {
       header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");
    }else {
        header("Location:../production/slider-duzenle.php?durum=no");
    }
    
}

}
//slider düzenle bitiş---------------------------------------------------------------------------------
//İçerik Ekle---------------------------------------------------------
if (isset($_POST['ickaydet'])) 
 {

 $uploads_dir = '../../dimg/icerik';
        @$tmp_name = $_FILES['icerik_resimyol']["tmp_name"];
        @$name = $_FILES['icerik_resimyol']["name"];
 $benzersizsayi1=rand(20000,32000);
 $benzersizsayi2=rand(20000,32000);
 $benzersizsayi3=rand(20000,32000);
 $benzersizsayi4=rand(20000,32000);
 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $hanedan=substr($uploads_dir, 6)."/".$benzersizad.$name;
 @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

 $tarih=$_POST['icerik_tarih'];
 $saat=$_POST['icerik_saat'];
 $zaman = $tarih." ".$saat;

 $kaydet=$db->prepare("INSERT INTO icerik (icerik_resimyol, icerik_ad, icerik_zaman, icerik_detay, icerik_keyword, icerik_durum) VALUES   (:resimyol, :ad, :zaman, :link, :sira, :durum )");
  $insert=$kaydet->execute(array(
  'ad'=> $_POST['icerik_ad'],
  
  'link'=> $_POST['icerik_detay'],
  'sira'=> $_POST['icerik_keyword'],
  'durum'=> $_POST['icerik_durum'],
  'resimyol'=>$hanedan,
  'zaman'=>$zaman
   ));

      
    if ($insert) {
      
      Header("Location:../production/icerik.php?durum=ok");

    } else {


        Header("Location:../production/icerik.php?durum=no");
    }

    }
    //---------------içerik Düzenle----------------------------------------

    if(isset($_POST['icerikduzenle'])) {


        
        if ($_FILES['icerik_resimyol']["size"] > 0) {
            
                    $uploads_dir = '../../dimg/slider';
                @$tmp_name = $_FILES['icerik_resimyol']["tmp_name"];
                @$name = $_FILES['icerik_resimyol']["name"];
        $benzersizsayi1=rand(20000,32000);
        $benzersizsayi2=rand(20000,32000);
        $benzersizsayi3=rand(20000,32000);
        $benzersizsayi4=rand(20000,32000);
        $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
        $hanedan=substr($uploads_dir, 6)."/".$benzersizad.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $tarih=$_POST['icerik_tarih'];
        $saat=$_POST['icerik_saat'];
        $zaman = $tarih." ".$saat;

        $duzenle=$db->prepare("UPDATE icerik SET 
        icerik_resimyol=:resimyol,
        icerik_ad=:ad,
        icerik_zaman=:zaman,
        icerik_detay=:link,
        icerik_keyword=:sira,
        icerik_durum=:durum
      
        
    
        WHERE icerik_id={$_POST['icerik_id']}");
    
     $update=$duzenle->execute(array(
    'ad' => $_POST['icerik_ad'],
    'link' => $_POST['icerik_detay'],
    'sira' => $_POST['icerik_keyword'],
    'durum' => $_POST['icerik_durum'],
    'resimyol' => $hanedan,
    'zaman' => $zaman
    
    
    
    ));   
    $icerik_id=$_POST['icerik_id'];
    
    if ($update) {
        $resimsilunlink=$_POST['icerik_resimyol'];
        unlink("../$resimsilunlink");

       header("Location:../production/icerik-duzenle.php?icerik_id=$icerik_id&durum=ok");
    }else {
        header("Location:../production/icerik-duzenle.php?durum=no");
    }
    
}
            
     else {
            
      
        

        $duzenle=$db->prepare("UPDATE icerik SET 
       icerik_ad=:ad,
        
        icerik_detay=:link,
        icerik_keyword=:sira,
        icerik_durum=:durum
    
        WHERE icerik_id={$_POST['icerik_id']}");
    
    $update=$duzenle->execute(array(
        'ad' => $_POST['icerik_ad'],
        'link' => $_POST['icerik_detay'],
        'sira' => $_POST['icerik_keyword'],
        'durum' => $_POST['icerik_durum']
    
    
    ));   
    $icerik_id=$_POST['icerik_id'];
    
    if ($update) {
       header("Location:../production/icerik-duzenle.php?slider_id=$icerik_id&durum=ok");
    }else {
        header("Location:../production/icerik-duzenle.php?durum=no");
    }
    
}

}

//İçerik Sil

if ($_GET['iceriksil']=="ok"&isset($_GET['icerik_resimyol'])) {
 
 
    $sil=$db->prepare("DELETE from icerik WHERE icerik_id=:icerik_id");
    $kontrol=$sil->execute(array(
     'icerik_id' => $_GET['icerik_id']
    ));
    $resimyol=$_GET['icerik_resimyol'];
    $resimyolson="../../$resimyol";
      unlink($resimyolson);
     
    
     if ($kontrol) {
   
      
     header("Location:../production/icerik.php?durum=ok");
      
    } else {
      header("Location:../production/icerik.php?durum=no");
      
     }
     
    
   }

   //Menü İşlemleri-------------------------------------------------

   //MEnü Kaydet-------------------------------------

   if (isset($_POST['menukaydet'])) 
   {
  
   $kaydet=$db->prepare("INSERT INTO menu (menu_ust, menu_ad, menu_url, menu_detay, menu_sira, menu_durum) VALUES  
    (:ust, :ad, :urll, :detay, :sira, :durum )");
    $insert=$kaydet->execute(array(
    'ust'=> $_POST['menu_ust'],
    
    'ad'=> $_POST['menu_ad'],
    'urll'=> $_POST['menu_url'],
    'detay'=> $_POST['menu_detay'],
    'sira'=> $_POST['menu_sira'],
    'durum'=> $_POST['menu_durum']
   
     ));
  
        
      if ($insert) {
        
        Header("Location:../production/menu.php?durum=ok");
  
      } else {
  
  
          Header("Location:../production/menu.php?durum=no");
      }
  
      }
      //Menü Düzenle--------------------
      
      if (isset($_POST['menuduzenle'])){
        $ayarkaydet=$db->prepare("UPDATE menu SET
         menu_ad=:ad,
         menu_url=:url,
         menu_detay=:detay,
         menu_sira=:sira,
         menu_durum=:durum
         WHERE menu_id={$_POST['menu_id']}");
        $update=$ayarkaydet->execute(array(
         'ad'=> $_POST['menu_ad'],
         'url'=> $_POST['menu_url'],
         'detay'=> $_POST['menu_detay'],
         'sira'=> $_POST['menu_sira'],
         'durum'=> $_POST['menu_durum']
         ));
        
        $menu_id=$_POST['menu_id'];
        if ($update)
        {
         header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");
        }
        else
        {
         header("Location:../production/menu-duzenle.php?durum=no");
        }
       }
            
    

 
      
      //Menü Sil----------------------------------
      if ($_GET['menusil']=="ok") {
        $sil=$db->prepare("DELETE from menu where menu_id=:menu_id");
        $kontrol=$sil->execute(array(
       
         'menu_id' =>$_GET['menu_id']
       
         ));
       
        if ($kontrol) 
        {
       
       
         header("Location:../production/menu.php?durum=ok");
        }
        else
        {
         header("Location:../production/menu.php?durum=no");
        }
       
       
       }
       
       
       if ($_GET['altmenusil']=="ok") {
        $sil=$db->prepare("DELETE from menu where menu_id=:menu_ust");
        $kontrol=$sil->execute(array(
       
         'menu_ust' =>$_GET['menu_ust']
       
         ));
       
        if ($kontrol) 
        {
       
       
         header("Location:../production/menu.php?durum=ok");
        }
        else
        {
         header("Location:../production/menu.php?durum=no");
        }
       
       
       }

       //Logo Düzenle/-----------------------------

    if(isset($_POST['logoduzen'])) {


        
        
            
                    $uploads_dir = '../../dimg';
                @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
                @$name = $_FILES['ayar_logo']["name"];
        $benzersizsayi4=rand(20000,32000);
        $hanedan=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

       
        $duzenle=$db->prepare("UPDATE ayar SET
        ayar_logo=:logo
        WHERE ayar_id=0");
    
     $update=$duzenle->execute(array(
   
   
    'logo' => $hanedan
 
    ));   
    
    
    if ($update) {
        $resimsilunlink=$_POST['logo-sil'];
        unlink("../../$resimsilunlink");

       header("Location:../production/genel-ayar.php?durum=ok");
    }else {
        header("Location:../production/genel-ayar.php.php?durum=no");
    }
    

}

//Kullanıcı Düzenle/-----------------------------

if(isset($_POST['kullaniciresim'])) {


        
        
            
    $uploads_dir = '../../dimg/admin';
@$tmp_name = $_FILES['kullanici_resim']["tmp_name"];
@$name = $_FILES['kullanici_resim']["name"];
$benzersizsayi4=rand(20000,32000);
$hanedan=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


$duzenle=$db->prepare("UPDATE kullanici SET
kullanici_resim=:resim
WHERE kullanici_id={$_POST['kullanici_id']}");

$update=$duzenle->execute(array(


'resim' => $hanedan

));   


if ($update) {
$resimsilunlink=$_POST['resim-sil'];
unlink("../../$resimsilunlink");

header("Location:../production/kullanici-profil.php?durum=ok");
}else {
header("Location:../production/kullanici-profil.php.php?durum=no");
}


}

//---------------------------------------------------

if(isset($_POST['kullaniciduzenle'])) {

    $kullanici_password=md5($_POST['kullanici_password']);

    $ayarkaydet=$db->prepare("UPDATE kullanici SET 
    kullanici_adsoyad=:ad,
 
    kullanici_password=:passwordd

    WHERE kullanici_id={$_POST['kullanici_id']}");

 $update=$ayarkaydet->execute(array(
'ad' => $_POST['kullanici_adsoyad'],
'passwordd' => $kullanici_password
));   

if ($update) {
   header("Location:../production/kullanici-profil.php?durum=ok");
}else {
    header("Location:../production/kullanici-profil.php?durum=no");
}




}



    ?>