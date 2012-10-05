<?php

class Carousel_model extends CI_Model{
    

    function getAll(){
      $q = $this->db->query("SELECT * FROM carousel");
        foreach ($q->result() as $row ) {
            $carousel[] = $row; 
        }
        return $carousel;
    }

    function getFull(){
        $q = $this->db->query(
                 "SELECT carousel.title AS story_title
		,carousel.link AS story_link
		,carousel.img  AS story_image
		,carousel.alt AS story_alt
		,subitem.headline AS sub_headline
		,subitem.teaser AS sub_teaser
		,subitem.subtitle AS sub_subtitle
		,listitems.link AS list_link
		,listitems.title AS list_name
                FROM carousel		
                LEFT JOIN subitem ON(
                    carousel.id = subitem.carousel_id
                    )
                LEFT JOIN listitems ON(
                    carousel.id = listitems.carousel_id
                    )
                    
                ");
        
                foreach ($q->result() as $row) {
                    $carousel[] = $row;
                    }
                    return $carousel;
                }

    function getMain(){
        $q = $this->db->query(
                 "SELECT carousel.title AS story_title
		        ,carousel.link AS story_link
		        ,carousel.img  AS story_image
                        ,carousel.alt AS story_alt  
                   FROM carousel      
                ");
        
                foreach ($q->result() as $row) {
                    $carousel[] = $row;
                    }
                    return $carousel;
                }
                
    function carousel_items(){
      $carousel = $this->getMain();
      $items = array();
        for( $i=0; $i<=2;$i++ ){
            //$i_string = strval($i);
            $items[$i]['item_'.$i.'_title'] = $carousel[$i]->story_title;
            $items[$i]['item_'.$i.'_link'] = $carousel[$i]->story_link;
            $items[$i]['item_'.$i.'_img'] = $carousel[$i]->story_image;
            $items[$i]['item_'.$i.'_alt'] = $carousel[$i]->story_alt;
           }
       return $items;
    }
   
    
}

/* End of file carousel_model.php */
/* Location: ./application/models/carousel_model.php */