<?php

class Test extends CI_Controller{
    
            public function index(){
                $this->curl_louis();
            }
           
            public function curl_louis(){
                
            $this->load->helper('array');
            
            //load News Model
            $this->load->model('louis_model');
            
             $data = array(
                    'title' => 'Curl Test',
                    'louis' => $this->louis_model->get_data('http://louisdl.louislibraries.org/cdm4/browse.php?CISORESTMP=results.php&CISOVIEWTMP=item_viewer.php&CISOSORT=date|r&CISOROOT=%2Fp16313coll12')
                    );

            //loads header
            $this->load->view('common/header', $data);

            
            //loads view
            $this->load->view('test/curl_louis', $data);
            
            //loads footer
            $this->load->view('common/footer');   
            
            
        }

        public function db_test(){
            //$this->load->helper('array');
            $this->load->model('carousel_model');
            $data['row'] = $this->carousel_model->getFull();

            //loads view
            $this->load->view('test/db_test',$data);
            
            //loads footer
            //$this->load->view('common/footer');  

        }

    
}