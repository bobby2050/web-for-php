<?php
namespace frontend\controllers;

use app\models\TProduct;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
//        Yii::$app->view->params['csspath'] = '/static/css/index.css';

        //设置当前view的params参数，
        $view = Yii::$app->view;
        $view->params['css'] = '/static/css/index.css';

        return $this->render('index', [

            'rows' => TProduct::getlast3(),
        ]);
    }

    public function actionError(){
        //设置当前view的params参数，
        $view = Yii::$app->view;
        $view->params['css'] = '/static/css/index.css';
        return $this->render('error');
    }


}
