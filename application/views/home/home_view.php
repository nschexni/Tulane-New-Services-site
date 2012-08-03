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
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_journals.png" />
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
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_theses.png" />
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
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_digitial_library.png" />
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
                <h3><img src="<?=base_url()?>assets/img/glyphicons/noun_newspaper_2.png" class="news_icon" /> News</h3>
                <ul>
                    <li>
                        <div class="news_item_container">
                            
                            <div class="news_list_text">
                                <a href="<?= $news['story_one']['link']; ?>">
                                    <h5><?= $news['story_one']['title']; ?></h5>
                                </a> 
                                <p>
                                    <a href="<?= $news['story_one']['title']; ?>">
                                        <img src="<?=base_url()?>assets/img/home/news_list_img_one.png" class="news_img">
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
                                <a href="#">
                                    <h5>News Headline</h5>
                                </a>
                                <p>
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/img/home/news_list_img_two.png" class="news_img">
                                    </a>    
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit. <span class="news_more_info"><a href="#">more info</a></span></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="rss_list">
                <h3><img src="<?=base_url()?>assets/img/glyphicons/glyphicons_397_rss.png" class="rss_icon" /> rss </h3>
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
    <div id="column_contact">
        <div id="column_contact_content">
            <h5 class="column_contact">contact</h5>
            <p>We want to help!</p>
            <ul>
                <li>phone</li>
                <li>email</li>
                <li>address 1</li>
                <li>address 2</li>
                <li>city state zip</li>
            </ul>
        </div>
    </div>
    
    <div id="column_statistics">
        <div id="column_statistics_content">
            <h5>statistics info</h5>
            <h6>most popular items:</h6>
            <ul>
                <li>item</li>
                <li>item</li>
                <li>item</li>
            </ul>
            <h6>recent additions:</h6>
            <ul>
                <li>item</li>
                <li>item</li>
                <li>item</li>
            </ul>
        </div>
    </div>
    
    <div id="column_submission">
        <div id="column_submission_content">
            <h5>submission info</h5>
            <ul>
                <li>theses &amp; dissertations</li>
                <li>journal</li>
            </ul>
        </div>
    </div>
    
</div>    
    
</div><!-- end: content wrapper -->