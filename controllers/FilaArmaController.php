<?php

namespace app\controllers;

use Yii;
use app\models\FilaArma;
use app\models\FilaArmaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FilaArmaController implements the CRUD actions for FilaArma model.
 */
class FilaArmaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    public function actionFila()
    {
        $searchModel = new FilaArmaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Lists all FilaArma models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new FilaArma();

        if(isset($_POST['id']))
        {
            $ordemFilaArmas = FilaArma::find()->all();
            $ultimoDaFila = FilaArma::findOne($_POST['id']);
            $posicaoAnteriorFila = $ultimoDaFila->posicao;

            foreach($ordemFilaArmas as $ordem)
            {
                if($ordem->posicao > $posicaoAnteriorFila)
                {
                    $ordem->posicao--;
                    $ordem->save();
                }
                elseif($ordem->posicao === $posicaoAnteriorFila )
                {
                    $ordem->posicao = count($ordemFilaArmas);
                    $ordem->save();
                }
            }
            $this->redirect(Yii::$app->urlManager->createUrl("site/index"));
        }
            return $this->render('index', [
                'model' => $model,
            ]);

    }

    /**
     * Displays a single FilaArma model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FilaArma model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FilaArma();

        if ($model->load(Yii::$app->request->post())) {

            $ordemFilaArmas = FilaArma::find()->all();
            $model->posicao = count($ordemFilaArmas) + 1;
            $model->save();

            return $this->redirect(Yii::$app->urlManager->createUrl("site/index"));
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FilaArma model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $ordemFilaArmas = FilaArma::find()->all();
            $model->posicao = count($ordemFilaArmas);
            $model->save();

            return $this->redirect(Yii::$app->urlManager->createUrl("site/index"));
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FilaArma model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FilaArma model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FilaArma the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FilaArma::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
