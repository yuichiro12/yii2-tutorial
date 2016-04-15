<?php
/**
 * Created by PhpStorm.
 * User: yuichiro
 * Date: 2016/04/15
 * Time: 20:58
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>国リスト</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->code})") ?>:
            <?= $country->population ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>