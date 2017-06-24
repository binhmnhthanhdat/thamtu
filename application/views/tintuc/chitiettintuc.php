<!-- begin chitiettintuc-->
 <?php 
    function alias($str) {
$str = str_replace("(","",$str);
$str = str_replace(")","",$str);
$str = str_replace("'","",$str);
$str = str_replace(".","-",$str);
$str = str_replace(":","",$str);
$str = str_replace("?","-", $str);
$str = str_replace("%","-", $str);
$str = str_replace(",","-", $str);
$str = str_replace("!","-", $str);
$str = str_replace('"',"",$str);
$str = str_replace(" ","-",$str);
$str = str_replace("---","-",$str);
$str = str_replace("--","-",$str);
$str = str_replace("&","-",$str);
$str = str_replace("/","-",$str);

#---------------------------------a^
$str = str_replace("â", "a", $str);
$str = str_replace("ấ", "a", $str);
$str = str_replace("ầ","a", $str);
$str = str_replace("ẩ", "a", $str);
$str = str_replace("ẫ","a", $str);
$str = str_replace("ậ", "a", $str);
#---------------------------------A^
$str = str_replace("Ấ", "a", $str);
$str = str_replace("Ầ","a", $str);
$str = str_replace("Ẩ", "a", $str);
$str = str_replace("Ẫ","a", $str);
$str = str_replace("Ậ", "a", $str);
#---------------------------------ă
$str = str_replace("ắ", "a", $str);
$str = str_replace("ằ","a", $str);
$str = str_replace("ẳ", "a", $str);
$str = str_replace("ẵ","a", $str);
$str = str_replace("ặ", "a", $str);
$str = str_replace("ă", "a", $str);
#---------------------------------Ă
$str = str_replace("Ắ", "a", $str);
$str = str_replace("Ằ","a", $str);
$str = str_replace("Ẳ", "a", $str);
$str = str_replace("Ẵ","a", $str);
$str = str_replace("Ặ", "a", $str);
$str = str_replace("Ă", "a", $str);
#---------------------------------a
$str = str_replace("á", "a", $str);
$str = str_replace("à","a", $str);
$str = str_replace("ả", "a", $str);
$str = str_replace("ã","a", $str);
$str = str_replace("ạ", "a", $str);
#---------------------------------A
$str = str_replace("A", "a", $str);
$str = str_replace("Á", "a", $str);
$str = str_replace("À","a", $str);
$str = str_replace("Ả", "a", $str);
$str = str_replace("Ã","a", $str);
$str = str_replace("Ạ", "a", $str);
#---------------------------------ê
$str = str_replace("ê", "e", $str);
$str = str_replace("ế", "e", $str);
$str = str_replace("ề","e", $str);
$str = str_replace("ể", "e", $str);
$str = str_replace("ễ", "e", $str);
$str = str_replace("ệ", "e", $str);
#---------------------------------Ê
$str = str_replace("Ê", "e", $str);
$str = str_replace("Ế", "e", $str);
$str = str_replace("Ề","e", $str);
$str = str_replace("Ể", "e", $str);
$str = str_replace("Ễ","e", $str);
$str = str_replace("Ệ", "e", $str);
#---------------------------------e
$str = str_replace("é", "e", $str);
$str = str_replace("è","e", $str);
$str = str_replace("ẻ", "e", $str);
$str = str_replace("ẽ","e", $str);
$str = str_replace("ẹ", "e", $str);
#---------------------------------E
$str = str_replace("É", "e", $str);
$str = str_replace("È","e", $str);
$str = str_replace("Ẻ", "e", $str);
$str = str_replace("Ẽ","e", $str);
$str = str_replace("Ẹ", "", $str);
#---------------------------------i
$str = str_replace("í", "i", $str);
$str = str_replace("ì","i", $str);
$str = str_replace("ỉ", "i", $str);
$str = str_replace("ĩ","i", $str);
$str = str_replace("ị", "i", $str);
#---------------------------------I
$str = str_replace("Í", "i", $str);
$str = str_replace("Ì","i", $str);
$str = str_replace("Ỉ", "i", $str);
$str = str_replace("Ĩ","i", $str);
$str = str_replace("Ị", "i", $str);
#---------------------------------O
$str = str_replace("O", "o", $str);
$str = str_replace("Ô","o", $str);
$str = str_replace("ô","o", $str);
$str = str_replace("Ố", "o", $str);
$str = str_replace("Ồ","o", $str);
$str = str_replace("Ổ", "o", $str);
$str = str_replace("Ỗ", "o", $str);
$str = str_replace("Ộ", "o", $str);
$str = str_replace("ồ", "o", $str);
$str = str_replace("ố", "o", $str);
$str = str_replace("ổ", "o", $str);
$str = str_replace("ỗ", "o", $str);
$str = str_replace("ộ", "o", $str);

$str = str_replace("ơ", "o", $str);
$str = str_replace("Ơ", "o", $str);
$str = str_replace("ớ", "o", $str);
$str = str_replace("ờ", "o", $str);
$str = str_replace("ở", "o", $str);
$str = str_replace("ỡ", "o", $str);
$str = str_replace("ợ", "o", $str);

$str = str_replace("ư", "u", $str);
$str = str_replace("Ư", "u", $str);
$str = str_replace("ứ", "u", $str);
$str = str_replace("ừ", "u", $str);
$str = str_replace("ử", "u", $str);
$str = str_replace("ữ", "u", $str);
$str = str_replace("ự", "u", $str);
$str = str_replace("Ứ", "u", $str);
$str = str_replace("Ừ", "u", $str);
$str = str_replace("Ử", "u", $str);
$str = str_replace("Ữ", "u", $str);
$str = str_replace("Ự", "u", $str);

$str = str_replace("Y", "y", $str);
$str = str_replace("ý", "y", $str);
$str = str_replace("ỳ", "y", $str);
$str = str_replace("ỷ", "y", $str);
$str = str_replace("ỹ", "y", $str);
$str = str_replace("ỵ", "y", $str);
$str = str_replace("Ỳ", "y", $str);
$str = str_replace("Ý", "y", $str);
$str = str_replace("Ỷ", "y", $str);
$str = str_replace("Ỹ", "y", $str);
$str = str_replace("Ỵ", "y", $str);

$str = str_replace("đ", "d", $str);
$str = str_replace("Đ", "d", $str);
$str = str_replace("D", "d", $str);

$str = str_replace("ó", "o", $str);
$str = str_replace("ò", "o", $str);
$str = str_replace("ỏ", "o", $str);
$str = str_replace("õ", "o", $str);
$str = str_replace("ọ", "o", $str);
$str = str_replace("Ò", "O", $str);
$str = str_replace("Ó", "O", $str);
$str = str_replace("Ỏ", "O", $str);
$str = str_replace("Õ", "O", $str);
$str = str_replace("Ọ", "O", $str);

$str = str_replace("ú", "u", $str);
$str = str_replace("ù", "u", $str);
$str = str_replace("ủ", "u", $str);
$str = str_replace("ũ", "u", $str);
$str = str_replace("ụ", "u", $str);
$str = str_replace("Ú", "u", $str);
$str = str_replace("Ù", "u", $str);
$str = str_replace("Ủ", "u", $str);
$str = str_replace("Ũ", "u", $str);
$str = str_replace("Ụ", "u", $str);

$str = str_replace("W", "w", $str);
$str = str_replace("P", "p", $str);
$str = str_replace("B", "b", $str);
$str = str_replace("C", "c", $str);
$str = str_replace("H", "h", $str);
$str = str_replace("N", "n", $str);
$str = str_replace("M", "m", $str);
$str = str_replace("G", "g", $str);
$str = str_replace("L", "l", $str);
$str = str_replace("F", "f", $str);
$str = str_replace("S", "s", $str);
$str = str_replace("K", "k", $str);
$str = str_replace("Q", "q", $str);
$str = str_replace("T", "t", $str);
$str = str_replace("X", "x", $str);
$str = str_replace("R", "r", $str);
$str = str_replace("V", "v", $str);
$str = str_replace("U", "u", $str);
$str = str_replace("I", "i", $str);

return $str;

}
?>
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
				<div class="box_news_detail">
                  	<div class="menuM">
                  		<ul>
                         
                    <?php
					$breadcrumb='';
                     if($laygrouptintuc->num_rows()>0)
    							
                        {
                            $i=0;
                             if($this->uri->segment(3)!="" && !is_numeric($this->uri->segment(3)))
                            {
                                 $url=$this->uri->segment(3);
                            } else if($this->uri->segment(2)!="" && !is_numeric($this->uri->segment(2)))
                            {
                                 $url=$this->uri->segment(2);
                            }else if($this->uri->segment(1)!="" && !is_numeric($this->uri->segment(1)))
                            {
                                 $url=$this->uri->segment(1);
                            }
                           $alias_group= $this->db->query("select alias from group_new where type=1 and id=( select id_group_new from news where alias=\"".$url."\" limit 0,1)")->row()->alias;
                           foreach($laygrouptintuc->result() as $kqlaygrouptintuc)
                                    { 
                                        $i++;
                        ?>
                            <li><h2><a href="<?php  echo base_url();?>tin-tuc/<?php  echo $kqlaygrouptintuc->alias; ?>" class="color51  <?php  if($alias_group==$kqlaygrouptintuc->alias) { $breadcrumb = base_url().$kqlaygrouptintuc->alias;$breadcrumbname =$kqlaygrouptintuc->title;  echo "active"; } ?>" title=" <?php  echo $kqlaygrouptintuc->title; ?>"><span></span> <?php  echo $kqlaygrouptintuc->title; ?></a></h2></li>
							
                            <?php  
                                     }
                          } //end so group 
                          ?>  
                        </ul>
                  	</div>
                    <div class="ContentMain">
                      	<div class="fixTopContent"></div>
						<?php 
                             if($chitiettintuc->num_rows()>0) {
            					$kqchitiettintuc=$chitiettintuc->row() ; ?>
						<div class="breadcrumb">
								<a class = "bread" href="<?php echo base_url();?>">Công ty thám tử </a> 
								<span class="breadcrumb-separator">»»</span> 
								<a class = "bread"  href="<?php  echo base_url()."tin-tuc/".$this->uri->segment(1);?>"><?php   echo $breadcrumbname; ?></a> 
								<span class="breadcrumb-separator">»»</span> 
								<a class = "bread"  href="<?php  echo $breadcrumb."/".$this->uri->segment(2);?>"><?php  echo $kqchitiettintuc->title; ?></a> 
							 
							</div>
						<?php } ?>
						
                          <?php 
                             if($chitiettintuc->num_rows()>0)
							  $kqchitiettintuc=$chitiettintuc->row() ;
                                         
                                ?>
                        <div class="fixTopContent2"  style="padding-top: 15px;">
                        
                        	<p class="title"> <?php  echo $kqchitiettintuc->title; ?></p>
                        </div>
                       
                        <div class="fixTopContent3">
                        	<div class="content_news">
	                            <p class="rulerRed280"></p>
								<div  class="description"><? echo $description;?> </div>
	                            <div > <?php  echo $kqchitiettintuc->description; ?></div>
                                
                                
                            
                            <!--end reatting-->
                                <div class="detail">
    								 <?php  echo $kqchitiettintuc->content; ?>
    							</div>
                            </div>
                            <div class="tagNews">
                            	<p class="flLeft"><span class="fontsize13">Từ khóa dịch vụ: </span>
                                <?php  
                                $mangtag=explode(",",$kqchitiettintuc->tag);
                                for($itag=0;$itag<count($mangtag);$itag++)
                                {
                                ?>
                                <a href="<? echo base_url();?>tag/<?php echo alias(trim($mangtag[$itag]));?>" title="<?php  echo trim($mangtag[$itag]); ?>"> <?php  echo trim($mangtag[$itag]); ?></a>,
                               <?
                               }
                               ?>
                                </p>
                                
                            
                            </div>
                            <div class="comment_google">
                                
                                 <script type="text/javascript"  src="https://apis.google.com/js/plusone.js">
                    </script>
                    <div id="google_comments"></div>
                    <script type="text/javascript" >
                    gapi.comments.render('google_comments', {
                    href: window.location,
                    width: '955',
                    height:'210',
                    first_party_property: 'BLOGGER',
                    view_type: 'FILTERED_POSTMOD'
                    });
                    </script> 
                            </div>
                            <div class="news_other">
                            	<p class="title_other">Tin tức khác</p>
                                <p class="rulerRed"></p>
                                <ul class="list_other">
                                   	 <?php 
                                        $idtinlienquan=$kqchitiettintuc->id_group_new; 
                                        $tinlienquan=$this->db->query("select * from news where id_group_new=$idtinlienquan limit 0,10");
                                         if($tinlienquan->num_rows()>0)
            							
                                        {
                                            $id_group_new=$tinlienquan->row()->id_group_new;
                                           	$function= $this->db->query("select * from group_new where type=1 and id=\"".$id_group_new."\"   limit 0,1")->row()->alias;
                                           	foreach($tinlienquan->result() as $kqtinlienquan)
                                           { 
                                 ?>
                                    
                                    <li><h3  class="title_hidden" style="font-weight: normal;"><a href="<?php  echo base_url();?><?php  echo $function; ?>/<?php  echo $kqtinlienquan->alias;?>" class="fontsize13" title=" <?php  echo $kqtinlienquan->title;?>"> <?php  echo $kqtinlienquan->title;?></a></h3></li>
									   <?php  
                                              }
                                } //end so group 
                          ?> 
                                </ul>
                            </div>
                            	
                            <div class="gocRight"></div>
                        </div>
                    </div>
                </div>
                
                
                <div class="clearFix"></div>
				
			
			<!--end chitiettintuc-->