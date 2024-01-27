<?php
namespace App\Controller;

use App\Controller\AppController;

class GoodController extends AppController
{
    public function world()
    {
        $this->set('message', 'Hello World!');
    }
}
