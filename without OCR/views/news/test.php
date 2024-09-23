<?php

use yii\helpers\Html;

list($width, $height) = getimagesize(\Yii::getAlias('@webroot') . '/upload/company/' . $model->company->logo);

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
        <td style="text-align: right; vertical-align: top;">
            <?= Html::img(\Yii::getAlias('@webroot') . '/upload/company/' . $model->company->logo, $img) ?>
        </td>
    </tr>
</table>
<br>

<table width="100%" border="0" cellspacing="0">
    <tr>
        <td style="text-align: left;">
            <h4>LEAVE APPLICATION FORM</h4>
        </td>
        <td style="text-align: right; font-size: 10px;">
            <?= $model->leave_no ?>
        </td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="6">
    <tr style="background-color: #c8c8c8; border: 1px solid #c8c8c8;">
        <th colspan="9" style="color: #000; text-align: left; border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000;">LEAVE INFO</th>
    </tr>
    <tr>
        <td width="150px" style="border-left: 1px solid #000; border-top: 1px solid #000;">Name</td>
        <td colspan="8" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->user->employee->fullname ?></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Designation</td>
        <td colspan="4" style="border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->user->employee->designation ?></td>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Employee No</td>
        <td colspan="3" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->user->employee->employee_no ?></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Location</td>
        <td colspan="2" style="border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->user->employee->designation ?></td>
        <td colspan="2" style="border-left: 1px solid #000; border-top: 1px solid #000;">Department</td>
        <td colspan="4" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->user->employee->department->name ?></td>
    </tr>
    <?php if ($model->is_half_day == 0) : ?>
        <tr>
            <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Leave From</td>
            <td colspan="2" style="border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->start_date ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000;">to</td>
            <td colspan="2" style="border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->end_date ?></td>
            <td colspan="2" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->total_day ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000">Day(s)</td>
        </tr>
    <?php else : ?>
        <tr>
            <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Leave</td>
            <td colspan="3" style="border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->start_date ?></td>
            <td colspan="2" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000;"><?= ($model->hf_dy == 1) ? 'AM' : 'PM' ?></td>
            <td colspan="2" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000;"><?= $model->total_day ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000">Day</td>
        </tr>
    <?php endif; ?>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Leave Type</td>
        <td colspan="8" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->leaveType->name ?> <?= ($model->is_half_day == 1) ? '(Half Day)' : '' ?></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Reason</td>
        <td colspan="8" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->reason ?></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Contact Address</td>
        <td colspan="8" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->contact_address ?></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Contact Phone</td>
        <td colspan="8" style="border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000"><?= $model->contact_phone ?></td>
    </tr>
    <tr>
        <td style="border-left: 1px solid #000; border-top: 1px solid #000;">Signature</td>
        <td colspan="3" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000;">
            <?php if (!empty($model->user->employee->signature)) : ?>
                <?= Html::img(\Yii::getAlias('@webroot') . '/upload/signature/' . $model->user->employee->signature, [
                    'style' => 'width: 100px;'
                ]) ?>
            <?php endif; ?>
        </td>
        <td colspan="1" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000;">Date</td>
        <td colspan="4" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000;"><?= $model->apply_date ?></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="6">
    <tr style="background-color: #c8c8c8; border: 1px solid #c8c8c8;">
        <th colspan="6" style="color: #000; text-align: left; border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000;">FOR OFFICE USE</th>
    </tr>

    <tr>
        <td width="20%" style="text-align: left; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000">Type of Leave</td>
        <td width="15%" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000">Entitlement</td>
        <td width="16%" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000">Leave Taken</td>
        <td width="16%" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000">Balance To Date</td>
        <td width="16%" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000">Leave Applied</td>
        <td width="17%" style="text-align: center; border-left: 1px solid #000; border-top: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000">Balance Available</td>
    </tr>

    <?php foreach ($modelLeaveEnt as $key => $value) :
        if ($model->leave_type == $value->leave_type) {
            $applied = $model->total_day;
        } else {
            $applied = '';
        }
    ?>
        <tr>
            <td style="text-align: left; border-left: 1px solid #000; border-bottom: 1px solid #000"><?= $value->leaveType->name ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-bottom: 1px solid #000"><?= $value->ent_day ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-bottom: 1px solid #000"><?= $value->ent_day - $value->balance_day ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-bottom: 1px solid #000"><?= ($applied != '') ? ($value->balance_day + $applied) : $value->balance_day ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-bottom: 1px solid #000"><?= $applied ?></td>
            <td style="text-align: center; border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000"><?= $value->balance_day ?></td>
        </tr>
    <?php endforeach; ?>
</table>