<?php

namespace app\controllers;

use app\models\Cuti;
use app\models\CutiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CutiController implements the CRUD actions for Cuti model.
 */
class CutiController extends Controller
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
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['create','update','index'],
                    'rules' => [
                        [
                            'actions' => ['create','update','index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Cuti models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CutiSearch();
        $dataProvider = NIL;
        if (\Yii::$app->user->identity->role == "admin") {
         $dataProvider = $searchModel->search($this->request->queryParams);
        } else {
        $filter =  Cuti::findOne(['NIP' => \Yii::$app->user->identity->NIP]);
        $dataProvider = $searchModel->searchByIdentity($this->request->queryParams);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cuti model.
     * @param int $id_cuti Id Cuti
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_cuti)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_cuti),
        ]);
    }

    /**
     * Creates a new Cuti model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        // if (\Yii::$app->user->can('createCuti')) {
        $model = new Cuti();

        if ($this->request->isPost) {
            print_r($model);
            $model->NIP = \Yii::$app->user->identity->NIP;
            $model->status = 'sedang diproses';
            // $model->tgl_cuti = $model->tgl_cuti->format('Y-m-d');
            //  $model->tgl_cuti_berakhir = $model->tgl_cuti_berakhir->format('Y-m-d');
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_cuti' => $model->id_cuti]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    // } else {
    //     \Yii::$app->session->setFlash('error','error');
    //     return $this->redirect(['/cuti']);
    // }
}

public function actionHistory() {
    $searchModel = new CutiSearch();
        $dataProvider = NIL;
        if (\Yii::$app->user->identity->role == "admin") {
         $dataProvider = $searchModel->search($this->request->queryParams);
        } else {
        $filter =  Cuti::findOne(['status' => 'diterima']);
        $searchModel->status = 'diterima';
        $dataProvider = $searchModel->searchByIdentity($this->request->queryParams);

        }
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
}

    /**
     * Updates an existing Cuti model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_cuti Id Cuti
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_cuti)
    {
        $model = $this->findModel($id_cuti);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_cuti' => $model->id_cuti]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cuti model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_cuti Id Cuti
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_cuti)
    {
        $this->findModel($id_cuti)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cuti model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_cuti Id Cuti
     * @return Cuti the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_cuti)
    {
        if (($model = Cuti::findOne(['id_cuti' => $id_cuti])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionExportPdf($id_cuti)
    {
        $searchModel = new CutiSearch();
        $model =  $this->findModel($id_cuti);
     
        $html = $this->renderPartial('cetak_cuti',['model'=>$model]);
        $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/vendor/autoload.php']);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit;
    }
}
