<?php

class Home extends CI_Controller {

    

        public function index(){
            $this->home_view();
        }

        public function home_view() 
	{          
            $this->load->helper('array');
            
            //load Carousel Model
            $this->load->model('carousel_model');
            $data['carousel'] = $this->carousel_model->carousel_items();
            
            //Homepage Array
            $homepage = array('title' => 'New Services @ Tulane Library');
            
            //loads header
            $this->load->view('common/header', $homepage);
            
            //loads main navigation
//          $this->load->view('common/main_menu');
            $this->load->view('common/main_nav_two_level');
            
            //loads views/home/home_view.php
            $this->load->view('home/home_view', $data);
            
            
            //loads footer
            $this->load->view('common/footer');     
         
            //delete this before going live
            //$this->output->enable_profiler(TRUE); 
	}

        public function home_view_1(){
            //load helper array
            $this->load->helper('array');
            
            //load Carousel Model
            $this->load->model('carousel_model');
            $data['carousel'] = $this->carousel_model->carousel_items();
            
            //Homepage Array
            $homepage = array('title' => 'New Services @ Tulane Library');
            
            //loads header
            $this->load->view('common/header', $homepage);
            
            //loads main navigation
            $this->load->view('common/main_nav_two_level');
            
            
            //RSS Feed
            
//            // this is the url of the rss feed that you want to display
//            $feed = curl_init('http://www.arl.org/sparc/bm~feed.xml');
//            curl_setopt($feed, CURLOPT_RETURNTRANSFER, 1);
//            curl_setopt($feed, CURLOPT_HEADER, 0);
//            $xml = simplexml_load_string(curl_exec($feed));
//            curl_close($feed);
//
//            //if the feed exists, then continue  
//            if ($xml!=''){      
//                $max_rss_items = 3;
//                $count = 0;
//                $rss_items = array();
//                foreach ($xml->channel->item as $item){
//                        // create variables from the title and description (can also be used for images and links)
//                        $title = $item->title;
//                        $description = $item->description;
//                        // displays the title and description on your website, formatted any way you want
//                                $rss_items[] =  '<li><b>'.$title.'</b><br />'.$description.'</li><br />';
//                                $count++;
//                                if($count == $max_rss_items) break;
//                    }
//                    return $rss_items;
//            };
//            
//            
            //loads views/home/home_view.php
            //$this->load->view('home/home_view_1', $data);  
            $this->load->view('home/home_view_1', 
                array(
                    'carousel'=> $this->load->view(
                            'carousel/home_carousel', 
                            $data,
                            TRUE
                    ),
                   // 'rss_items' => $this->rss_items()
                )
            );
            
            //loads footer
            $this->load->view('common/footer');     
	}
        
}