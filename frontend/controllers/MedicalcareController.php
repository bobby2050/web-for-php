<?php
namespace frontend\controllers;

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
use app\models\TProduct;
use app\models\TCategory;
use yii\data\Pagination;
/**
 * Site controller
 */
class MedicalcareController extends Controller
{


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->request->get('id');

        $where = ['category' => 1];
        if(  !empty(\YII::$app->request->get('id')) ) {
            $where = array_merge($where, ['second_category' => $id]);
        }
//        var_dump($where);die;
        $data = TProduct::find()->where($where);  //Field为model层,在控制器刚开始use了field这个model,这儿可以直接写Field,开头大小写都可以,为了规范,我写的是大写
        $pages = new Pagination(['totalCount' =>$data->count(), 'pageSize' => 3]);    //实例化分页类,带上参数(总条数,每页显示条数)
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();

        $category = TCategory::findAll(['parent_key' => 1]);
//        var_dump($category);die;

        $view = Yii::$app->view;
        $view->params['css'] = '/static/css/list.css';
        return $this->render('index',
        [
            'category' => $category,
            'model' => $model,
            'pages' => $pages
        ]);
    }

    public function actionDetail() {
        $id = Yii::$app->request->get('id');

        $row = TProduct::findOne($id);

        $view = Yii::$app->view;
        $view->params['css'] = '/static/css/detail.css';
        return $this->render('detail',
            [
                'row' => $row,
            ]);
    }


}
