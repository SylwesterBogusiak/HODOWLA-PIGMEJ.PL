<?php

namespace App\Models;

use CodeIgniter\Model;

class OfferModel extends Model
{
    // ...
               
    
    protected $table =  'xyz_items'; // please change to adequate table prefix   
    
    protected $allowedFields = [
        'item_id',
        'item_user_id',
        'item_user_name'
    
    ];




public function show($qty = 0)
{
    
        $ads = array();
        $item_user_id = "4113175015415141";   // user_id is given after registration in AKWA-MARKET.PL service


        // Create shared instance with a supplied database connection.
        $db = db_connect();
        $offerModel = model('OfferModel', true, $db);

        $ads = $offerModel->asArray()->where('item_user_id', $item_user_id)->where('item_adv_status', 'active')->orderBy('item_adv_views', 'DESC')->findAll($qty);

        $db->close();
        return $ads;

}



}
