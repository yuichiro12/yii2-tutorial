<?php
/**
 * Created by PhpStorm.
 * User: yuichiro
 * Date: 2016/04/15
 * Time: 18:44
 */

use yii\helpers\Html;
?>

<p>あなたは次のように入力しました。</p>

<ul>
    <li><label>名前</label>: <?= Html::encode($model->name) ?></li>
    <li><label>メール</label>: <?= Html::encode($model->email) ?></li>
</ul>
