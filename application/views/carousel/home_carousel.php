<div id="homepage_carousel">
    <div class="shell container-content-main">
        <div class="container_24 clear">
            <div id="coverStoriesContainer">
                <div class="evo-wrapper">
                    <div class="evo-coverStories">
                        <!-- fuseNav -->
                        <div class="fuseNav clearfix"> 	
                            <a style="width: 189px;" href="<?= $carousel['item_one_link']; ?>" class="first active"> 	
                                    <span class="text">
                                        <?= $carousel['item_one_title']; ?>
                                    </span> 
                                    <span class="fuse"> 
                                        <span class="activeFuse"></span> 
                                    </span> 
                            </a> 

                            <a style="width: 189px;" href="<?= $carousel['item_two_link']; ?>"> 
                                    <span class="text"> 
                                        <?= $carousel['item_two_title']; ?>
                                    </span> 
                                <span class="fuse"> 
                                    <span class="activeFuse"></span> 
                                </span> 
                            </a> 

                            <a style="width: 189px;" href="<?= $carousel['item_three_link']; ?>">                                                                           <span class="text"> 
                                    <?= $carousel['item_three_title']; ?>
                            </span> 
                            <span class="fuse"> 
                                    <span class="activeFuse"></span> 
                            </span> 
                            </a> 

                            <a style="width: 189px;" href="<?= $carousel['item_four_link']; ?>"> 
                                <span class="text">
                                    <?= $carousel['item_four_title']; ?>
                                </span> 
                                <span class="fuse"> 
                                    <span class="activeFuse"></span> 
                                </span> 
                            </a> 

                            <a style="width: 192px;" href="<?= $carousel['item_five_link']; ?>"> 
                                <span class="text">
                                    <?= $carousel['item_five_title']; ?>
                                </span> 
                                <span class="fuse"> 
                                    <span class="activeFuse"></span> 
                                </span> 
                            </a> 
                        </div>
                        <!-- END: fuseNav -->

                        
                        
                        <div class="carousel">
                            <div class="storyUnit wide index-0 active"> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel['item_one_link']; ?>">
                                            <img src="<?= base_url().$carousel['item_one_img']; ?>" alt="<?= $carousel['item_one_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                            </div>
                            <!-- END: storyUnit -->

                            <div class="storyUnit wide index-1"> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel['item_two_link']; ?>">
                                            <img src="<?= base_url().$carousel['item_two_img']; ?>" alt="<?= $carousel['item_two_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                                <!-- sub items in the right -->
                                <div class="cvr-highlights">
                                    <div class="cvr-headline lcs-headline">
                                        <a href="<?= $carousel['item_two_link']; ?>">
                                            <?= $carousel['subitem_two_headline']; ?>
                                        </a>
                                    </div>
                                    <div class="cvr-teaser lcs-teaser"><?= $carousel['subitem_two_teaser']; ?>
                                    </div>
                                    <div class="cvr-highlightsSubTitle"><?= $carousel['subitem_two_subtitle']; ?></div>
                                    <ul class="evo-coverStories-subitems">
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
                                        
                                    </ul>
                                    <!-- END: evo-coverStories-subitems --> 
                                </div>
                                <!-- END: cvr-highlights --> 
                            </div>
                            <!-- END: storyUnit -->


                            <div class="storyUnit wide index-2"> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel['item_three_link']; ?>">
                                            <img src="<?= base_url().$carousel['item_three_img']; ?>" alt="<?= $carousel['item_three_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                                <!-- sub items in the right -->
                            </div>
                            <!-- END: storyUnit -->

                            <div class="storyUnit wide index-3"> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel['item_four_link']; ?>">
                                    <img src="<?= base_url().$carousel['item_four_img']; ?>" alt="<?= $carousel['item_four_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                                
                            </div>
                            <!-- END: storyUnit -->

                            <div class="storyUnit wide index-4"> 
                                <!-- big image -->
                                <div class="cvr-main"> 
                                    <a href="<?= $carousel['item_five_link']; ?>">
                                        <img src="<?= base_url().$carousel['item_five_img']; ?>" alt="<?= $carousel['item_five_alt']; ?>" />
                                    </a> 
                                </div>
                                <!-- END: cvr-main --> 
                                <!-- sub items in the right -->
                                <div class="cvr-highlights">
                                    <div class="cvr-headline lcs-headline">
                                            <a href="<?= $carousel['item_five_link']; ?>">Heading</a>
                                    </div>
                                    <div class="cvr-teaser lcs-teaser">Teaser</div>
                                    <div class="cvr-highlightsSubTitle">SubHeading</div>
                                        <ul class="evo-coverStories-subitems">
                                            <li class="alpha"> 
                                                <a href="#">link 1</a> 
                                            </li>
                                            <li> 
                                                <a href="#">link 2</a> 
                                            </li>
                                            <li> 
                                                <a href="#">link 3</a> 
                                            </li>
                                        </ul>
                                    <!-- END: evo-coverStories-subitems --> 
                                    </div>
                                <!-- END: cvr-highlights --> 
                                    </div>
                                    <!-- END: storyUnit --> 
                            </div>
                        <!-- END: carousel --> 
                    </div>
                    <!-- END: evo-coverStories --> 
                </div>
                <!-- END: evo-wrapper --> 
            </div>     
        </div>
    </div>

</div>  <!-- END: homepage_carousel --> 
