<?php
/**
 * @var \yii\web\View $this
 */
?>

<div class="admin-default-index">
    <h1>Управление сайтом</h1>
</div>

<table class="table">
    <thead>
    <tr>
        <th colspan="2">Данные о системе</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Версия CMS</td>
        <td><span class="label label-default"><?php echo Yii::$app->version; ?></span></td>
    </tr>
    <tr>
        <td>Версия Yii</td>
        <td><span class="label label-default"><?php echo Yii::getVersion(); ?></span></td>
    </tr>
    <tr>
        <td>Версия PHP</td>
        <td><span class="label label-default"><?php echo phpversion(); ?></span></td>
    </tr>
    </tbody>
</table>
