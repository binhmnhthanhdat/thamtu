<div class="detai_new_service">
    <div class="menuM">
        <?php
        if ($laygrouptintuc->num_rows() > 0) {
            $i = 0;
            if ($this->uri->segment(3) != "" && !is_numeric($this->uri->segment(3))) {
                $url = $this->uri->segment(3);
            } else if ($this->uri->segment(2) != "" && !is_numeric($this->uri->segment(2))) {
                $url = $this->uri->segment(2);
            } else if ($this->uri->segment(1) != "" && !is_numeric($this->uri->segment(1))) {
                $url = $this->uri->segment(1);
            }
            $sql = "select * from group_project where id=( select id_group_project from news where alias=\"" . $url . "\" limit 0,1)";
            $name = $this->db->query($sql);
            $kqame = $name->row();
            $idgroup_project = $kqame->id;
            $group_name = $kqame->name;
            if ($chitiettintuc->num_rows() > 0) {
                $kqchitiettintuc = $chitiettintuc->row();
                ?>
                <div class="breadcrumb">
                    <h2 style = "display:inline"><a class = "bread" href="<?php echo base_url(); ?>">Công ty thám tử </a> </h2>
                    <span class="breadcrumb-separator">»»</span>
                    <h2 style = "display:inline"><a class = "bread" href="<?php echo base_url();
                         echo $kqame->alias; ?>"><?php echo $group_name; ?></a>
                    </h2>
                    <span class="breadcrumb-separator">»»</span>
                    <h2 style = "display:inline"><a class = "bread" href="<?php echo base_url();echo $kqame->alias; ?>/<?php echo $this->uri->segment(2);?>">
                            <?php echo $kqchitiettintuc->title; ?></a>
                    </h2>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <div class="ContentMain ">
        <div class="fixTopContent"></div>
            <?php
            if ($chitiettintuc->num_rows() > 0) {
                $kqchitiettintuc = $chitiettintuc->row();
                ?>
            <div class="fixTopContent2"  style="padding-top: 21px;">
                <h3 class="title_content_service"><?php echo $kqchitiettintuc->title; ?></h3>
            </div>
            <div class="fixTopContent3">
                <div class="content_service">
                    <p class="rulerRed280"></p>
                    <div  class="description_service"><? echo $description;?> </div>
                    <p class="bold" > <?php echo $kqchitiettintuc->description; ?></p>
                    <div class="detai_service">
                       <?php echo $kqchitiettintuc->content; ?>
                    </div>
                </div>
                <div class="tagNews">
                    <p class="flLeft"><span class="fontsize13">Từ khóa tìm kiếm: </span>
                        <?php
                        $mangtag = explode(",", $kqchitiettintuc->tag);
                        for ($itag = 0; $itag < count($mangtag); $itag++) {
                        ?>
                            <a href="<? echo base_url();?>tag/<?php echo $this->util->alias(trim($mangtag[$itag])); ?>" title="<?php echo trim($mangtag[$itag]); ?>"> <?php echo trim($mangtag[$itag]); ?></a>,
                        <?php
                        }
                        ?>
                    </p>
                </div>
                <div class="comment_google">
                    <style type="text/css">
                        #google_comments iframe{height:210px;}
                    </style>
                    <script src="<? echo base_url();?>js/plusone.js">
                    </script>
                    <div id="google_comments"></div>
                    <script>
                        gapi.comments.render('google_comments', {
                            href: window.location,
                            width: '955',
                            height: '210',
                            first_party_property: 'BLOGGER',
                            view_type: 'FILTERED_POSTMOD'
                        });
                    </script>
                </div>
            <div class="service_other">
             <?php
            $idtinlienquan = $kqchitiettintuc->id_group_new;
            $sql = "select * from news where id_group_project=$idgroup_project and alias!='$url' order by id desc limit 0,10";
            $tinlienquan = $this->db->query($sql);
            if ($tinlienquan->num_rows() > 0) {
            ?>
                <div class="service_other_left">
                    <div class="service_other_left_title">Các tin dịch vụ liên quan</div>
                    <?php
                    foreach ($tinlienquan->result() as $kqtinlienquan) {
                        ?>
                            <div class="new_dichvu_lienquan">
                                <a class="image_new" href="<?php echo base_url(); ?><?php echo $kqame->alias; ?>/<?php echo $kqtinlienquan->alias; ?>" title="<?php echo $kqtinlienquan->title; ?>"><img src="<?php echo base_url();
                                        echo $kqtinlienquan->img; ?>" width="73" height="75" alt="<?php echo $kqtinlienquan->title; ?>" class="flLeft" /></a>
                                <div  class="content_news_dichvu">
                                    <h3  class="title_hidden"  > <a  href="<?php echo base_url(); ?><?php echo $kqame->alias; ?>/<?php echo $kqtinlienquan->alias; ?>" title="<?php echo $kqtinlienquan->title; ?>" style="font-size: 15px;color:#045E93;"> <?php echo $kqtinlienquan->title; ?></a> </h3>
                                    <div class="description_dichvu"> <?php echo $kqtinlienquan->description; ?></div>
                                </div>
                                <div class="clearFix"></div>
                            </div>

                    <?php }
                    ?>
                </div>
        <?php }
        ?>
            <div class="tintuc_lienquan_right">
                <div  class="tintuc_lienquan_right_title" >Các tin thi công liên quan</div>
                <?php
                $sql = "SELECT *  FROM `news` WHERE `id_group_project` = 0 AND `type` != 2 order by id desc limit 0,10";
                $list_tintuc_dv = $this->db->query($sql);
                if ($list_tintuc_dv->num_rows() > 0) {
                    foreach ($list_tintuc_dv->result() as $kqlist_tintuc_dv) {
                    $id_group_new = $kqlist_tintuc_dv->id_group_new;
                    $get_alias_group_news = $this->db->query("select alias from group_new where type=1 and id=\"" . $id_group_new . "\"   limit 0,1")->row()->alias;
                ?>
                    <div class="chitiet_tintuc_lienquan">
                        <a  class="image_new"  href="<?php echo base_url(); ?><?php echo $get_alias_group_news; ?>/<?php echo $kqlist_tintuc_dv->alias; ?>" title="<?php echo $kqlist_tintuc_dv->title; ?>"><img src="<?php echo base_url();
                             echo $kqlist_tintuc_dv->img; ?>" width="73" height="75" alt="<?php echo $kqlist_tintuc_dv->title; ?>" class="flLeft" /></a>
                        <div class="tintuc_lienquan_content">
                            <h4 class="title_hidden" > <a href="<?php echo base_url(); ?><?php echo $get_alias_group_news; ?>/<?php echo $kqlist_tintuc_dv->alias; ?>" title="<?php echo $kqlist_tintuc_dv->title; ?>" style="font-size: 15px;color:#045E93;"> <?php echo $kqlist_tintuc_dv->title; ?></a> </h4>
                            <div class="description"> <?php echo $kqlist_tintuc_dv->description; ?></div>
                        </div>
                        <div class="clearFix"></div>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="clearFix"></div>
            </div>
            <div class="gocRight"></div>
        </div>
         <?php
        }
        ?>
    </div>
</div>
<div class="clearFix"></div>
<article class="h-entry"  style="display: none;" >
        <p class="p-name"><?php echo $kqchitiettintuc->title; ?></p>
        <p>Published by <a class="p-author h-card" href="<?php echo base_url(uri_string());?>">ThangPV/posts</a>
            on <time class="published" datetime="<?php echo $kqchitiettintuc->post_date; ?>"><?php echo $kqchitiettintuc->post_date; ?></time></p>
        <p class="p-summary"><? echo $description;?></p>
        <div class="e-content">
              <?php  echo $kqlaygroupproject->content;?>
        </div>
    </article>
    <div itemscope itemtype="http://schema.org/LocalBusiness"  style="display: none;">
        <span itemprop="name"><?php echo $kqchitiettintuc->title; ?></span>
        <link itemprop="url" href="<?php echo base_url(uri_string());?>">
        <link itemprop="sameAs" href="<?php echo base_url(uri_string());?>">
        <link itemprop="image" href="<?php echo base_url();?>images/logo-cong-ty-tham-tu.png">
        <link itemprop="address" href="Hà Nội - Sài Gòn">
        <link itemprop="telephone" href="0941111335">

    </div>
    <div itemscope itemtype="http://schema.org/Recipe"  style="display: none;">
          <span itemprop="name"><?php echo $kqchitiettintuc->title; ?></span>
          <img itemprop="image" src="<?php echo base_url();?>images/logo-cong-ty-tham-tu.png" alt="<?php echo $kqchitiettintuc->title; ?>">
          <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                  <span itemprop="ratingValue">1</span>/<span itemprop="bestRating">10</span>
                  <span itemprop="ratingCount">100</span> bình chọn
          </div>
    </div>