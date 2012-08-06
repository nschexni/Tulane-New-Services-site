<div id="content_wrapper">

<?= $carousel ?>
    
    
<div id="homepage_middle_section"><!-- Home Page Middle Section Begin -->  
    <div class="large_striped_bar">&nbsp;</div>
    <div id="collections_list">
        <div id="collections_list_content">
            <ul>
                <li>
                    <div class="collections_list_img">
                        <a href="http://staff.library.tulane.edu/journals">
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_journals.png" alt="Tulane Journals" />
                        </a>    
                    </div>

                    <div class="collections_list_text_area">

                        <h3 class="collections_list_title">
                            <a href="http://staff.library.tulane.edu/journals">
                                Tulane Journals
                            </a>
                        </h3>

                        <span class="collections_list_description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>

                    </div>
                </li>

                 <li>
                    <div class="collections_list_img">
                        <a href="http://staff.library.tulane.edu/tdl_ttd/">
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_theses.png" alt="Tulane These and Dissertations" />
                        </a>    
                    </div>

                    <div class="collections_list_text_area">

                        <h3 class="collections_list_title">
                            <a href="http://staff.library.tulane.edu/tdl_ttd/">
                                Tulane Theses &amp; Dissertations
                            </a>    
                        </h3>

                        <span class="collections_list_description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>

                    </div>
                </li>

                
                <li>
                    <div class="collections_list_img">
                        <a href="http://digitallibrary.tulane.edu">
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_digitial_library.png" alt="Tulane University Digital Library" />
                        </a>    
                    </div>

                    <div class="collections_list_text_area">

                        <h3 class="collections_list_title">
                            <a href="http://digitallibrary.tulane.edu">
                                Tulane University Digital Library
                            </a>    
                        </h3>

                        <span class="collections_list_description">
                            The Tulane University Digital Library (TUDL) mission is the production and delivery of digitized and native digital holdings that support the teaching, research and public service goals of the University. The online communities of scholars, students and the public have access to the rare and unique collections in areas such as Latin American studies, jazz, New Orleans and Louisiana history and architecture. 
                        </span>

                    </div>
                </li>
                
                
            </ul>
        </div>
    </div>    

    <div id="news_area">
        <div id="news_content_area">
            <div id="news_list">
                <h3><img src="<?=base_url()?>assets/img/glyphicons/noun_newspaper_3.png" class="news_icon" alt="News" /> News</h3>
                <ul>
                    <li>
                        <div class="news_item_container">
                            
                            <div class="news_list_text">
                                <a href="<?= $news['story_one']['link']; ?>">
                                    <h5><?= $news['story_one']['title']; ?></h5>
                                </a> 
                                <p>
                                    <a href="<?= $news['story_one']['link']; ?>">
                                        <img src="<?=base_url()?><?= $news['story_one']['img']; ?>" alt="<?= $news['story_one']['alt']; ?>" class="news_img">
                                    </a>
                                    <?= $news['story_one']['text']; ?>    
                                    <span class="news_more_info"><a href="<?= $news['story_one']['link']; ?>">more info</a></span>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="news_item_container">
                            <div class="news_list_text">
                                <a href="<?= $news['story_two']['link']; ?>">
                                    <h5><?= $news['story_two']['title']; ?></h5>
                                </a> 
                                <p>
                                    <a href="<?= $news['story_two']['link']; ?>">
                                        <img src="<?=base_url()?><?= $news['story_two']['img']; ?>" alt="<?= $news['story_two']['alt']; ?>" class="news_img">
                                    </a>
                                    <?= $news['story_two']['text']; ?>    
                                    <span class="news_more_info"><a href="<?= $news['story_two']['link']; ?>">more info</a></span>
                                </p>
                            </div>
                        </div>   
                    </li>
                </ul>
            </div>

            <div id="rss_list">
                <h3><img src="<?=base_url()?>assets/img/glyphicons/glyphicons_397_rss.png" class="rss_icon" alt="RSS Feeds" /> rss </h3>
                <ul>
                    <?=$rss_feed[0]; ?>
                    <?=$rss_feed[1]; ?>
                    <?=$rss_feed[2]; ?>
                </ul>
            
           


            </div>

            <div id="twitter_list">
                <h3>twitter</h3>
                <div id="twitter_cloud">&nbsp;</div>
            </div>
        </div>
    </div>
</div><!--end: homepage_middle_section-->
    
    
    


<div id="homepage_bottom_section"><!-- Home Page Bottom Section Begin -->  
    <div class="large_striped_bar_footer">&nbsp;</div>
    <div id="column_contact">
        <div id="column_contact_content">
            <h5 class="column_contact">
                <img src="<?=base_url()?>assets/img/home/footer/contact_title.png" alt="contact" />
            </h5>
            <p class="contact_text">We want to help!</p>
            <ul>
                <li><span class="contact_name">Jeff Rubin</span></li>
                <li><span class="contact_phone">(504)247-1382</span></li>
                <li><span class="contact_email"><a href="mailto:jrubin6@tulane.edu">jrubin6@tulane.edu</a></span></li>
            </ul>
        </div>
    </div>
    
    <div id="column_statistics">
        <div id="column_statistics_content">
            <h5><img src="<?=base_url()?>assets/img/home/footer/statistics_title.png" alt="contact" /></h5>
            <h6>most popular items:</h6>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
            <h6>recent additions:</h6>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </div>
    </div>
    
    <div id="column_submission">
        <div id="column_submission_content">
            <h5><img src="<?=base_url()?>assets/img/home/footer/submission_title.png" alt="contact" /></h5>
            <ul>
                <li class="list_star"><a href="http://staff.library.tulane.edu/tdl_ttd/forms/td_submit">theses &amp; dissertations</a></li>
                <li class="list_star"><a href="http://staff.library.tulane.edu/journals/">journal</a></li>
            </ul>
        </div>
    </div>
    
</div>    
    
</div><!-- end: content wrapper -->