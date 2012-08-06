<?php

class News_model extends CI_Model{
    
    function news_items(){
        $news = array(
            'story_one' => array(
                            'title' => 'Tulane University Football Programs',
                            'link' => 'http://digitallibrary.tulane.edu/collection?id=66',
                            'img' => 'assets/img/home/news/news_list_football.jpg',
                            'alt' => 'Cover of Tulane Football Program',
                            'text' => 'Collegiate football is not what it used to be. Explore what Tulane, college football and the New Orleans business support were like in the early years. The first phase of this collection, from 1919 through 1937, is online now.'
                           ),
            'story_two' => array(
                            'title' => 'New addition to Tulane Journal Publishing',
                            'link' => 'http://129.81.82.219/index.php/tjia/index',
                            'img' => 'assets/img/home/news/news_list_tjia.png',
                            'alt' => 'Logo of Tulane Journal of Inernational Affairs',
                            'text' => "The Tulane Journal of International Affairs is switching from print to Tulane's online, open access publishing platform. TJIA is an undergraduate, peer reviewed journal which brings outstanding writing relating to its three sections: International Security, International Political Economy, and Human Rights."
                           )
        );
        return $news;
    }
    
}