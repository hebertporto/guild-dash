<?php

namespace app\controllers;

use app\models\Anuncio;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    public function actionIndex()
    {
        if(Yii::$app->user->isGuest)
            return $this->redirect(Yii::$app->urlManager->createUrl("site/login"));
        else
        {

            $dataProviderChampion = new ActiveDataProvider([
                'query' => \app\models\Champion::find()->select('nome, max(data_hora) as data_hora')->groupBy('nome')->orderBy('data_hora DESC'),
                'pagination' => [
                    'pageSize' => false,
                ],
            ]);

            $dataProviderBoss = new ActiveDataProvider([
                'query' => \app\models\Boss::find()->select('nome, max(data_hora) as data_hora')->groupBy('nome')->orderBy('data_hora DESC'),
                'pagination' => [
                    'pageSize' => false,
                ],
            ]);

            $dataProviderPrisma = new ActiveDataProvider([
            'query' => \app\models\Prisma::find()->select('nome, data_hora, tinta, player')->orderBy('data_hora DESC'),
            'pagination' => [
                'pageSize' => 6,
            ],
            ]);

            $dataProviderFilaArma = new ActiveDataProvider([
                'query' => \app\models\FilaArma::find()->orderBy('posicao ASC'),
                'pagination' => [
                    'pageSize' => 7,
                ],
            ]);

            $dataProviderRespawAnimal = new ActiveDataProvider([
                'query' => \app\models\RespawAnimal::find()->select('animal, data_hora, color, player')->orderBy('data_hora DESC'),
                'pagination' => [
                    'pageSize' => 7,
                ],
            ]);

            $ultimoAnuncio = \app\models\Anuncio::find()->orderBy('id DESC')->one();

            return $this->render('index', [
                'dataProviderChampion' => $dataProviderChampion,
                'dataProviderBoss' => $dataProviderBoss,
                'dataProviderPrisma' => $dataProviderPrisma,
                'dataProviderFilaArma' => $dataProviderFilaArma,
                'dataProviderRespawAnimal' => $dataProviderRespawAnimal,
                'ultimoAnuncio' => $ultimoAnuncio,
            ]);
        }


    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
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

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionTeste()
    {
        return $this->render('teste');
    }
}
