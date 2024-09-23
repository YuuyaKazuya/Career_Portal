<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Intern $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Internship Form';
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
                    <a class="nav-link active" data-bs-toggle="tab" href="#personal-details">Personal Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#internship-info">Internship Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#documents">Documents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#acknowledgment">Acknowledgment</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="personal-details" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px;">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'name')->textInput([
                                            'placeholder' => 'Enter your full name',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            'id' => 'name-input'
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Full Name', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'name', ['class' => 'error-message']) ?>
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
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        
                                        <!-- Address Label -->
                                        <div class="col-md-12">
                                            <label for="address1-input" class="bi bi-geo-alt" style="font-size: 16px; color: white;">&nbsp;  Address</label>
                                        </div>
                                        
                                        <!-- Address 1 Field -->
                                        <div class="col-md-12 mb-2">
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

                                        <!-- Address 2 Field -->
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <?= $form->field($model, 'address2')->textInput([
                                                    'placeholder' => 'Enter your address',
                                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                    'id' => 'address2-input',
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
                                        <?= Html::error($model, 'address1', ['class' => 'error-message']) ?>
                                        <?= Html::error($model, 'city', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'gender')->dropDownList($userGender, [
                                            'prompt' => 'Choose your gender',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-gender-ambiguous" style="margin-right: 10px;"></i>  Gender', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'gender', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2"></div>

                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'guardian')->textInput([
                                            'placeholder' => 'Emergency contact name',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Emergency Contact Name', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'guardian', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'status')->dropDownList($statsList, [
                                            'prompt' => 'Choose your status',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-info-circle" style="margin-right: 10px;"></i>  Status', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'status', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2"></div>
                                            
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'relationship')->dropDownList($relayList, [
                                            'prompt' => 'Choose your relationship',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Relationship', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'relationship', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'phone')->textInput([
                                            'placeholder' => 'Enter phone number',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
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
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'email')->textInput([
                                            'placeholder' => 'Enter email address',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
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

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'emergency_contact')->textInput([
                                            'placeholder' => 'Enter emergency contact number',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-phone" style="margin-right: 10px;"></i>  Emergency Contact Phone Number', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'emergency_contact', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                            <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next1']) ?>
                        </div>
                </div> 

                <div class="tab-pane fade" id="internship-info" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px;">
                    <div class="row">
                        <div class="col-md-9 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'university')->textInput([
                                                'placeholder' => 'Enter your university',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'email-input',
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
                                            <?= $form->field($model, 'education_level')->dropDownList($educationList, [
                                                'prompt' => 'Choose your education level',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'education-input',
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
                    </div>

                    <div class="row">
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

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'start_date')->input('date', [
                                                'placeholder' => 'Select start date',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'start-date-input',
                                            ])->label('<i class="bi bi-calendar-week" style="margin-right: 10px;"></i> Period of Internship', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'start_date', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'end_date')->input('date', [
                                                'placeholder' => 'Select end date',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'end-date-input',
                                            ])->label('<i class="bi bi-calendar-week" style="margin-right: 10px;"></i> (End Date)', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'end_date', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'pa')->textInput([
                                            'placeholder' => 'Enter your academic advisor name',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-person" style="margin-right: 10px;"></i>  Academic Advisor', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'pa', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'position')->textInput([
                                                'placeholder' => 'Enter job position',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                                'id' => 'job-input', // Add an ID
                                            ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Position', [
                                                'class' => 'form-control border-start-0',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ])->error(false) ?>
                                        </div>
                                    </div>
                                    <div class="error-container mt-2" style="font-size: 14px; color: red;">
                                        <?= Html::error($model, 'position', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'pa_contact')->textInput([
                                            'placeholder' => 'Enter phone number',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-phone" style="margin-right: 10px;"></i>  Academic Advisor Number', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'pa_contact', ['class' => 'error-message']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="form-floating">
                                        <?= $form->field($model, 'pa_email')->textInput([
                                            'placeholder' => 'Enter email address',
                                            'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                        ])->label('<i class="bi bi-envelope" style="margin-right: 10px;"></i>  Academic Advisor Email', [
                                            'class' => 'form-control border-start-0',
                                            'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                        ])->error(false) ?>
                                    </div>
                                    <div class="error-container mt-2">
                                        <?= Html::error($model, 'pa_email', ['class' => 'error-message']) ?>
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
                

                <div class="tab-pane fade" id="documents" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px;">
                        <!-- Display the uploaded image if it exists -->
                        <?php if ($model->image): ?>
                            <div class="col-md-6 mb-3">
                                <div class="col-md-6 mb-3">
                                    <?= Html::img(Yii::getAlias('@web') . '/theme/adminux/html/assets/img/' . $model->image, ['class' => 'img-thumbnail', 'width' => '200px']) ?>
                                </div>
                            </div>
                            <?= Html::hiddenInput('Intern[image]', $model->image) ?>
                        <?php endif; ?>

                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'image')->fileInput([
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            ])->label('<i class="bi bi-upload" style="margin-right: 10px;"></i> Upload Image', [
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ]) ?>
                                        </div>
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
                                            ])->label(
                                                '<div class="avatar avatar-30 rounded bg-red text-white">
                                                <i class="bi bi-file-pdf h5 vm"></i></div> Upload Resume', [
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ]) ?>
                                        </div>
                                    </div>
                                    <?php if ($model->resume): ?>
                                        <p style="color: white;">Current Resume: <?= Html::encode($model->resume) ?></p>
                                        <?= Html::hiddenInput('Intern[resume]', $model->resume) ?>
                                    <?php endif; ?>
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
                                            <?= $form->field($model, 'university_letter')->fileInput([
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            ])->label('<i class="bi bi-upload" style="margin-right: 10px;"></i> Upload University Letter', [
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ]) ?>
                                        </div>
                                    </div>
                                    <?php if ($model->university_letter): ?>
                                        <p style="color: white;">Current University Letter: <?= Html::encode($model->university_letter) ?></p>
                                        <?= Html::hiddenInput('Intern[university_letter]', $model->university_letter) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-2">
                            <div class="card border-0" style="border-radius: 10px;">
                                <div class="card-body" style="border-radius: 10px;">
                                    <div class="row gx-3 align-items-center">
                                        <div class="form-floating">
                                            <?= $form->field($model, 'cover_letter')->fileInput([
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                            ])->label(
                                                '<div class="avatar avatar-30 rounded bg-red text-white">
                                                <i class="bi bi-file-pdf h5 vm"></i></div> Upload Cover Letter', [
                                                'class' => 'form-control',
                                                'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                            ]) ?>
                                        </div>
                                    </div>
                                    <?php if ($model->cover_letter): ?>
                                        <p style="color: white;">Current Cover Letter: <?= Html::encode($model->cover_letter) ?></p>
                                        <?= Html::hiddenInput('Intern[cover_letter]', $model->cover_letter) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                            <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back3']) ?>
                            <?= Html::a('Next', '#', ['class' => 'btn btn-primary', 'id' => 'next3']) ?>
                        </div>
                </div>
                        
                <div class="tab-pane fade" id="acknowledgment" style="background-color: transparent; padding: 20px; border-radius: 10px; height: 700px; position: relative;">

                    <p style="color: white;">We acknowledge the dedication and hard work of all our team members, whose contributions have been invaluable to the success of our projects. We also extend our gratitude to our stakeholders, clients, and partners for their unwavering support and collaboration.</p>
                    <p style="color: white;">Your application submission is a testament to your commitment, and we appreciate your interest in being a part of our dynamic team.</p>

                    <!-- Acknowledgment Checkbox -->
                    <div class="form-check">
                        <?= Html::checkbox('acknowledge', false, [
                            'id' => 'acknowledge-checkbox',
                            'class' => 'form-check-input'
                        ]) ?>
                        <?= Html::label('I declare that the information is true and complete to the best of my knowledge and belief.', 'acknowledge-checkbox', ['class' => 'form-check-label', 'style' => 'color: white;']) ?>
                    </div>

                    <div class="tab-footer d-flex justify-content-end" style="position: absolute; bottom: 0; right: 0; background-color: transparent; padding: 10px;">
                        <?= Html::a('Back', '#', ['class' => 'btn btn-secondary me-2', 'id' => 'back4']) ?>
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
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    
        
    

    <style>
    .card-body {
        background-color: transparent;
    }

    .tab-pane {
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

    .input-container {
        border-bottom: none;
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
    </style>

    <script>

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

    document.getElementById('next1').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default anchor action
        var nextTab = new bootstrap.Tab(document.querySelector('a[href="#internship-info"]'));
        nextTab.show();
    });

    document.getElementById('next2').addEventListener('click', function(event) {
        event.preventDefault();
        var nextTab = new bootstrap.Tab(document.querySelector('a[href="#documents"]'));
        nextTab.show();
    });

    document.getElementById('next3').addEventListener('click', function(event) {
        event.preventDefault();
        var nextTab = new bootstrap.Tab(document.querySelector('a[href="#acknowledgment"]'));
        nextTab.show();
    });

    document.getElementById('back2').addEventListener('click', function(event) {
        event.preventDefault();
        var prevTab = new bootstrap.Tab(document.querySelector('a[href="#personal-details"]'));
        prevTab.show();
    });

    document.getElementById('back3').addEventListener('click', function(event) {
        event.preventDefault();
        var prevTab = new bootstrap.Tab(document.querySelector('a[href="#internship-info"]'));
        prevTab.show();
    });

    document.getElementById('back4').addEventListener('click', function(event) {
        event.preventDefault();
        var prevTab = new bootstrap.Tab(document.querySelector('a[href="#documents"]'));
        prevTab.show();
    });

    document.addEventListener('DOMContentLoaded', function() {
    // Select all input fields and dropdowns
    var fields = [
        { id: 'job-title-dropdown' },
        { id: 'name-input' },
        { id: 'gender-dropdown' },
        { id: 'phone-input' },
        { id: 'email-input' },
        { id: 'course-input' },
        { id: 'university-input' },
        { id: 'address1-input' },
        { id: 'address2-input' },
        { id: 'poscode-input' },
        { id: 'city-input' },
        { id: 'state-dropdown' }
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

    $(document).ready(function() {
        $('#start-date-input, #end-date-input, #dob-input').datepicker({
            dateFormat: 'dd-mm-yyyy', // Format to match the database date format
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
        });
    });

    $(document).ready(function(){
        $('.nav-tabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });

    </script>

</div>
