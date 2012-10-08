<?php

class Carousel_model extends CI_Model{
    
    //test sql query to return all carousel data
    function getAll(){
      $q = $this->db->query("SELECT * FROM carousel");
        foreach ($q->result() as $row ) {
            $carousel[] = $row; 
        }
        return $carousel;
    }
    
    
    //test sql query to return all carousel data
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
                
    //Gets the Navigation and Images 
    function getMain(){
        $q = $this->db->query(
                 "SELECT carousel.title AS story_title
		        ,carousel.link AS story_link
		        ,carousel.img  AS story_image
                        ,carousel.alt AS story_alt  
                   FROM carousel      
                ");
                $carousel = array(1);
                foreach ($q->result() as $row) {
                    $carousel[] = $row;
                    }
                    return $carousel;
                }
                
                
    //Gets the Subtitle information (if exist)
    function getSub($c_id){
        $subitem = null;
        $q = $this->db->query("
            SELECT subitem.headline AS headline
            ,subitem.teaser AS teaser
            ,subitem.subtitle AS subtitle
            FROM subitem
            WHERE carousel_id = $c_id
            ");
        foreach ($q->result() as $row){
                $subitem = $row;
            }
        return $subitem;
    }
    
    
    //Build the array for View   
    function carousel_items(){ 
      $carousel = $this->getMain();
      $items = array();
        for($i=1; $i<=5;$i++){
            $items[$i]['item_title'] = $carousel[$i]->story_title;
            $items[$i]['item_link'] = $carousel[$i]->story_link;
            $items[$i]['item_img'] = $carousel[$i]->story_image;
            $items[$i]['item_alt'] = $carousel[$i]->story_alt;
            
            //check to see if subitems exist 
            $subitem = $this->getSub($i);
            if($subitem !== null){
                $items[$i]['subitem_headline'] = $subitem->headline;
                $items[$i]['subitem_teaser'] = $subitem->teaser;
                $items[$i]['subitem_subtitle'] = $subitem->subtitle;
            }   
           }
       return $items;
    }
   
    
}

/* End of file carousel_model.php */
/* Location: ./application/models/carousel_model.php */