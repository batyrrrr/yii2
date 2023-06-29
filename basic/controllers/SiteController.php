<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
// ========PAGE INDEX=============
use app\models\Slider;
use app\models\Constructions;
use app\models\Form;
use app\models\Category;
use app\models\Item;
// ==========PAGE ABOUT==========
use app\models\Abouthero;
use app\models\Carouselimg;
use app\models\Stats;
use app\models\Aboutpagestory;
use app\models\Aboutpageteam;
use app\models\Altservices;
use app\models\Contactpage;
use app\models\Feedback;
use app\models\Forminput;
use app\models\Servicedetailsimg;
use app\models\Servicescontent;
use app\models\Serviceshero;
use app\models\Servicestestimonials;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
        $feedback = new Feedback();
        $carouselImg = Carouselimg::find()->all();
        $slider = Slider::find()->all();
        $form = Form::find()->all();
        $constructions = Constructions::find()->where(['status' => 1])->all();
        $categories = Category::find()->all();
        $item = Item::find()->all();
        $forminpiut = Forminput::find()->all();

        if ($this->request->isPost) {
            if ($feedback->load($this->request->post()) && $feedback->save()) {

                return $this->redirect(['/site/index']);
            }
        }

        return $this->render('index', [

            'slider' => $slider,
            'feedback' => $feedback,
            'carouselImg' => $carouselImg,
            'form' => $form,
            'categories' => $categories,
            'item' => $item,
            'constructions' => $constructions,
            'forminpiut' => $forminpiut,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'old';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $contactpage = Contactpage::find()->all();
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'contactpage' => $contactpage

        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {

        $stats = Stats::find()->all();
        $hero_image = Abouthero::find()->all();
        $ourStory = Aboutpagestory::find()->all();
        $team = Aboutpageteam::find()->all();


        return $this->render('about', [
            'stats' => $stats,
            'hero_image' => $hero_image,
            'ourStory' => $ourStory,
            'team' => $team,
        ]);
    }

    public function actionServices()
    {
        $bg = Serviceshero::find()->all();
        $services = Servicescontent::find()->all();
        $alts = Altservices::find()->all();
        $testiomnials = Servicestestimonials::find()->all();
        return $this->render('services', [
            'bg' => $bg,
            'services' => $services,
            'alts' => $alts,
            'testiomnials' => $testiomnials
        ]);
    }
    public function actionServiceDetails()
    {
        $detailimg = Servicedetailsimg::find()->all();
        return $this->render('service-details', [
            'detailimg' => $detailimg
        ]);
    }

    public function actionNews()
    {
        return $this->render('news');
    }
    public function actionNewsPage()
    {
        return $this->render('news-page');
    }
    public function actionProfile()
    {
        return $this->render('profile');
    }
    public function actionVacasions()
    {
        return $this->render('vacasions');
    }
}
