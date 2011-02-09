<?php
/*
    Galleon Home controller class
*/

class HomeController extends Controller{



    function index(){        
        $title = "Galleon";
        include($this->path->view('home'));
    }

    function urltest(){
        echo $this->url->base(false)."<br/>";
        echo $this->url->base(true)."<br/>";
        echo $this->url->get('Monkey','Feed',array('Apple','Banana','Orange'))."<br/>";
        echo $this->url->get('Monkey','Feed',array('Apple','Banana','Orange'),true)."<br/>";
        echo $this->url->img('apple-touch-icon.png',true)."<br/>";
        echo $this->url->css('styles.min.css',true)."<br/>";
        echo $this->url->js('goog_a.min.js',true)."<br/>";
    }   
    
    function pathtest(){
        echo $this->path->model('My')."<br/>";
        echo $this->path->view('error')."<br/>";
        echo $this->path->controller('Home')."<br/>";
        echo $this->path->config('mysql')."<br/>";
        echo $this->path->lib('Mysql')."<br/>";
    }
    
    function htmltest(){
        
        $this->html->a('http://www.google.com','Google<');
        $this->html->link('http://www.google.com','Google<');
        $this->html->anchor('http://www.google.com','Google<');

        $this->html->input_button('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_checkbox('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_color('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_date('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_datetime('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_datetime_local('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_email('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_file('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_hidden('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_image('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_month('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_number('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_password('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_radio('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_range('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_reset('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_search('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_submit('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_tel('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_text('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_time('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_url('elem','Value','Label',array('required'=>true)); echo "<br/>";
        $this->html->input_week('elem','Value','Label',array('required'=>true)); echo "<br/>";
    }
}
