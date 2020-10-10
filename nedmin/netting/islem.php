<?php
include "baglan.php";

if(isset($_POST["genelayarkaydet"])){

    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_siteurl=:siteurl,
    ayar_title=:title,
    ayar_description=:description,
    ayar_keywords=:keywords,
    ayar_author=:author
    WHERE ayar_id=1");

    $update=$ayarkaydet ->execute(array(
        'siteurl'=>$_POST['ayar_siteurl'],
        'title'=>$_POST['ayar_title'],
        'description'=>$_POST['ayar_description'],
        'keywords'=>$_POST['ayar_keywords'],
        'author'=>$_POST['ayar_author']
    ));
    
    if($update){
        Header("location:../production/genel-ayar.php ? durum=ok");
    }
      else{
        Header("location:../production/genel-ayar.php ? durum=no");
      }  
    

}
if(isset($_POST["iletisimayarkaydet"])){

  $ayarkaydet=$db->prepare("UPDATE ayar SET
  ayar_tel=:tel,
  ayar_gsm=:gsm,
  ayar_mail=:mail,
  ayar_fax=:fax,
  ayar_adres=:adres,
  ayar_ilce=:ilce,
  ayar_il=:il,
  ayar_mesai=:mesai
  WHERE ayar_id=1");

  $update=$ayarkaydet ->execute(array(
      'tel'=>$_POST['ayar_tel'],
      'gsm'=>$_POST['ayar_gsm'],
      'mail'=>$_POST['ayar_mail'],
      'fax'=>$_POST['ayar_fax'],
      'adres'=>$_POST['ayar_adres'],
      'ilce'=>$_POST['ayar_ilce'],
      'il'=>$_POST['ayar_il'],
      'mesai'=>$_POST['ayar_mesai']
  ));
  
  if($update){
      Header("location:../production/iletisim-ayar.php ? durum=ok");
  }
    else{
      Header("location:../production/genel-iletisim.php ? durum=no");
    }  
  

}
if(isset($_POST["apiayarkaydet"])){

  $ayarkaydet=$db->prepare("UPDATE ayar SET
  ayar_recapctha=:recapctha,
  ayar_googlemap=:googlemap,
  ayar_analystic=:analystic
  WHERE ayar_id=1");

  $update=$ayarkaydet ->execute(array(
      'recapctha'=>$_POST['ayar_recapctha'],
      'googlemap'=>$_POST['ayar_googlemap'],
      'analystic'=>$_POST['ayar_analystic']
  ));
  
  if($update){
      Header("location:../production/api-ayar.php ? durum=ok");
  }
    else{
      Header("location:../production/api-iletisim.php ? durum=no");
    }  
  

}
if(isset($_POST["sosyalayarkaydet"])){

  $ayarkaydet=$db->prepare("UPDATE ayar SET
  ayar_facebook=:facebook,
  ayar_twitter=:twitter,
  ayar_youtube=:youtube
  WHERE ayar_id=1");

  $update=$ayarkaydet ->execute(array(
      'facebook'=>$_POST['ayar_facebook'],
      'twitter'=>$_POST['ayar_twitter'],
      'youtube'=>$_POST['ayar_youtube']
  ));
  
  if($update){
      Header("location:../production/sosyal-ayar.php ? durum=ok");
  }
    else{
      Header("location:../production/sosyal-iletisim.php ? durum=no");
    }  
  

}
if(isset($_POST["mailayarkaydet"])){

  $ayarkaydet=$db->prepare("UPDATE ayar SET
  ayar_smtphost=:smtphost,
  ayar_smtpuser=:smtpuser,
  ayar_smtppasword=:smtppasword,
  ayar_smtpport=:smtpport
  WHERE ayar_id=1");

  $update=$ayarkaydet ->execute(array(
      'smtphost'=>$_POST['ayar_smtphost'],
      'smtpuser'=>$_POST['ayar_smtpuser'],
      'smtppasword'=>$_POST['ayar_smtppasword'],
      'smtpport'=>$_POST['ayar_smtpport']
    
  ));
  
  if($update){
      Header("location:../production/mail-ayar.php ? durum=ok");
  }
    else{
      Header("location:../production/mail-iletisim.php ? durum=no");
    }  
  

}

//hakkımızda kısmı

if(isset($_POST["hakkimizdakaydet"])){

  $hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET
  hakkimizda_baslik=:baslik,
  hakkimizda_icerik=:icerik,
  hakkimizda_video=:video,
  hakkimizda_vizyon=:vizyon,
  hakkimizda_misyon=:misyon
  WHERE hakkimizda_id=1");

  $update=$hakkimizdakaydet ->execute(array(
      'baslik'=>$_POST['hakkimizda_baslik'],
      'icerik'=>$_POST['hakkimizda_icerik'],
      'video'=>$_POST['hakkimizda_video'],
      'vizyon'=>$_POST['hakkimizda_vizyon'],
      'misyon'=>$_POST['hakkimizda_misyon']
  ));
  
  if($update){
      Header("location:../production/hakkimizda.php ? durum=ok");
  }
    else{
      Header("location:../production/hakkimizda.php ? durum=no");
    }  
  

}
?>