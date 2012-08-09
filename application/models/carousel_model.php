<?php

class Carousel_model extends CI_Model{
    
    function carousel_items(){

       
       $items = array(
            //ITEM ONE DATA
           'item_one_title' => "Tulane University Football Programs",
           'item_one_link' => "http://digitallibrary.tulane.edu/collection?id=66",
           'item_one_img' => "assets/img/carousel/carousel_football_programs.jpg",
           'item_one_alt' => "Future Student",
           'subitem_one_headline' => "", 
           'subitem_one_teaser' => "", 
           'subitem_one_subtitle' => "", 
           'subitem_one_listitems[0]' => array(
                                        "link"=>"",
                                        "title"=>""
                                      ), 
           'subitem_one_listitems[1]' => array(
                                        "link"=>"http://library.tulane.edu",
                                        "title"=>"The Role of Library's in 20 Years"
                                      ),
           'subitem_one_listitems[2]' => array(
                                        "link"=>"http://library.tulane.edu",
                                        "title"=>"Case Study: LOLA"
                                      ),
           
           //ITEM TWO DATA
           'item_two_title' => 'the Charrette',
           'item_two_link' => 'https://journals.tulane.edu/index.php/TC/index',
           'item_two_img' => 'assets/img/carousel/carousel_charrette.jpg',
           'item_two_alt' => "the Charrette Journal from the Tulane School of Architecture",
           'subitem_two_headline' => "the Charrette | July 2012",
           'subitem_two_teaser' => "Layered Capacities", 
           'subitem_two_subtitle' => "Articles:", 
           'subitem_two_listitems[0]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/TC/article/view/14/14",
                                        "title"=>"A Modernist Perspective: New Orleans Design Threatened"
                                      ), 
           'subitem_two_listitems[1]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/TC/article/view/17/17",
                                        "title"=>"Defining Confinement: Are Posh Prisons the Answer?"
                                      ),
           'subitem_two_listitems[2]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/TC/article/view/12/12",
                                        "title"=>"Genesis: Lucid Dreaming as a Design Tool"
                                      ),
           'subitem_two_listitems[3]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/TC/article/view/15/15",
                                        "title"=>"The Shard: Experiencing London's Vertical City"
                                      ),
           
           
           //ITEM THREE DATA
           'item_three_title' => 'Ralston Crawford Photographs',
           'item_three_link' => 'http://digitallibrary.tulane.edu/collection?id=49',
           'item_three_img' => 'assets/img/carousel/carousel_crawford.jpg',
           'item_three_alt' => "Ralston Crawfor Photographs",
           
           //ITEM FOUR DATA
           'item_four_title' => 'Tulane Journal of International Affairs ',
           'item_four_link' => 'http://129.81.82.219/index.php/tjia/index',
           'item_four_img' => 'assets/img/carousel/carousel_journal_international.jpg',
           'item_four_alt' => "Tulane Journal of International Affairs",
           
           //ITEM FIVE DATA
           'item_five_title' => 'number five',
           'item_five_link' => 'http://lsu.edu',
           'item_five_img' => 'assets/img/carousel/carousel_img_5.png',
           'item_five_alt' => "number five",
       );
       
       
       return $items;
    }
    
}

/* End of file carousel_model.php */
/* Location: ./application/models/carousel_model.php */