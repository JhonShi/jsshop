<?php
/**
 * Created by PhpStorm.
 * User: sq
 * Date: 2015/11/13
 * Time: 14:47
 */

namespace backend\controllers;


use app\models\Config;

class BasicController extends BaseController
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionBasicConfig()
    {
        $Config=new Config();
        return $this->render('basic_config',['model'=>$Config]);
    }
}