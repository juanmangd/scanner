<?php


namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\UploadForm;
use frontend\models\Eventos;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\rest\ActiveController;
class UploadController extends Controller
<<<<<<< HEAD
{ 
    public function actionUpload()
    {
    	
        $model = new UploadForm();
        $eventosModel = new Eventos();
//////////////////////////////////////////////
        if (Yii::$app->request->isPost) {

            $base_url =  Url::home(true);
            $id       =  Yii::$app->request->post('id');
            $numero   =  Yii::$app->request->post('numero');
            $tipo     =  Yii::$app->request->post('tipo');

            $model->file = UploadedFile::getInstances($model,'file');

            if ($model->file && $model->validate()) {

                foreach($model->file as $file)
                {
                    $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
                    $url = $base_url . 'uploads/' . $file->baseName . '.' . $file->extension;
                    $eventosModel->id = $id;

                    $eventosModel = Eventos::findOne($id);

                    if($tipo == 'foto') {
                        switch($numero)
                        {
                            case 1:
                                $eventosModel->urlFoto1 = $url;
                                break;
                            case 2:
                                 $eventosModel->urlFoto2 = $url;
                                break;
                            case 3:
                                $eventosModel->urlFoto3 = $url;
                                break;
                            case 4:
                                $eventosModel->urlFoto4 = $url;
                                break;
                        }
                    }else
                    {
                        $eventosModel->urlVideoMovil = $url;
                    }
                }
                $eventosModel->update();
=======
{
  public function actionUpload()
  {

    $model = new UploadForm();
    $eventosModel = new Eventos();
    //////////////////////////////////////////////
    if (Yii::$app->request->isPost) {

      $base_url =  Url::home(true);
      $id       =  Yii::$app->request->post('id');
      $numero   =  Yii::$app->request->post('numero');
      $tipo     =  Yii::$app->request->post('tipo');

      $model->file = UploadedFile::getInstances($model,'file');

      if ($model->file && $model->validate()) {

        foreach($model->file as $file)
        {

          $relative_file_name = 'uploads/' . $id . '_' . $file->baseName . '.' . $file->extension;

          $file->saveAs($relative_file_name);
          $url = $base_url . $relative_file_name;
          $eventosModel->id = $id;

          $eventosModel = Eventos::findOne($id);

          if($tipo == 'foto') {
            switch($numero)
            {
            case 1:
              $eventosModel->urlFoto1 = $url;
              break;
            case 2:
              $eventosModel->urlFoto2 = $url;
              break;
            case 3:
              $eventosModel->urlFoto3 = $url;
              break;
            case 4:
              $eventosModel->urlFoto4 = $url;
              break;
            }
          }else
            {
              $eventosModel->urlVideoMovil = $url;
>>>>>>> 5f855f036ebdfb8ad779cc3e4447fbdc00cf0dee
            }
        }
        $eventosModel->update();
      }
    }else
      return $this->render('upload', ['model' => $model]);
  }
}
/* esto es para poner un filtro, por ejemplo solo se puede acceder con HttpBasicAuth
 * ver http://www.yiiframework.com/doc-2.0/guide-rest-controllers.html
 public function behaviors()
 {
   $behaviors = parent::behaviors();
   $behaviors['authenticator'] = [
     'class' => HttpBasicAuth::className(),
     ];
   return $behaviors;
}*/

// este metodo se sobreescribe para evitar que por ejemplo
// alguien haga delete usando REST
/*public function actions()
{
    $actions = parent::actions();

    // disable the "delete" and "create" actions
    unset($actions['delete'], $actions['create']);

    return $actions;
}
 */


/**
 * Checks the privilege of the current user.
 *
 * This method should be overridden to check whether the current user has the privilege
 * to run the specified action against the specified data model.
 * If the user does not have access, a [[ForbiddenHttpException]] should be thrown.
 *
 * @param string $action the ID of the action to be executed
 * @param \yii\base\Model $model the model to be accessed. If null, it means no specific model is being accessed.
 * @param array $params additional parameters
 * @throws ForbiddenHttpException if the user does not have access
 *//*
 public function checkAccess($action, $model = null, $params = [])
 {
   // check if the user can access $action and $model
   // throw ForbiddenHttpException if access should be denied
 }

  */

