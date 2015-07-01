<?php

/**
 * The Default Example Controller Class
 *
 * @author Faizan Ayubi
 */
use Shared\Controller as Controller;
use Framework\Registry as Registry;
use Framework\RequestMethods as RequestMethods;

class Home extends Controller {

    public function index() {
        //$model = new Post();
        //$db = Registry::get("database");
        //$db->sync($model);
    }
    
    public function post() {
        $view = $this->getActionView();
        $view->set("errors", array());
        
        if(RequestMethods::post("action") == "blogpost"){
            $post = new Post(array(
                "title" => RequestMethods::post("title"),
                "content" => RequestMethods::post("content")
            ));

            if ($post->validate()) {
                $post->save();
                $view->set("success", true);
            }
            
            $view->set("errors", $post->getErrors());
        }
    }
    
}
