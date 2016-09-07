<?php

namespace app\modules\admin;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * @return array
     * Переместили поведение behaviors из AppAdminController В Module для ограничения доступа-
     * для просмотра заказов нужно обязательно авторизоваться! Если не переместим - то метод
     * behaviors перезапишет  родительский и вход в админку будет открыт
     */
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }
}
