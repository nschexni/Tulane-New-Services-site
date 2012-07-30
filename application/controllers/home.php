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
            //$this->load->view('common/main_menu');
            $this->load->view('common/main_nav_two_level');
            
            //loads views/home/home_view.php
            //$this->load->view('home/home_view_1', $data);  
            $this->load->view('home/home_view_1', 
                array(
                    'carousel'=> $this->load->view(
                            'carousel/home_carousel', 
                            $data,
                            TRUE
                    ),
                )
            );
            
            //loads footer
            $this->load->view('common/footer');     
	}
        
}