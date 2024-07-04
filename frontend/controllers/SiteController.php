<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\Serveritem;
use common\models\Servercategory;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Recruit;
use common\models\Guestbook;
use yii\data\Pagination;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index',['class'=>'main_index']);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionNewsdetail()
    {
        return $this->render('newsdetail');
    }

    public function actionOurserver(){
        $categorys = Servercategory::find()->all();
        $category = Yii::$app->request->get('cid');
        if(empty($category)){
            $query = Serveritem::find()->orderby('sort ASC,id DESC');
        }else{
            $query = Serveritem::find()->where(['category'=>$category])->orderby('sort ASC,id DESC');
        }
        $pages = new Pagination(['totalCount' => $query->count(),'pageSize' => '8']);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('ourserver', [
            'categorys'=>$categorys,
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionServeritem(){
        $id =Yii::$app->request->get('id');
        $model = Serveritem::find()->where(['id'=>$id])->one();
        return $this->render('serveritem',['model'=>$model]);
    }


    public function actionServer(){
        return $this->render('server');
    }

    public function actionJoinus(){
        $query = Recruit::find()->orderby('sort ASC,id DESC');
        $pages = new Pagination(['totalCount' => $query->count(),'pageSize' => '10']);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        return $this->render('joinus', [
             'models' => $models,
             'pages' => $pages,
        ]);

    }



    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionNews()
    {
        return $this->render('news');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new Guestbook();
        $success = false;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->created_at = time();
            if( $model->save()){
                $success = true;
            } 
        }
        return $this->render('contact', [
            'model' => $model,
            'success' => $success,
        ]); 
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionNavigation(){
        return $this->render('nav');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
