<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\SignupForm;
use backend\models\NklBbsSelectRecord;
use backend\models\NklBbsSelectRecordSearch;

use backend\models\NklNewsInfo;
use backend\models\NklNewsInfoSearch;

use backend\models\NklActivityInfo;
use backend\models\NklActivityInfoSearch;
/**
 * Site controller
 */
class SiteController extends Controller
{

    public function actionNklBbsInfo()
    {
        $query = NklBbsInfo::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $NklNewsInfos = $query->orderBy('bbs_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('bbsselect', [
            'newsinfo' => $NklNewsInfos,
            'pagination' => $pagination,
        ]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionNklManagersInfo()
    {
        $query = NklManagersInfo::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $NklNewsInfos = $query->orderBy('manger_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'newsinfo' => $NklNewsInfos,
            'pagination' => $pagination,
        ]);
    }

    public function actionSearchbbs()
    {
        $searchModel = new NklBbsSelectRecordSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('searchbbs', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }
    public function actionAddbbs()
    {
        $model = new NklBbsSelectRecord();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
            //return $this->redirect(['view', 'manager_id' => $model->manager_id, 'bbs_solveTime' => $model->bbs_solveTime]);
        }

        return $this->render('addbbs', [
            'model' => $model,
        ]);

    }

     public function actionAddnews()
    {
        $model = new NklNewsInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
            //return $this->redirect(['view', 'id' => $model->news_id]);
        }
    
        return $this->render('addnews', [
            'model' => $model,
        ]);
    }
    public function actionSearchnews()
    {
        $searchModel = new NklNewsInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('searchnews', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAddactivities()
    {
        $model = new NklActivityInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
            //return $this->redirect(['view', 'id' => $model->activity_id]);
        }

        return $this->render('addactivities', [
            'model' => $model,
        ]);
    }
    public function actionSearchactivities()
    {
        $searchModel = new NklActivityInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('searchactivities', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionHomework()
    {
        return $this->render('homework');
    }
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                //'only' =>['logout','signup','login','index','homework','newsselect','bbsselect'],
                'rules' => [
                    [
                        'actions' => ['login', 'error','signup'],//,'signup'
                        'allow' => true,
                       // 'roles' => ['?']
                    ],
                    [
                        'actions' => ['index','addnews','searchnews','addactivities','searchactivities','addbbs','searchbbs','homework','logout'], //
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
            return $this->actionIndex();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
        //return $this->render('login');
    }
}
