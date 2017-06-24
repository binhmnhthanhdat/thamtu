<!-- begin gioi thieu-->
					<div>
                  	<div class="menuM">
                  		<ul>
                        	  <?php 
                            
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
                           // echo $url;exit;
                            if($url){
                                  
                                   $sql="select * from group_project where alias=\"".$url."\"";
            	                   $laytengroup=$this->db->query($sql);
                                   $kqlaytengroup=$laytengroup->row();
                            }
                          
                            ?>
                        	<li><h2><a href="<?php  echo base_url();?><?php  echo $url;?>" title="<?php   echo $kqlaytengroup->name; ?>" class="color51 "><span></span> <?php   echo $kqlaytengroup->name; ?></a></h2></li>
                        	<li><h2><a href="<?php  echo base_url();?>du-an/<?php  echo $url;?>" title="<?php   echo $kqlaytengroup->name; ?>" class="color51 active" ><span></span>Dự án  <?php   echo $kqlaytengroup->name; ?></a></h2></li>                           
                        </ul>
                  	</div>
                    <div class="ContentMain">
                      	<div class="fixTopContent"></div>
                        <div class="fixTopContent2"   style="padding-top: 20px;padding-bottom:10px;">
                        	<h1 class="bold padL15">Dự án đã thực hiện</h1>
                        </div>
                        <div class="fixTopContent3 padL35">
                         <?php 
                                    $sql="select * from project where id_group_project=\"".$kqlaytengroup->id."\"";
            	                   $laydsduan=$this->db->query($sql);
                                    if($laydsduan->num_rows()>0)
    							
                        {
                         ?>
                            <ul class="listProject">
                                    	 <?php 
                                        	foreach($laydsduan->result() as $kqlaydsduan)
                                    { 
                                        
                                      ?>
                                        <li>
                                        	<p><a href="<?php  echo base_url();?>chi-tiet-du-an/<?php  echo $kqlaydsduan->alias;?>" title=" <?php  echo $kqlaydsduan->title;?>"><img src="<?php  echo base_url(); echo $kqlaydsduan->img;?>" alt="<?php  echo $kqlaydsduan->title;?>" width="216" height="109" /></a></p>
                                            <p class="padT7"> <h3><a href="<?php  echo base_url();?>chi-tiet-du-an/<?php  echo $kqlaydsduan->alias;?>" title=" <?php  echo $kqlaydsduan->title;?>" class="fontsize13  bold"> <?php  echo $kqlaydsduan->title;?></a></h3></p>
                                        </li>
                                        
                                         <?php 
                                        }
                                        ?>
										
                                    </ul>
                                 <?php 
                                }
                                ?>
                                    <!--
                                     <div class="clearFix"></div>
                                    <ul class="pageNews padR35">
			                            <li><a href="http://dichvu.org.vn/giai-phap-cong-nghe.html/page-2" class="last" title="Trang sau"></a></li>
										<li><a href="http://dichvu.org.vn/giai-phap-cong-nghe.html/page-2" title="Trang 2">2</a></li>
										<li><a href="javascript:" class="active" title="Trang 1">1</a></li>
										<li><a href="javascript:;" class="first" title="Trang trước"></a></li>
			                        </ul>
                                    -->
                            <div class="clearFix"></div>
                            <div class="gocRight"></div>
                        </div>
                    </div>
                </div>
			<!--end gioi thieu-->