<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use backend\models\Arbitro;
use yii\filters\VerbFilter;
use backend\models\util\UploadFile;
use backend\models\ArbitroSearch;
use yii\web\NotFoundHttpException;

/**
 * ArbitroController implements the CRUD actions for Arbitro model.
 */
class ArbitroController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Arbitro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArbitroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $modelsArbitro = Arbitro::findAll($condition = null);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            // 'modelsArbitro'=> $modelsArbitro,
        ]);
    }

    /**
     * Displays a single Arbitro model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Arbitro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $path = \Yii::$app->params['fotoArbitro'];
        $model = new Arbitro(['scenario' => Arbitro::SCENARIO_CREATE]);

        if ($model->load(Yii::$app->request->post())) {
          
            $model->estado = '1';
            $model->data_log = date('Y-m-d');
            // Upload image
            $file = $model->file = UploadedFile::getInstance($model, 'foto');
            if ($file) {

                $model->foto =  UploadFile::upload($file, $path);
            }
          
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_arbitro]);
        }
        return $this->render('create', [
            'model' => $model,

        ]);
    }

    /**
     * Updates an existing Arbitro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $path = \Yii::$app->params['fotoArbitro'];
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            // Upload image
            $file = $model->file = UploadedFile::getInstance($model, 'foto');
            if ($file) {

                $model->foto =  UploadFile::upload($file, $path);
               
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_arbitro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Arbitro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
       $model= $this->findModel($id);
        if (!$model)
        throw new NotFoundHttpException("Page not found, 'Programacao' not deleteed", 1);
    //mudar estado
    $model->estado = 0;

    if ($model->save(false)) {
        Yii::$app->session->setFlash('sucess', '<strong>Arbitro apagado com sucesso </strong>', true);
    
    }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Arbitro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Arbitro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Arbitro::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
