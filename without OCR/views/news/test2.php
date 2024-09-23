<?php

use yii\helpers\Html;

list($width, $height) = getimagesize(\Yii::getAlias('@webroot') . '/upload/company/' . $model->requestor->company->logo);

$rst = $width - $height;
if ($rst > 150) {
    $img = [
        'style' => 'width: 250px;'
    ];
} else if ($rst > 69 && $rst < 148) {
    $img = [
        'style' => 'width: 150px;'
    ];
} else if ($rst > 1 && $rst < 50) {
    $img = [
        'style' => 'width: 150px;'
    ];
} else {
    $img = [
        'style' => 'width: 150px;'
    ];
}
?>

<table width="100%" border="0" cellspacing="0">
    <tr>
        <td width="50%">
            <table width="100%" border="0" cellspacing="0">
                <tr>
                    <td style="font-size:17px;font-weight:bold">
                        <?= $model->requestor->company->name ?>
                    </td>
                    <td>
                        Company no:
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $model->requestor->company->company_no ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $model->requestor->company->address ?>

                    </td>
                </tr>
            </table>

        </td>
        <td width="40%" style="text-align: right;">
            <?= Html::img(\Yii::getAlias('@webroot') . '/upload/company/' . $model->requestor->company->logo, $img) ?>

        </td>
    </tr>
</table>
<br>