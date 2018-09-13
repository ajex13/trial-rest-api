<?php

namespace api\modules\v1\controllers;

use yii\web\Controller;

/**
 * Default controller for the `v1` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($age)
    {
        echo $age;
    }

    public function actionForm(){
      print_r(\Yii::$app->request->bodyparams);
    }
}
