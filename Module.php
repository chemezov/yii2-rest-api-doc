<?php

namespace chemezov\yii2\rest_api_doc;

class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    public $controllerNamespace = 'chemezov\yii2\rest_api_doc\controllers';

    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            [
                'class' => '\yii\web\UrlRule',
                'pattern' => $this->id,
                'route' => $this->id . '/default/index',
            ],
            [
                'class' => '\yii\web\UrlRule',
                'pattern' => $this->id . '/<controller:[\w\-]+>/<action:[\w\-]+>',
                'route' => $this->id . '/<controller>/<action>',
            ],
        ], false);
    }
}
