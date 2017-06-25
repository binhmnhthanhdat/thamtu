<?php
$sql = "select * from setting ";
$setting = $this->db->query($sql);
$kqsetting = $setting->row();
?>
<div class="clearFix"></div>
<div style="background:#333333;" >
    <div class="menuBar" id="ddtopmenubar">
        <a href="<?php echo base_url(); ?>" class="nav-btn">CÔNG TY THÁM TỬ<span></span></a>
        <span class="top-nav-shadow"></span>
        <ul id="ulmenuBar">
            <li class="active"><a  style="padding-top: 10px;"  href="<?php echo base_url(); ?>"  title="Công ty thám tử tại Hà Nội Sài Gòn" class="upcase fontsize11"><img src="<?php echo base_url(); ?>/images/logo-cong-ty-tham-tu.png" alt='' style="    padding: 0 10px;" /></a></li>
            <?php
            $sql = "select * from cat_new where active=1 and parent=0 order by ord asc";
            $laymenu = $this->db->query($sql);
            if ($laymenu->num_rows() > 0) {
                foreach ($laymenu->result() as $kqlaymenu) {
                    ?>
                    <li><a  href="<?php
                    if ($kqlaymenu->type == 1) {
                        echo base_url('cong-ty');
                    } else if ($kqlaymenu->type == 2) {
                        echo base_url('gia-thue-dich-vu-tham-tu');
                    } else if ($kqlaymenu->type == 3) {
                        echo base_url('du-an');
                    } else if ($kqlaymenu->type == 4) {

                        echo base_url('tin-tuc');
                    } else if ($kqlaymenu->type == 5) {

                        echo base_url('tuyen-dung');
                    } else if ($kqlaymenu->type == 6) {

                        echo base_url('lien-he');
                    }
                    ?>"  title="<?php echo $kqlaymenu->name; ?>" class="upcase fontsize11"><span> <?php echo $kqlaymenu->name; ?></span></a></li>
                            <?php
                        }
                    }
                    ?>
        </ul>
        <div class="shareTop" style="float: left;">
            <div class="g-plusone"><script type="text/javascript">
                (function () {
                    var po = document.createElement('script');
                    po.type = 'text/javascript';
                    po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(po, s);
                })();
                function newPopup(url) {
                    popupWindow = window.open(url, 'popUpWindow', 'height=300,width=600,left=400,top=200,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes')
                }
                </script></div>
            <a href="javascript:thicongnoithat" onclick="newPopup('https://plus.google.com/share?url=<? echo base_url().uri_string();?>')" title="Chia sẻ trên Google" class="padL5" rel="nofollow"><img src=" <?php echo base_url(); ?>images/google.png" width="26" height="26" alt="Chia sẻ Google" /></a>
            <a href="javascript:thicongnoithat" onclick="newPopup('https://www.facebook.com/sharer.php?u=<? echo base_url().uri_string();?>')"  title="Chia sẻ trên Facebook" class="padL5" rel="nofollow"><img src=" <?php echo base_url(); ?>images/facebook.png" width="26" height="26" alt="Chia sẻ Facebook" /></a>
            <a href="javascript:thicongnoithat" onclick="newPopup('http://twitter.com/home?status=<? echo base_url().uri_string();?>')" title="Chia sẻ trên Twiter"  class="padL5" rel="nofollow"><img src=" <?php echo base_url(); ?>images/twiter.png" width="26" height="26" alt="Chia sẻ Twiter" /></a>
        </div>
        <div class="group_tieude">
            <h1 style = " padding-right: 10px;" class="tieude" title="<?php if (isset($title)) {
                        echo $title;
                    } else {
                        echo $kqsetting->site_name;
                    } ?>"><?php if (isset($title)) {
                        echo $title;
                    } else {
                        echo $kqsetting->site_name;
                    } ?>
            </h1>
            <div style="clear:both" >
                <p  style = "display: block; padding-right: 20px;" >Liên hệ công ty dịch vụ thám tử: 09696.51115</p>
            </div>
        </div>
    </div>
</div>
