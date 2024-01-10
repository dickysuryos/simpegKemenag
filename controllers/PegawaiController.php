<?php

namespace app\controllers;

use app\models\Pegawai;
use app\models\PegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PegawaiController implements the CRUD actions for Pegawai model.
 */
class PegawaiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pegawai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PegawaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pegawai model.
     * @param int $NIP Nip
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($NIP)
    {
        return $this->render('view', [
            'model' => $this->findModel($NIP),
        ]);
    }

    /**
     * Creates a new Pegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pegawai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'NIP' => $model->NIP]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $NIP Nip
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($NIP)
    {
        $model = $this->findModel($NIP);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NIP' => $model->NIP]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $NIP Nip
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($NIP)
    {
        $this->findModel($NIP)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $NIP Nip
     * @return Pegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($NIP)
    {
        if (($model = Pegawai::findOne(['NIP' => $NIP])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
