<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Job Application Form';
?>

<div style="max-width: 1500px; margin: 40px auto; padding: 15px; box-sizing: border-box;">
    <div class="card" id="card" style="background-color: rgba(32, 30, 67, 0.8) !important; border: 3px solid darkblue;">
        <div class="card-body">
        
            <?php $form = ActiveForm::begin(['options' => [
            'class' => 'check-valid',
            'enctype' => 'multipart/form-data'
            ]]); ?>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#employment">Desired Employment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#education">Education & Work Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#skill">Skills & Languages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#project">Training & Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#acknowledge">Acknowledgement</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="personal" class="tab-pane active" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 850px;">
                <h6 class="title" style="border-bottom: 4px solid white;"> Personal Details </h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'name')->textInput([
                                                'placeholder' => 'Enter your full name',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'name-input',
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Full Name', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'name', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'age')->textInput([
                                                'placeholder' => 'Enter your age',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'age-input',
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> Age', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'age', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'gender')->dropDownList($userGender, [
                                                'prompt' => 'Choose your Gender',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'gender-input',
                                            ])->label('<i class="bi bi-gender-ambiguous" style="margin-right: 10px;"></i>  Gender', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'gender', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'ic_number')->textInput([
                                                'placeholder' => 'Enter your IC number',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'ic-input',
                                                'maxlength' => 14
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> I/C Number', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'ic_number', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'dob')->Input('date',[
                                                'placeholder' => 'Enter your date of birth',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'dob-input',
                                            ])->label('<i class="bi bi-calendar-event" style="margin-right: 10px;"></i>  Date of Birth', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'dob', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'pob')->textInput([
                                                'placeholder' => 'Enter your place of birth',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'pob-input',
                                            ])->label('<i class="bi bi-geo-alt" style="margin-right: 10px;"></i>  Place of Birth', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'pob', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'race')->radioList([
                                                'Malay' => 'Malay', 
                                                'Chinese' => 'Chinese', 
                                                'Indian' => 'Indian',
                                                'Others' => 'Others',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'id' => 'race-radio',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i> Race', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                        <div class="mb-2" id="other-race-input" style="display:none;">
                                            <?= $form->field($model, 'race_other')->textInput([
                                                'placeholder' => 'Please specify',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                ])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'race', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'religion')->radioList([
                                                'Islam' => 'Islam', 
                                                'Hindu' => 'Hindu', 
                                                'Christian' => 'Christian',
                                                'Others' => 'Others',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'id' => 'religion-radio',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Religion', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                        <div class="mb-2" id="other-religion-input" style="display:none;">
                                            <?= $form->field($model, 'religion_other')->textInput([
                                                'placeholder' => 'Please specify',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                ])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'religion', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'marital_status')->radioList([
                                                'Single' => 'Single', 
                                                'Married' => 'Married', 
                                                'Single Parent/Divorced' => 'Single Parent/Divorced',
                                                'Others' => 'Others',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'id' => 'marital-status-radio',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Marital Status', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                        <div class="mb-2" id="other-status-input" style="display:none;">
                                            <?= $form->field($model, 'marital_status_other')->textInput([
                                                'placeholder' => 'Please specify',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                ])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'marital_status', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'license')->radioList([
                                                'Car' => 'Car', 
                                                'Motorcycle' => 'Motorcycle', 
                                                'No license' => 'No license',
                                                'Others' => 'Others',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'id' => 'license-radio',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person-vcard" style="margin-right: 10px;"></i>  License', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                        <div class="mb-2" id="other-license-input" style="display:none;">
                                            <?= $form->field($model, 'license_other')->textInput([
                                                'placeholder' => 'Please specify',
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                ])->label(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'license', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        
                                        <!-- Address Label -->
                                        <div class="col-md-12">
                                            <label for="address-input" class="bi bi-geo-alt" style="font-size: 16px; color: white;">&nbsp; Address</label>
                                        </div>
                                        
                                        <!-- Address Field -->
                                        <div class="col-md-12 mb-2">
                                            <div class="form-floating">
                                                <?= $form->field($model, 'address')->textInput([
                                                    'placeholder' => 'Enter your address',
                                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                    'id' => 'address-input',
                                                ])->label(' ', [
                                                    'class' => 'form-control border-start-0',
                                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                                ])->error(false) ?>
                                            </div>
                                        </div>
                                        <!-- Address 1 Field -->
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <?= $form->field($model, 'address1')->textInput([
                                                    'placeholder' => 'Enter your address',
                                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                    'id' => 'address1-input',
                                                ])->label(' ', [
                                                    'class' => 'form-control border-start-0',
                                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                                ])->error(false) ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row gx-3 align-items-center mt-2">
                                        <!-- Poscode Field -->
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <?= $form->field($model, 'poscode')->textInput([
                                                    'placeholder' => 'Enter your poscode',
                                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                    'id' => 'poscode-input',
                                                ])->label(' ', [
                                                    'class' => 'form-control border-start-0',
                                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                                ])->error(false) ?>
                                            </div>
                                        </div>

                                        <!-- City Field -->
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <?= $form->field($model, 'city')->textInput([
                                                    'placeholder' => 'Enter your city',
                                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                    'id' => 'city-input',
                                                ])->label(' ', [
                                                    'class' => 'form-control border-start-0',
                                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                                ])->error(false) ?>
                                            </div>
                                        </div>

                                        <!-- State Field -->
                                        <div class="col-md-4 mb-1">
                                            <div class="form-floating">
                                                <?= $form->field($model, 'state')->dropDownList($stateList, [
                                                    'prompt' => 'Choose your state',
                                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                    'id' => 'state-input',
                                                ])->label(' ', [
                                                    'class' => 'form-control border-start-0',
                                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                                ])->error(false) ?>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Error Container -->
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'address', ['class' => 'error-message']) ?>
                                        <?= Html::error($model, 'state', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'phone')->textInput([
                                            'placeholder' => 'Enter your phone number',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            'id' => 'phone-input',
                                        ])->label('<i class="bi bi-phone" style="margin-right: 10px;"></i>  Phone', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'phone', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2"></div>

                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'email')->textInput([
                                            'placeholder' => 'Enter your email',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            'id' => 'email-input',
                                        ])->label('<i class="bi bi-envelope" style="margin-right: 10px;"></i>  Email', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'email', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                        <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next1']) ?>
                    </div>
                </div>

                <div id="employment" class="tab-pane fade" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px;">
                    <h6 class="title" style="border-bottom: 4px solid white;"> Desired Employment </h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'job_type')->dropDownList($typeList, [
                                                'prompt' => 'Choose the job types',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'jobType-dropdown', // Add an ID
                                            ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Employment Type', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                        <?= Html::error($model, 'job_type', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'job')->dropDownList($jobList, [
                                                'prompt' => 'Choose the job',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'jobList-dropdown', // Add an ID
                                            ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Position Applying For', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                        <?= Html::error($model, 'job', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 px-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'salary')->textInput([
                                                'placeholder' => 'Enter your desired salary',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'salary-input',
                                            ])->label('<i class="bi bi-currency-dollar" style="margin-right: 10px;"></i> Desired Salary', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                        <?= Html::error($model, 'salary', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 px-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'date')->input('date', [
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            ])->label('<i class="bi bi-calendar-range" style="margin-right: 10px;"></i>  Date you can start', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                        <?= Html::error($model, 'date', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                            <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back2']) ?>
                            <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next2']) ?>
                        </div>
                </div>

                <div id="education" class="tab-pane fade" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 750px;">
                    <h6 class="title" style="border-bottom: 4px solid white;"> Highest Education </h6>
                    <div class="row">
                        <div class="col-md-9 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'university')->textInput([
                                                'placeholder' => 'Enter your university',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'university-input',
                                            ])->label('<i class="bi bi-mortarboard" style="margin-right: 10px;"></i>  University', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'university', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'education_level')->dropDownList($educationList,[
                                                'prompt' => 'Choose your education level',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'level-dropdown',
                                            ])->label('<i class="bi bi-book-half" style="margin-right: 10px;"></i>  Education Level', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'education_level', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'course')->textInput([
                                                'placeholder' => 'Enter your course',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'course-input',
                                            ])->label('<i class="bi bi-book-half" style="margin-right: 10px;"></i>  Course', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'course', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'graduate')->input('date',[
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            ])->label('<i class="bi bi-calendar-event" style="margin-right: 10px;"></i>  Graduation Date', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'graduate', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="title" style="border-bottom: 4px solid white;"> Working Experiences </h6>
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'company')->textInput([
                                                'placeholder' => 'Enter your old company name',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'company-input',
                                            ])->label('<i class="bi bi-building" style="margin-right: 10px;"></i>  Company Name', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'company', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'position')->textInput([
                                                'placeholder' => 'Enter your old job position',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'position-input',
                                            ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Job Position', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'position', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'period')->textInput([
                                                'placeholder' => 'Enter your working period (year/month)',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'period-input',
                                            ])->label('<i class="bi bi-calendar-event" style="margin-right: 10px;"></i>  Working Period', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'period', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'reason')->textarea([
                                                'placeholder' => 'State your reason for quitting your old job',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'rows' => 3,
                                                'id' => 'reason-input',
                                            ])->label('<i class="bi bi-question-circle" style="margin-right: 10px;"></i>  Reason', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'reason', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                            <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back3']) ?>
                            <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next3']) ?>
                        </div>
                </div>

                <div id="skill" class="tab-pane fade" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 780px;">
                    <h6 class="title" style="border-bottom: 4px solid white;"> Skills </h6>
                    <div class="col-md-12">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'skills')->textarea([
                                            'placeholder' => 'List your skills (Auto "-" when pressing "Enter")',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            'id'=> 'skills-textarea',
                                            'rows' => 6,
                                        ])->label('', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                    <?= Html::error($model, 'skills', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="title" style="border-bottom: 4px solid white;"> Languages </h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                <h3 class="title"> Bahasa Melayu</h3>
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'malay_speaking')->radioList([
                                                'Beginner' => 'Beginner', 
                                                'Moderate' => 'Moderate', 
                                                'Expert' => 'Expert',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Speaking Proficiency', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                        
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'malay_writing')->radioList([
                                                'Beginner' => 'Beginner', 
                                                'Moderate' => 'Moderate', 
                                                'Expert' => 'Expert',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Writing Proficiency', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                <h3 class="title"> English</h3>
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'english_speaking')->radioList([
                                                'Beginner' => 'Beginner', 
                                                'Moderate' => 'Moderate', 
                                                'Expert' => 'Expert',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Speaking Proficiency', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                        
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating mb-2">
                                            <?= $form->field($model, 'english_writing')->radioList([
                                                'Beginner' => 'Beginner', 
                                                'Moderate' => 'Moderate', 
                                                'Expert' => 'Expert',
                                            ], [
                                                'itemOptions' => [
                                                    'class' => 'form-check-input custom-radio',
                                                    'style' => 'margin-right: 10px;'
                                                ],
                                                'separator' => '<br>', // Separate options with line breaks
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;'
                                            ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Writing Proficiency', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) // Disable default error rendering ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                            <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back4']) ?>
                            <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next4']) ?>
                        </div>  
                </div>

                <div id="project" class="tab-pane fade" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px;">
                    <h6 class="title" style="border-bottom: 4px solid white;"> Training </h6>
                    <div class="col-md-12 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'training')->textarea([
                                            'placeholder' => 'List your training experience',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            'rows' => 6,
                                            'id' => 'training-textarea',
                                        ])->label('<i class="bi bi-book-half" style="margin-right: 10px;"></i>  Training', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) // Disable default error rendering ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2">
                                    <?= Html::error($model, 'training', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h6 class="title" style="border-bottom: 4px solid white;"> Project </h6>
                    <div class="col-md-12 mb-2">
                        <div class="card border-0" style="border-radius: 10px;">
                            <div class="card-body" style="border-radius: 10px;">
                                <div class="row gx-3 align-items-center">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'project')->textarea([
                                            'placeholder' => 'Explain about project you have handle',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            'rows' => 6,
                                            'id' => 'project-textarea',
                                        ])->label('<i class="bi bi-book-half" style="margin-right: 10px;"></i>  Project', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) // Disable default error rendering ?>
                                    </div>
                                </div>
                                <div class="error-container mt-2">
                                    <?= Html::error($model, 'project', ['class' => 'error-message']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                            <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back5']) ?>
                            <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next5']) ?>
                        </div>
                </div>

                <div id="acknowledge" class="tab-pane fade" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px;">
                    <h6 class="title" style="border-bottom: 4px solid white;"> Additional Information </h6>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'image')->fileInput([
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            ])->label('<i class="bi bi-upload" style="margin-right: 10px;"></i> Upload Profile Picture', [
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'image', ['class' => 'error-message']) ?>
                                    </div>
                                    <?php if ($model->image): ?>
                                        <p style="color: white;">Current Image: <?= Html::encode($model->image) ?></p>
                                        <?= Html::hiddenInput('Intern[image]', $model->image) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'resume')->fileInput([
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'resume-input',
                                            ])->label(
                                                '<div class="avatar avatar-30 rounded bg-red text-white">
                                                <i class="bi bi-file-pdf h5 vm"></i></div> Upload Resume', [
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'resume', ['class' => 'error-message']) ?>
                                    </div>
                                    <?php if ($model->resume): ?>
                                        <p style="color: white;">Current Resume: <?= Html::encode($model->resume) ?></p>
                                        <?= Html::hiddenInput('Intern[resume]', $model->resume) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br><br><br>
                    <h6 class="title" style="border-bottom: 4px solid white;"> Acknowledgment </h6>
                    <!-- Acknowledgment Checkbox -->
                    <div class="form-check">
                        <?= Html::checkbox('acknowledge', false, [
                            'id' => 'acknowledge-checkbox',
                            'class' => 'form-check-input'
                        ]) ?>
                        <?= Html::label('I declare that the information is true and complete to the best of my knowledge and belief.', 'acknowledge-checkbox', ['class' => 'form-check-label', 'style' => 'color: white;']) ?>
                    </div>

                    <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                        <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back6']) ?>
                        <?= Html::submitButton('Submit Application', [
                            'class' => 'btn btn-md btn-theme bg-green me-2', 
                            'style' => 'font-size: 16px;', 
                            'id' => 'submit-button',
                            'disabled' => true
                        ]) ?>
                        <?= Html::a('Cancel', ['portal/index'], ['class' => 'btn btn-md btn-theme bg-red', 'style' => 'font-size: 16px;']) ?>
                    </div>
                    <?php
                        $this->registerJs("
                            // Enable submit button when checkbox is checked
                            $('#acknowledge-checkbox').on('change', function() {
                                $('#submit-button').prop('disabled', !this.checked);
                            });
                        ");
                    ?>

                </div>
            </div>

            <?php
                $this->registerJs("
                    $('input[name=\"Employee[race]\"]').on('change', function() {
                        if ($(this).val() === 'Others' && $(this).is(':checked')) {
                            $('#other-race-input').show();
                        } else {
                            $('#other-race-input').hide();
                        }
                    });
                ");
            ?>

            <?php
                $this->registerJs("
                    $('input[name=\"Employee[religion]\"]').on('change', function() {
                        if ($(this).val() === 'Others' && $(this).is(':checked')) {
                            $('#other-religion-input').show();
                        } else {
                            $('#other-religion-input').hide();
                        }
                    });
                ");
            ?>
            
            <?php
                $this->registerJs("
                    $('input[name=\"Employee[marital_status]\"]').on('change', function() {
                        if ($(this).val() === 'Others' && $(this).is(':checked')) {
                            $('#other-status-input').show();
                        } else {
                            $('#other-status-input').hide();
                        }
                    });
                ");
            ?>

            <?php
                $this->registerJs("
                    $('input[name=\"Employee[license]\"]').on('change', function() {
                        if ($(this).val() === 'Others' && $(this).is(':checked')) {
                            $('#other-license-input').show();
                        } else {
                            $('#other-license-input').hide();
                        }
                    });
                ");
            ?>



            <?php ActiveForm::end(); ?>

    
        </div>
    </div>

    <style>
        .title {
            font-size: 28px; 
            color: white; 
            font-weight: bold;
        }

        .title::after {
            border: none;
            display: none;
        }

        .card-body {
            background-color: transparent;
        }

        .tab-pane { /* Adds a border with color firebrick */
            background-color: turquoise; /* Sets the background color to firebrick */
            padding: 15px; /* Adds padding inside the tab-pane */
            border-radius: 5px; /* Optional: Adds rounded corners to the tab-pane */
        }

        .nav-tabs > li {
            margin-right: 10px; /* Adds gap between each nav item */
        }

        .nav-tabs > li > a {
            border: 2px solid turquoise; /* Adds a firebrick border to each nav item */
            background-color: turquoise; /* Sets the background color to firebrick */
            color: white; /* Ensures the text is readable */
            border-radius: 5px; /* Optional: Adds rounded corners to the nav item */
            padding: 10px 15px; /* Adds padding to make the nav items more clickable */
        }

        .nav-tabs > li > a:hover {
            background-color: darkblue; /* Optional: Changes background color on hover */
            border-color: darkblue; /* Optional: Changes border color on hover */
        }

        .nav-tabs > li.active > a {
            background-color: blue; /* Highlights the active tab with a different background */
            color: white; /* Changes text color to match the border */
        }

        .nav-tabs > li.active > a:hover {
            background-color: darkblue; /* Optional: Changes background color on hover */
            border-color: darkblue; /* Optional: Changes border color on hover */
        }

        .error-message {
            border: none; /* Remove the border */
            background: none; /* Remove any background */
            color: red; /* Change the color of the error message text if needed */
            background-color: transparent;
            font-size: 14px;
            align-items: center;
            font-weight: bold; /* Ensures font-weight is applied */
            display: flex; /* Allows alignment of items within */
        }

        .error-message.hidden {
            display: none; /* Hide error message when input is valid */
        }

        .custom-radio {
            background-color: grey;
            border: 1px solid #ccc;
            position: relative;
            padding: 10px;
        }

        .custom-radio:checked {
            background-color: blue;
            border-color: blue;
        }

    </style>

    <script>

        document.getElementById('next1').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor action
            var nextTab = new bootstrap.Tab(document.querySelector('a[href="#employment"]'));
            nextTab.show();
        });

        document.getElementById('next2').addEventListener('click', function(event) {
            event.preventDefault();
            var nextTab = new bootstrap.Tab(document.querySelector('a[href="#education"]'));
            nextTab.show();
        });

        document.getElementById('next3').addEventListener('click', function(event) {
            event.preventDefault();
            var nextTab = new bootstrap.Tab(document.querySelector('a[href="#skill"]'));
            nextTab.show();
        });

        document.getElementById('next4').addEventListener('click', function(event) {
            event.preventDefault();
            var nextTab = new bootstrap.Tab(document.querySelector('a[href="#project"]'));
            nextTab.show();
        });

        document.getElementById('next5').addEventListener('click', function(event) {
            event.preventDefault();
            var nextTab = new bootstrap.Tab(document.querySelector('a[href="#acknowledge"]'));
            nextTab.show();
        });

        document.getElementById('back2').addEventListener('click', function(event) {
            event.preventDefault();
            var prevTab = new bootstrap.Tab(document.querySelector('a[href="#personal"]'));
            prevTab.show();
        });

        document.getElementById('back3').addEventListener('click', function(event) {
            event.preventDefault();
            var prevTab = new bootstrap.Tab(document.querySelector('a[href="#employment"]'));
            prevTab.show();
        });

        document.getElementById('back4').addEventListener('click', function(event) {
            event.preventDefault();
            var prevTab = new bootstrap.Tab(document.querySelector('a[href="#education"]'));
            prevTab.show();
        });

        document.getElementById('back5').addEventListener('click', function(event) {
            event.preventDefault();
            var prevTab = new bootstrap.Tab(document.querySelector('a[href="#skill"]'));
            prevTab.show();
        });

        document.getElementById('back6').addEventListener('click', function(event) {
            event.preventDefault();
            var prevTab = new bootstrap.Tab(document.querySelector('a[href="#project"]'));
            prevTab.show();
        });

        document.addEventListener('DOMContentLoaded', function() {
        // Select all input fields and dropdowns
        var fields = [
            { id: 'name-input' },
            { id: 'age-input' },
            { id: 'gender-input' },
            { id: 'ic-input' },
            { id: 'pob-input' },
            { id: 'address-input' },
            { id: 'address1-input' },
            { id: 'poscode-input' },
            { id: 'city-input' },
            { id: 'state-input' },
            { id: 'phone-input' },
            { id: 'email-input' },
            { id: 'salary-input' },
            { id: 'university-input' },
            { id: 'course-input' },
            { id: 'company-input' },
            { id: 'position-input' },
            { id: 'period-input' },
            { id: 'jobType-dropdown' },
            { id: 'jobList-dropdown' },
            { id: 'level-dropdown' },
            { id: 'skills-textarea' },
            { id: 'training-textarea'},
            { id: 'project-textarea'}
        ];

        fields.forEach(function(field) {
            var inputField = document.getElementById(field.id);
            if (inputField) {
                var errorMessage = inputField.nextElementSibling; // Get the error message span

            if (errorMessage && errorMessage.classList.contains('error-message')) {
                inputField.addEventListener('input', function() {
                    // Check if the input is valid
                    if (inputField.value) {
                        errorMessage.classList.add('hidden'); // Hide the error message
                    } else {
                        errorMessage.classList.remove('hidden'); // Show the error message
                    }
                });
            }
            }
            });
        });

        document.getElementById('skills-textarea').addEventListener('keydown', function(event) {
                handleEnterKey(event, 'skills-textarea');
        });

        document.getElementById('training-textarea').addEventListener('keydown', function(event) {
                handleEnterKey(event, 'training-textarea');
        });

        document.getElementById('project-textarea').addEventListener('keydown', function(event) {
                handleEnterKey(event, 'project-textarea');
        });
    
        function handleEnterKey(event, textareaId) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent default Enter behavior (new line)
            var textarea = document.getElementById(textareaId);
            var cursorPosition = textarea.selectionStart;
            var textBeforeCursor = textarea.value.substring(0, cursorPosition);
            var textAfterCursor = textarea.value.substring(cursorPosition);
            
            // Determine if a bullet is needed
            var lines = textBeforeCursor.split('\n');
            var lastLine = lines.pop().trim();
            if (lastLine && !lastLine.startsWith('- ')) {
                lines.push('- ' + lastLine);
                textBeforeCursor = lines.join('\n');
            }
            
            // Update textarea value
            textarea.value = textBeforeCursor + '\n' + textAfterCursor;
            
            // Set cursor position to the end of the new line
            textarea.selectionStart = textarea.selectionEnd = textBeforeCursor.length + 1;
            textarea.focus();
        }
    }

    document.getElementById('ic-input').addEventListener('input', function (e) {
        var icValue = e.target.value.replace(/\D/g, ''); // Remove non-digit characters
        
        // Limit to 12 digits (YYMMDDXXYYYY)
        if (icValue.length > 12) {
            icValue = icValue.slice(0, 12);
        }

        // Apply formatting as YYMMDD-XX-YYYY
        if (icValue.length > 6 && icValue.length <= 8) {
            e.target.value = icValue.slice(0, 6) + '-' + icValue.slice(6);
        } else if (icValue.length > 8) {
            e.target.value = icValue.slice(0, 6) + '-' + icValue.slice(6, 8) + '-' + icValue.slice(8);
        } else {
            e.target.value = icValue;
        }

        // Extract YYMMDD part and estimate age
        if (icValue.length >= 6) {
            var year = parseInt(icValue.slice(0, 2), 10);
            var month = parseInt(icValue.slice(2, 4), 10);
            var day = parseInt(icValue.slice(4, 6), 10);

            // Assume birthdate based on IC number's year (19XX or 20XX)
            var fullYear = year > 20 ? 1900 + year : 2000 + year; // Adjust for century

            // Calculate and set Date of Birth
            var birthdate = new Date(fullYear, month - 1, day); // Create birthdate object
            var dobFormatted = birthdate.getFullYear() + '-' + String(birthdate.getMonth() + 1).padStart(2, '0') + '-' + String(birthdate.getDate()).padStart(2, '0');
            document.getElementById('dob-input').value = dobFormatted;

            // Calculate and set Age
            var today = new Date(); // Current date
            var age = today.getFullYear() - birthdate.getFullYear();
            var m = today.getMonth() - birthdate.getMonth();

            // Adjust for upcoming birthday in the year
            if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
                age--;
            }

            // Display the estimated age in the #age-input field
            document.getElementById('age-input').value = age;
        } else {
            document.getElementById('age-input').value = ''; // Clear the age if IC is incomplete
            document.getElementById('dob-input').value = ''; // Clear the DOB if IC is incomplete
        }
    });
    
    </script>
    
</div>