<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
  

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
            'inputOptions' => ['class' => 'col-lg-3 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

    <div>
    <h1><span>I</span>n<span>tersection</span></h1>
<style>

h1{
  color: #484848;
  font-size: 50px;
  font-weight: bold;
  font-family: monospace;
  letter-spacing: 7px;
  cursor: pointer
}
h1 span{
  transition: .5s linear
}
h1:hover span:nth-child(1){
  margin-right: 5px
}
h1:hover span:nth-child(1):after{

}
h1:hover span:nth-child(2){
  margin-left: 30px
}
h1:hover span{
  color: #fff;
  text-shadow: 0 0 10px #000,
               0 0 20px #fff, 
               0 0 40px #fff;
}
</style>
    </div>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

       

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                
                <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
       
                <?= Html::a($text = 'Регистрация', $url = '../site', ['class'=> 'btn btn-denger']) ?>
            </div>
        </div>


    <?php ActiveForm::end(); ?>

   
</div>
