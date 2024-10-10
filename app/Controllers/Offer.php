<?php

namespace App\Controllers;

use App\Models\OfferModel;

class Offer extends BaseController
{
    public function index()
    {

      $data = array();

      //  session_start();
          
        //  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        //  $acceptLang = ['pl-PL', 'en-US']; 
        //  $lang = in_array($lang, $acceptLang) ? $lang : 'en-US';               /// if condition is true value X otherwise Y
         
      
         //echo "This is HOME controller";
        $offer = new OfferModel();

        $data['ads'] = $offer->show();



        echo view('templates/header');
        //echo view('offer', $ads);

        //print_r ($ads);
        echo view('offer', $data);
        echo view('templates/footer');


    }
}
