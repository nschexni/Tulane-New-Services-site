<?php

class Test extends CI_Controller{
    
            public function index(){
                $this->curl_louis();
            }
           
            public function curl_louis(){
            $this->load->helper('array');
            
            //load louis_model
            $this->load->model('louis_model');
            $data['louis'] = $this->louis_model->get_data('http://louisdl.louislibraries.org/cdm4/browse.php?CISORESTMP=results.php&CISOVIEWTMP=item_viewer.php&CISOSORT=date|r&CISOROOT=%2Fp16313coll12');        
            
            //loads header
            $this->load->view('common/header');
            //loads views/home/home_view.php
            $this->load->view('test/curl_louis', array('title' => 'test page:louis'));
            //loads footer
            $this->load->view('common/footer');   
            
            
        }
    
}