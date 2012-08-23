<div id="content_wrapper">

<?= $carousel ?>
    
    
<div id="homepage_middle_section"><!-- Home Page Middle Section Begin -->  
    <div class="large_striped_bar">&nbsp;</div>
    <div id="collections_list">
        <div id="collections_list_content">
            <ul>
                <li>
                    <div class="collections_list_img">
                        <a href="http://journals.tulane.edu">
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_journals.png" alt="Tulane Journals" />
                        </a>    
                    </div>

                    <div class="collections_list_text_area">

                        <h3 class="collections_list_title">
                            <a href="http://journals.tulane.edu">
                                Tulane Journals
                            </a>
                        </h3>

                        <span class="collections_list_description">
                            <strong>Open Access Peer-Reviewed Journals</strong> published through <a href="http://journals.tulane.edu"><strong>Tulane University Journal Publishing</strong></a>.
                        </span>

                    </div>
                </li>

                 <li>
                    <div class="collections_list_img">
                        <a href="http://theses.tulane.edu">
                            <img src="<?=base_url()?>assets/img/home/collections_list_img_theses.png" alt="Tulane These and Dissertations" />
                        </a>    
                    </div>

                    <div class="collections_list_text_area">

                        <h3 class="collections_list_title">
                            <a href="http://theses.tulane.edu">
                                Tulane Theses &amp; Dissertations
                            </a>    
                        </h3>

                        <span class="collections_list_description">
                            Tulane Graduate <a href="http://theses.tulane.edu"><strong>Theses &amp; Dissertations</strong></a> from <strong>1956 through the present</strong>.
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
                            <a href="http://digitallibrary.tulane.edu"><strong>Digitized Collections</strong></a> of photographs, sheet music, manuscripts, texts, and other unique and rare material from Tulane's libraries, archives and other affiliated resources and centers.
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
    
    <div id="column_statistics">
        <div id="column_statistics_content">
            <h5><img src="<?=base_url()?>assets/img/footer/statistics_title.png" alt="statistics" /></h5>
                <dl>
                   <dt><a href="http://digitallibrary.tulane.edu/">11,000+</a></dt>
                   <dd>Items in our <br /> 
                       <a href="http://digitallibrary.tulane.edu/">
                            Digital Library
                       </a>
                   </dd>
               </dl>

               <dl>
                   <dt><a href="http://staff.library.tulane.edu/tdl_ttd">4,371</a></dt>
                   <dd>Items in our <br />
                       <a href="http://staff.library.tulane.edu/tdl_ttd">
                           Theses &amp; Dissertation Collection
                       </a>
                   </dd>
               </dl>
               
               <dl>
                   <dt><a href="http://digitallibrary.tulane.edu/">18</a></dt>
                   <dd>Collections in our <br /> 
                       <a href="http://digitallibrary.tulane.edu/">
                            Digital Library
                       </a>
                   </dd>
               </dl>
               <dl>
                   <dt><a href="http://journals.tulane.edu/">4</a></dt>
                   <dd>Number of <br />
                       <a href="http://journals.tulane.edu/">
                            Open-Access Academic Journals 
                       </a>
                   </dd>    
               </dl>

        </div>
    </div>
    
    <div id="column_services">
        <div id="column_services_content">
            <h5><img src="<?=base_url()?>assets/img/home/footer/services_title.png" alt="contact" /></h5>
            <ul>
                <li>
                    <a href="http://theses.tulane.edu/submit">Theses &amp; Dissertations
                    </a>
                    <span class="services_description">Submit Your Thesis/Dissertation</span>
                </li>
                <li>
                    <a href="http://staff.library.tulane.edu/journals/">
                        Journal Publishing
                    </a>
                    <span class="services_description">Submit Your Journal Proposal</span>
                </li>
                <li>
                   <a href="http://digitallibrary.tulane.edu/about">Digital Library</a>
                   <span class="services_description">Submit a Collection Proposal</span>
                </li>
                <li><a href="http://researchers.tulane.edu/">Researcher Services</a>
                    <span class="services_description">Tools &AMP; Resources for Researchers</span>
                </li>
            </ul>
            
        </div>
    </div>
    
    <div id="column_contact">
        <div id="column_contact_content">
            <h5 class="column_contact">
                <img src="<?=base_url()?>assets/img/home/footer/contact_title.png" alt="contact" />
            </h5>
            <ul>
                <li><span class="contact_name">Jeff Rubin</span></li>
                <li><span class="contact_phone">504.247.1832</span></li>
                <li><span class="contact_email"><a href="mailto:jrubin6@tulane.edu">jrubin6@tulane.edu</a></span></li>
            </ul>
        </div>
    </div>
    
</div>    
    
</div><!-- end: content wrapper -->