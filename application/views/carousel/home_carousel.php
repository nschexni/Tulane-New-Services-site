<?php /*
      <? 

    '<pre>'.  
    print_r($carousel);
?> */?>


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
                                    <div class="cvr-teaser lcs-teaser"><?= $carousel[$i]['subitem_teaser']; ?>
                                    </div>
                                    <div class="cvr-highlightsSubTitle"><?= $carousel[$i]['subitem_subtitle']; ?></div>
<!--                                    <ul class="evo-coverStories-subitems">
                                        <li class="alpha"> 
                                            <a href="<?= $carousel['subitem_two_listitems[0]']['link'] ?>">
                                                <?= $carousel['subitem_two_listitems[0]']['title'] ?>
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="<?= $carousel['subitem_two_listitems[1]']['link'] ?>">
                                                <?= $carousel['subitem_two_listitems[1]']['title'] ?>
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="<?= $carousel['subitem_two_listitems[2]']['link'] ?>">
                                                <?= $carousel['subitem_two_listitems[2]']['title'] ?>
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="<?= $carousel['subitem_two_listitems[3]']['link'] ?>">
                                                <?= $carousel['subitem_two_listitems[3]']['title'] ?>
                                            </a> 
                                        </li>
                                        
                                    </ul>-->
<!--                                     END: evo-coverStories-subitems  -->
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