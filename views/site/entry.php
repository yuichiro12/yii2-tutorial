<?php
/**
 * Created by PhpStorm.
 * User: yuichiro
 * Date: 2016/04/15
 * Time: 19:12
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>

<div class="form-group">
    <?= Html::submitButton('送信', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>