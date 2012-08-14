<?php

class Carousel_model extends CI_Model{
    
    function carousel_items(){

       
       $items = array(
            //ITEM ONE DATA
           'item_one_title' => "Tulane University Football Programs",
           'item_one_link' => "http://digitallibrary.tulane.edu/collection?id=66",
           'item_one_img' => "assets/img/carousel/carousel_football_programs_ver2.jpg",
           'item_one_alt' => "Tulane University Football Programs",

           
           //ITEM TWO DATA
           'item_two_title' => 'Second Line ',
           'item_two_link' => 'https://journals.tulane.edu/index.php/SL',
           'item_two_img' => 'assets/img/carousel/carousel_secondline.jpg',
           'item_two_alt' => "Second Line peer-edited journal at Tulane University",
           'subitem_two_headline' => "Second Line",
           'subitem_two_teaser' => "An Undergraduate Journal of Literary Conversation", 
           'subitem_two_subtitle' => "Articles:", 
           'subitem_two_listitems[0]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/SL/article/view/4/4",
                                        "title"=>" Kathryn Bigelow's Strange Days"
                                      ), 
           'subitem_two_listitems[1]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/SL/article/view/5/5",
                                        "title"=>"The Bomb: from Terror to Cynicism"
                                      ),
           'subitem_two_listitems[2]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/SL/article/view/6/6",
                                        "title"=>"Bhimayana: Thirst for Khulla"
                                      ),
           'subitem_two_listitems[3]' => array(
                                        "link"=>"https://journals.tulane.edu/index.php/SL/article/view/7/7",
                                        "title"=>"The Wife of Bath: Chaucer's Authorial Control over Alisoun"
                                      ),
           
           
           //ITEM THREE DATA
           'item_three_title' => 'Ralston Crawford Photographs',
           'item_three_link' => 'http://digitallibrary.tulane.edu/collection?id=49',
           'item_three_img' => 'assets/img/carousel/carousel_crawford.jpg',
           'item_three_alt' => "Ralston Crawfor Photographs",
           
           //ITEM FOUR DATA
           'item_four_title' => 'Tulane Journal of International Affairs ',
           'item_four_link' => 'https://journals.tulane.edu/index.php/tjia/index',
           'item_four_img' => 'assets/img/carousel/carousel_journal_international.jpg',
           'item_four_alt' => "Tulane Journal of International Affairs",
           
           //ITEM FIVE DATA
           'item_five_title' => 'THESIS: RETROVIRAL MEDIATED TRANSGENESIS',
           'item_five_link' => 'http://louisdl.louislibraries.org/cdm4/item_viewer.php?CISOROOT=/p16313coll12&CISOPTR=3674&CISOBOX=1&REC=1',
           'item_five_img' => 'assets/img/carousel/carousel_thesis_retroviral.jpg',
           'item_five_alt' => "Thesis: Retroviral Mediated Transgenesis of the Human Blood Fluke, Schistosoma Manosin by Kristine J. Kines, MSPH",
           'subitem_five_headline' => "THESIS: Retroviral Mediated Trangenesis Of The Human Blood Fluke, Schistosoma Mansoni", 
           'subitem_five_teaser' => "By: Kristine J. Kines, MSPH", 
           'subitem_five_subtitle' => "", 
           'subitem_five_listitems[0]' => array(
                                        "link"=>"",
                                        "title"=>""
                                      ), 
           'subitem_five_listitems[1]' => array(
                                        "link"=>"",
                                        "title"=>""
                                      ),
           'subitem_five_listitems[2]' => array(
                                        "link"=>"",
                                        "title"=>""
                                      ),
       );
       
       
       return $items;
    }
    
}

/* End of file carousel_model.php */
/* Location: ./application/models/carousel_model.php */