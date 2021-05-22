<?php

namespace Source\Application;

use Source\Core\shots;
use Source\Models\box_flow\category;
use Source\Models\box_flow\payments;

class ControllerApp extends shots
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../viewer/".CONFIG_ENGINE_PROJECT. "/");     
        
    }

    public function dash($data)
    {
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("dashboard/index.php", [
            "head" => $head
        ]);      
    }

    public function fluxoIndex()
    {
        $head = CONFIG_SITE_TITLE;

        echo $this->view->render("fluxo/index.php",
        [
            "head" => $head,
            "paymente" => (new payments())->find()->fetch(true)
        ]);
    }

    public function fluxoCreate($data)
    {
        
        if(!empty($data)){
        $data = (object) $data;
        $payments = new payments;
        $payments->createPayments($data);

        }

        $head = CONFIG_SITE_TITLE;
        echo $this->view->render("fluxo/create.php",
        [
            "head" => $head,
            "categorys" => (new category())->find()->fetch(true)
        ]);
    }

    public function category($data)
    {
        if(!empty($data)){
            $data = (object)$data;
            $category = new category;
            $category->createcategory($data);
        }

        $head = CONFIG_SITE_TITLE;
        echo $this->view->render("category/create.php",
        [
            "head" => $head
        ]);

    }

    public function error()
    {
        echo "OPS ERRO!";
    }

}