<?php

class Rss_model extends CI_Model{
    
    function rss_feed_items(){
            // this is the url of the rss feed that you want to display
            $feed = curl_init('http://www.arl.org/sparc/bm~feed.xml');
            curl_setopt($feed, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($feed, CURLOPT_HEADER, 0);
            $xml = simplexml_load_string(curl_exec($feed));
            curl_close($feed);

            //if the feed exists, then continue  
            if ($xml!=''){      
                $max_rss_items = 3;
                $count = 0;
                $rss_items = array();
                foreach ($xml->channel->item as $item){
                        // create variables from the title and description (can also be used for images and links)
                        $title = $item->title;
                        $description = $item->description;
                        $link = $item->link;
                        $pub_date = $item->pubDate;
                        // displays the title and description on your website, formatted any way you want
                                $rss_items[] =  '<li class="rss_item">
                                                    <div class="rss_item_container">
                                                        <span class="rss_item_title">
                                                            <a href="'.$link.'" target="_blank">'
                                                                .$title.
                                                            '</a>
                                                        </span>
                                                        <span class="rss_item_pub_date">'.$pub_date.'</span>    
                                                        <span class="rss_item_desc">'.$description.'</span>
                                                    </div>        
                                                 </li>
                                                ';
                                                
                                $count++;
                                if($count == $max_rss_items) break;
                                
                    }
               return $rss_items;
            }
    }
    
    
    
}
    
/* End of file rss_feed_model.php */
/* Location: ./application/models/rss_feed_model.php */