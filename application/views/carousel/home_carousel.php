<div id="homepage_carousel">
    <div class="shell container-content-main">
        <div class="container_24 clear">
            <div id="coverStoriesContainer">
                <div class="evo-wrapper">
                    <div class="evo-coverStories">
                       
                        
                        <!-- fuseNav -->
                        <? for($i=0;$i<=2;$i++){ ?>
                        <div class="fuseNav clearfix"> 	
                            <a style="width: 189px;" 
                               href="<?= $carousel[$i]['item_'.$i.'_link']; ?>" 
                               class="first active"> 	
                                <span class="text"><?=$carousel[$i]['item_'.$i.'_title']; ?></span> 
                                <span class="fuse"><span class="activeFuse"></span> </span> 
                            </a> 
                        </div>
                        <!-- END: fuseNav -->
                        
                        
                        
                        
                        <!-- carousel -->
                        <div class="carousel">
                            
                        <div class="storyUnit wide index-<?=$i?>"> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel[$i]['item_'.$i.'_link']; ?>" > 
                                            <img src="<?= base_url().$carousel[$i]['item_'.$i.'_img']; ?>" 
                                                 alt="<?= $carousel[$i]['item_'.$i.'_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                        </div>
                        <!-- END: carousel --> 
                        </div>
                        <? } ?>
                        

                        
                        
                        


                            
                            
                            

                            
                    
                    <!-- END: evo-coverStories --> 
                </div>
                <!-- END: evo-wrapper --> 
            </div>     
        </div>
    </div>
    </div>
</div>  <!-- END: homepage_carousel --> 