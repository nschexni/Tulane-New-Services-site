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