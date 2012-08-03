<?php

class Carousel_model extends CI_Model{
    
    function carousel_items(){

       
       $items = array(
            //ITEM ONE DATA
           'item_one_title' => "Future Students",
           'item_one_link' => "http://library.tulane.edu",
           'item_one_img' => "assets/img/carousel/carousel_future_students.jpg",
           'subitem_one_headline' => "Future Students", 
           'subitem_one_teaser' => "What Will the Next Generation of Students Demand from Our Institutions?", 
           'subitem_one_subtitle' => "Preparing for the 2028", 
           'subitem_one_listitems[0]' => array(
                                        "link"=>"http://library.tulane.edu",
                                        "title"=>"The Class of 2028"
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
           'item_two_title' => 'Guidelines for Submission',
           'item_two_link' => 'http://staff.library.tulane.edu/tdl_ttd/assets/bootstrap/doc/Tulane_PDF_Creation_Guide.pdf',
           'item_two_img' => 'assets/img/carousel/carousel_thesis_guidelines.jpg',
           'subitem_two_headline' => "Guidelines For Submission",
           'subitem_two_teaser' => "A Little Help for Your BIG Project", 
           'subitem_two_subtitle' => "Get Where Your Going:", 
           'subitem_two_listitems[0]' => array(
                                        "link"=>"http://tulane.edu/sse/academics/graduate/upload/guidelines_theses_dissertations.pdf",
                                        "title"=>"Tulane's Style Guide"
                                      ), 
           'subitem_two_listitems[1]' => array(
                                        "link"=>"http://staff.library.tulane.edu/tdl_ttd/assets/bootstrap/doc/Tulane_PDF_Creation_Guide.pdf",
                                        "title"=>"PDF Creation Guide"
                                      ),
           'subitem_two_listitems[2]' => array(
                                        "link"=>"http://tulane.edu/ogps/",
                                        "title"=>"Copyright Information"
                                      ),
           'subitem_two_listitems[3]' => array(
                                        "link"=>"http://tulane.edu/ogps/",
                                        "title"=>"Deadlines!!!"
                                      ),
           
           
           //ITEM THREE DATA
           'item_three_title' => 'Ralston Crawford',
           'item_three_link' => 'http://digitallibrary.tulane.edu/collection?id=49',
           'item_three_img' => 'assets/img/carousel/carousel_crawford.jpg',
           
           //ITEM FOUR DATA
           'item_four_title' => 'Tulane Journal of International Affairs ',
           'item_four_link' => 'http://library.google.com',
           'item_four_img' => 'assets/img/carousel/carousel_journal_international.jpg',
           
           //ITEM FIVE DATA
           'item_five_title' => 'number five',
           'item_five_link' => 'http://lsu.edu',
           'item_five_img' => 'assets/img/carousel/carousel_img_5.png',
       );
       
       
       return $items;
    }
    
}

/* End of file carousel_model.php */
/* Location: ./application/models/carousel_model.php */