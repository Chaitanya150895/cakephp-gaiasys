<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class DetailsController extends AppController
{  

    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }

}