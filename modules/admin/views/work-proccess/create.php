<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WorkProccess */

$this->title = 'Добавить новый процесс';
$this->params['breadcrumbs'][] = ['label' => 'Процесс работы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('/layouts/page-bar') ?>
<div class="work-proccess-create">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php if(\Yii::$app->session->hasFlash('creatingError')) : ?>
                <div class="alert alert-danger alert-dismissible" style="margin-top: 5%;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <?php echo \Yii::$app->session->getFlash('creatingError'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?= $this->render('_form', [
        'model' => $model,
        'services' => $services,
    ]) ?>

</div>
