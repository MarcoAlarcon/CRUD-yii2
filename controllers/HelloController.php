<?php

namespace app\controllers;

use yii\base\Controller;

class HelloController extends Controller
{
    public function actionWelcome()
    {
        $mensagem = "Primeira view";
        return $this->render("welcome",[
            "mensagem" => $mensagem
        ]);
    }
}