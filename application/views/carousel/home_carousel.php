<div id="homepage_carousel">
    <div class="shell container-content-main">
        <div class="container_24 clear">
            <div id="coverStoriesContainer">
                <div class="evo-wrapper">
                    <div class="evo-coverStories">
                       <div class="fuseNav clearfix"> 	
                        
                        <!-- fuseNav -->
                        <? for($i=1;$i<=5;$i++){ ?>                      
                            <a style="width: 189px;" 
                               href="<?= $carousel[$i]['item_link']; ?>" 
                               <?// if first item - add the first active class
                                if($i==1){
                                    print 'class="first active"';
                                } 
                               ?>
                            > 	
                                <span class="text"><?=$carousel[$i]['item_title']; ?></span> 
                                <span class="fuse"><span class="activeFuse"></span> </span> 
                            </a> 
                        <? } ?>
                        <!-- END: fuseNav -->
                        </div>

                        <!-- carousel -->
                        <div class="carousel">
                        <? for($i=1;$i<=5;$i++){ ?>    
                        <div class="storyUnit wide index-<?=$i?> 
                               <?// if first item - add the first active class
                                if($i==1){
                                    print 'active';
                                } 
                               ?>
                             "> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel[$i]['item_link']; ?>" > 
                                            <img src="<?= base_url().$carousel[$i]['item_img']; ?>" 
                                                 alt="<?= $carousel[$i]['item_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                                
                                
                                
                                
                                
                                
            <? if(isset($carousel[$i]['subitem_headline'])){ ?>
                <!-- sub items in the right -->
                    <div class="cvr-highlights">
                        <div class="cvr-headline lcs-headline">
                            <a href="<?= $carousel[$i]['item_link']; ?>">
                                <?= $carousel[$i]['subitem_headline']; ?>
                            </a>
                        </div>
                        <div class="cvr-teaser lcs-teaser">
                               <?= $carousel[$i]['subitem_teaser']; ?>
                        </div>
                        <div class="cvr-highlightsSubTitle">
                                <?= $carousel[$i]['subitem_subtitle']; ?>
                        </div>
                                    
                <? 
                    //Build this section if there are any listitems.  
                    //and set the number of loop run = to the number of items in the array
                    if($carousel[$i]['listitem_count'] > 0){
                    $counter = 0;
                    $max = $carousel[$i]['listitem_count'];
                ?>                        
                        <ul class="evo-coverStories-subitems">
                            <? 
                                for($i=1;$i <= $max;$i++){ 
                                $counter += 1;
                            ?>  
                                <li <? if($i===1){print'class="alpha"';}?>>
                                    <a href="<?= $carousel[2][$counter]['listitem_link']; ?>">
                                        <?= $carousel[2][$counter]['listitem_title']; ?>
                                    </a> 
                            </li>
                            <?}?>
                        </ul>
           <? }?>             
                       
                        
                        
                        <!-- END: evo-coverStories-subitems  -->
                                </div>
                                <? }?>
                                
                                
                                
                                
                                
                                
                                
                        </div>
                        <? } ?>    
                        <!-- END: carousel --> 
                        </div>
                    <!-- END: evo-coverStories --> 
                </div>
                <!-- END: evo-wrapper --> 
            </div>     
        </div>
    </div>
    </div>
</div>  <!-- END: homepage_carousel --> 