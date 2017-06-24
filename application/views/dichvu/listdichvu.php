<style>
    .breadcrumb {
        float: left;
        width: 97% !important;
        margin-bottom: 10px;
        border: 1px solid #DDD;
    }
    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px;
    }
    .breadcrumb-separator
    {
        padding: 0px 15px;
    }
    .bread
    {
        font-weight:bold;
        font-size: 16px;
    }
</style>
<div class="clearFix" ></div>
<!-- begin thietkeweb-->

<div  class="list_dichvu">
    <div class="menuM">

        <?php
        //$url=$this->uri->segment(3);
        if ($this->uri->segment(3) != "" && !is_numeric($this->uri->segment(3))) {
            $url = $this->uri->segment(3);
        } else if ($this->uri->segment(2) != "" && !is_numeric($this->uri->segment(2))) {
            $url = $this->uri->segment(2);
        } else if ($this->uri->segment(1) != "" && !is_numeric($this->uri->segment(1))) {
            $url = $this->uri->segment(1);
        }

        if ($url) {

            $sql = "select * from group_project where alias=\"" . $url . "\"";
            $laytengroup = $this->db->query($sql);
            $kqlaytengroup = $laytengroup->row();
        }
        ?>

        <div class="breadcrumb">
            <h2 style = "display:inline"><a class = "bread" href="<?php echo base_url(); ?>">Công ty thám tử </a> </h2>
            <span class="breadcrumb-separator">»»</span>
            <h2 style = "display:inline"><a class = "bread"  href="<?php echo base_url(); ?><?php echo $url; ?>"><?php echo $kqlaytengroup->name; ?></a> </h2>

        </div>


    </div>
    <div class="ContentMain" >

        <?php
        if ($laygroupproject->num_rows() > 0) {
            $kqlaygroupproject = $laygroupproject->row();
            ?>
            <div class="fixTopContent2">
                <h3 style = "padding-left:10px;"  class="title_dichvu_edit" title="<?php echo $kqlaygroupproject->title; ?>"> <?php echo $kqlaygroupproject->title; ?></h3>

            </div>
            <div class="fixTopContent3" >
                <div class="content_left">
                    <div class="desciption" ><? echo $description;?> </div>
                    <div class="content_detail" >
                        <?php echo $kqlaygroupproject->content; ?>
                        <?php echo $kqlaygroupproject->content_detail; ?>
                    </div>


                    <?php
                    //if(!empty($this->pagination->create_links()))
                    {
                        ?>
                        <ul class="pageNews padR35">
                            <?
                            // print_r($this->pagination->create_links());
                            echo $this->pagination->create_links(); // tạo link phân trang  ?>

                        </ul>
                    <?php } ?>
                </div>

                <?php
            }
            ?>

            <?php
            if ($laytinproject->num_rows() > 0) {
                ?>
                <div class="list_new_hot">
                    <div  class="title_new_lienquan">Các dịch vụ liên quan</div>
                    <?php
                    foreach ($laytinproject->result() as $kqlaytinproject) {
                        ?>
                        <div class="new_hot">
                            <a class="image_new" href="<?php echo base_url(); ?><?php echo $url; ?>/<?php echo $kqlaytinproject->alias; ?>" title="<?php echo $kqlaytinproject->title; ?>"><img src="<?php
                                echo base_url();
                                echo $kqlaytinproject->img;
                                ?>" width="73" height="75" alt="<?php echo $kqlaytinproject->title; ?>" class="flLeft" /></a>
                            <div class="new_hot_content">
                                <h4  class="title_hidden" > <a href="<?php echo base_url(); ?><?php echo $url; ?>/<?php echo $kqlaytinproject->alias; ?>" title="<?php echo $kqlaytinproject->title; ?>" style="font-size: 15px;color:#045E93;"> <?php echo $kqlaytinproject->title; ?></a> </h4>
                                <div class="description"> <?php echo $kqlaytinproject->description; ?></div>
                            </div>
                            <div class="clearFix"></div>
                        </div>

                        <?php
                    }
                    ?>

                </div>
                <?php
            }
            ?>

            <?php
            $sql = "SELECT *  FROM `news` WHERE `id_group_project` = 0 AND `type` != 2 order by id desc limit 0,10";
            $list_tintuc_dv = $this->db->query($sql);
            if ($list_tintuc_dv->num_rows() > 0) {
                ?>
                <div class="list_new_hot" style="margin-right: 20px;padding-right:15px;float:right">
                    <div  class="title_new_lienquan">Các tin tức liên quan</div>
                    <?php
                    foreach ($list_tintuc_dv->result() as $kqlist_tintuc_dv) {
                        $id_group_new = $kqlist_tintuc_dv->id_group_new;
                        $get_alias_group_news = $this->db->query("select alias from group_new where type=1 and id=\"" . $id_group_new . "\"   limit 0,1")->row()->alias;
                        ?>
                        <div class="new_hot">
                            <a class="image_new" href="<?php echo base_url(); ?><?php echo $get_alias_group_news; ?>/<?php echo $kqlist_tintuc_dv->alias; ?>" title="<?php echo $kqlist_tintuc_dv->title; ?>"><img src="<?php
                                echo base_url();
                                echo $kqlist_tintuc_dv->img;
                                ?>" width="73" height="75" alt="<?php echo $kqlist_tintuc_dv->title; ?>" class="flLeft" /></a>
                            <div class="new_hot_content">
                                <h4  class="title_hidden" > <a href="<?php echo base_url(); ?><?php echo $get_alias_group_news; ?>/<?php echo $kqlist_tintuc_dv->alias; ?>" title="<?php echo $kqlist_tintuc_dv->title; ?>" style="font-size: 15px;color:#045E93;"> <?php echo $kqlist_tintuc_dv->title; ?></a> </h4>
                                <div class="description"> <?php echo $kqlist_tintuc_dv->description; ?></div>
                            </div>
                            <div class="clearFix"></div>
                        </div>

                    <?php }
                    ?>

                </div>
            <?php } ?>
            <div class="clearFix"></div>
            <!--
            <div class="phantrang">
                   <ul class="pageNews padR35">
                             <?
            // print_r($this->pagination->create_links());
              //echo $this->pagination->create_links(); // tạo link phân trang  ?>
              <a href="#" class="last"></a>
             <a href="#" class="first"></a>
                   </ul>
           </div>
            -->
            <div class="gocRight"></div>
        </div>
        <div class="comment_google">



            <script type="text/javascript"  src="https://apis.google.com/js/plusone.js">
            </script>
            <div id="google_comments"></div>
            <script type="text/javascript" >
                gapi.comments.render('google_comments', {
                    href: window.location,
                    width: '996',
                    height: '210',
                    first_party_property: 'BLOGGER',
                    view_type: 'FILTERED_POSTMOD'
                });
            </script>
        </div>
    </div>
</div>
<!--end thietkeweb-->