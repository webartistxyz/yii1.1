<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../Yii1/yii-1.1.25.43e386/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
