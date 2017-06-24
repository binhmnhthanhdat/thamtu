<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-vn" xml:lang="vi-vn" >
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <?php 
         $sql="select * from setting ";	
         $setting= $this->db->query($sql);
         $kqsetting=$setting->row();
         ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title> <?php  if(isset($title)) { echo ucfirst(($title)); } else { echo ucfirst(($kqsetting->site_name));}?></title>
      <meta name="description" content="<?php  if(isset($description)){echo $description ;} else {echo $kqsetting->meta_desc;}?>" />
      <meta name="keywords" content="<?php  if(isset($keywords)){echo $keywords ;} else {echo $kqsetting->meta_key;}?>" />
      <meta name="robots" content="index, follow" />
      <meta name="copyright" content="VHE Corp" />
      <meta http-equiv="content-language" content="vi" />
      <link rel="alternate" href="http://tham-tu.com" hreflang="vi-vn" />
      <meta name="Author" content="VHE Corp" />
      <meta name="og:title" content="Công ty thám tử tại Hà Nội Sài Gòn | Dịch vụ thám tử"/>
      <meta name="og:description" content="Công ty thám tử đặc biệt HIỆU QUẢ chuyên nghiệp tại Hà Nội Sài Gòn. LH thám tử: 09696.51115"/>
      <meta name="og:url" content="http://tham-tu.com"/>
      <meta name="og:image" content="http://tham-tu.com/images/slide/cong-ty-tham-tu-ha-noi.jpg"/>
      <meta name="DC.Title" content="Công ty thám tử HIỆU QUẢ tại Hà Nội Sài Gòn" />
      <meta name="DC.Creator" content="VHE Corp" />
      <meta name="DC.Date" content="2013-31-3" />
      <meta name="DC.Format" scheme="DCMIType" content="Text" />
      <meta name="DC.Identifier" content="http://tham-tu.com" />
      <meta name="DC.Type" content="text/html" />
      <meta name="DC.Description" content="Công ty thám tử chuyên kinh nghiệm điều tra thông tin, tìm bằng chứng NGOẠI TÌNH. LH: 09696.51115" />
	  <link href="<?php echo base_url(uri_string());?>"  rel="canonical" />
      <link rel="publisher" href="https://plus.google.com/u/0/+ThangPV/posts"/>
      <link rel="shortcut icon" href="http://tham-tu.com/favicon.ico" />
      <meta name='revisit-after' content="2 days" />
      <meta name="geo.placename" content="Tương Mai, Hà Nội, Việt Nam" />
      <meta name="geo.position" content="20.987927;105.852349" />
      <meta name="geo.region" content="VN-Hà Nội" />
      <meta name="ICBM" content="20.987927, 105.852349" />
      	 <link href="tham-tu.com/rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
       <link type="text/css" href="<?php  echo base_url(); ?>css/style.css?binh=123456" rel="stylesheet"  />
       
       <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45950916-1', 'auto');
  ga('send', 'pageview');

</script>

   </head>
   <body>	 	 
	
      <?php $this->load->view('layout/menu') ?>
      <!--begin wrapper-->
      <div id="wrapper">
         <!--begin fixBody-->
         <div id="fixBody">
            <?php $this->load->view('layout/header') ?>
            <div id="MainBody" class="padT40">
               <?php $this->load->view($content) ?>
               <?php $this->load->view('layout/menufooter') ?>
            </div>
            <div class="clearFix"></div>
            <!-- footer begin -->
            <div id="footer">   				
               <?php  $this->load->view('layout/footer') ?>   
					<div style="line-height: 36px;position: fixed; right: 0px; bottom: 0px;z-index:9999;background:#000000;border-radius: 5px 5px 0px 0px;margin-right:50px;">
					<center><a href="tel:0941111335" style="color:white;line-height: 30px;padding:10px;font-size:16px;"> HOTLINE: 09696.51115 </a></center>

					 </div>			   
								</div>
            <!--end fotter-->
         </div>
         <!--end fixBody-->
      </div>
      <!--end wrapper-->

      <script type="text/javascript" src=" <?php  echo base_url(); ?>js/jquery.js"></script>
 <script src="<?php  echo base_url(); ?>js/jquery.bxslider.min.js"></script>
    
      <script type="text/javascript">
         $('.bxslider').bxSlider({
  auto: true,
  

  captions: true
});
      </script>
		
   </body>
</html>