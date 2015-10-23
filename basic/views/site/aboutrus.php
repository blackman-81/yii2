<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Eto stranitsa About. Vi mozhete modifizirovat' tekuschii fail dlya customizazii yeyo soderzhimogo:
    </p>

    <code><?= __FILE__ ?></code>
</div>
