        <!-- begin gioi thieu-->
			
				<div class="tin_gioithieu">
                  	<div class="menuM">
                  		<ul>
                        	  <?php 
                     if($laygrouptintuc->num_rows()>0)
    							
                        {
                            $i=0;
                            $url=$this->uri->segment(3);
                            if($url=="")
                            {
                                 $url=$this->uri->segment(2);
                            }
                            if($this->uri->segment(2)=="")
                            {
                                 $url=$this->uri->segment(1);
                            }
    
                          
                        	foreach($laygrouptintuc->result() as $kqlaygrouptintuc)
                                    { 
                                        $i++;
                        ?>
                            <li><h2><a href=" <?php  echo base_url();?>gia-thue-dich-vu-tham-tu/<?php  echo $kqlaygrouptintuc->alias; ?>" title=" <?php  echo $kqlaygrouptintuc->title; ?>" class="color51  <?php  if($url==$kqlaygrouptintuc->alias) echo "active";?>"><span></span> <?php  echo $kqlaygrouptintuc->name; ?></a></h2></li>
                           
                            	
                            <?php  
                                     }
                          } //end so group 
                          ?> 
                        </ul>
                  	</div>
                    <div class="ContentMain">
                      	<div class="fixTopContent"></div>
                          <?php 
                        if($laygioithieu->num_rows()>0)
    							
                        {
           
                    
                        	foreach($laygioithieu->result() as $kqlaygioithieu)
                                    {
                                       
                        ?>
                        <div class="fixTopContent2"  style="padding-top: 20px;">
                       
                        	<p class="bold padL15" style="font-size: 16px;"> <?php  echo $kqlaygioithieu->title;?></p>
                        </div>
                        <div class="fixTopContent3 padL35 padR35">
                            <div align="justify" class="justify">
                                 <?php  echo $kqlaygioithieu->content;?>
                      	     </div>
                            <div class="gocRight"></div>
                        </div>
                         <?php  } ?>
                         <?php  } ?>
                    </div>
                </div>
			
			<!--end gioi thieu-->
			