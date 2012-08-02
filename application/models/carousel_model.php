<?php

class Carousel_model extends CI_Model{
    
    function carousel_items(){

       
       $items = array(
           'item_one_title' => 'Future Students',
           'item_one_link' => 'http://library.tulane.edu',
           'item_one_img' => 'assets/img/carousel/carousel_future_students.jpg',           
           
           'item_two_title' => 'Guidelines for Submission',
           'item_two_link' => 'http://staff.library.tulane.edu/tdl_ttd/assets/bootstrap/doc/Tulane_PDF_Creation_Guide.pdf',
           'item_two_img' => 'assets/img/carousel/carousel_thesis_guidelines.jpg',
           
           'item_three_title' => 'Ralston Crawford',
           'item_three_link' => 'http://digitallibrary.tulane.edu/collection?id=49',
           'item_three_img' => 'assets/img/carousel/carousel_crawford.jpg',
           
           'item_four_title' => 'number four',
           'item_four_link' => 'http://library.google.com',
           'item_four_img' => 'assets/img/carousel/carousel_img_4.png',
           
           'item_five_title' => 'number five',
           'item_five_link' => 'http://lsu.edu',
           'item_five_img' => 'assets/img/carousel/carousel_img_5.png',
       );
       
       
       return $items;
    }
    
}

/* End of file carousel_model.php */
/* Location: ./application/models/carousel_model.php */