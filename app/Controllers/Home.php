<?php

namespace App\Controllers;

use App\Models\OfferModel;

class Home extends BaseController
{
    public function index()
    {

       
      //  session_start();
          
        //  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        //  $acceptLang = ['pl-PL', 'en-US']; 
        //  $lang = in_array($lang, $acceptLang) ? $lang : 'en-US';               /// if condition is true value X otherwise Y
         
      
         //echo "This is HOME controller";
         $data = array();
         $offer = new OfferModel();

         $data['ads'] = $offer->show(6);
 

        echo view('templates/header');
        echo view('start', $data);
        echo view('templates/footer');
    }
}
