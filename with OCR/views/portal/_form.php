<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Portal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div style="max-width: 1000px; margin: 40px auto; padding: 15px; box-sizing: border-box;">
    <div class="card" id="card" style="background-color: rgba(32, 30, 67, 0.8) !important; border: 3px solid darkblue;">
        <div class="card-body">

        <h1 class="text-center mb-4" style="font-size: 44px; color: white; "><?= Html::encode($this->title) ?></h1>
        
        <?php $form = ActiveForm::begin(['options' => [
            'class' => 'check-valid',
            'enctype' => 'multipart/form-data'
        ]]); ?>

        <div class="row">
            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'file')->fileInput([
                                    'class' => 'form-control',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                ])->label('<i class="bi bi-upload" style="margin-right: 10px;"></i> Upload Image', [
                                    'class' => 'form-control',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display the uploaded image if it exists -->
            <?php if ($model->imageFile): ?>
                <div class="col-md-8 mb-2">
                    <label class="font-weight-bold" style="color: white; font-size: 16px;">Current Image:</label>
                    <div class="col-md-12 mb-2">
                    <?= Html::img(Yii::getAlias('@web') . '/theme/adminux/html/assets/img/' . $model->imageFile, [
                        'class' => 'img-thumbnail',
                        'style' => 'width: 800px; height: 400px; object-fit: cover;'
                    ]) ?>
                    </div>
                </div>
                <?= Html::hiddenInput('Career[imageFile]', $model->imageFile) ?>
            <?php endif; ?>
        </div>
        
        <h6 class="title bi bi-briefcase" style="font-size: 20px; color: white;">&nbsp; Job Details</h6>

        <div class="row">
            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'title')->textInput([
                                    'placeholder' => 'Enter the job title',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'title-input', // Add an ID
                                ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Job Title', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'title', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'job_type')->dropDownList($typeList, [
                                    'prompt' => 'Choose the job types',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'jobType-dropdown', // Add an ID
                                ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Job Type', [
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
            
            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'schedule')->textInput([
                                    'placeholder' => 'Enter the schedule',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'schedule-input', // Add an ID
                                ])->label('<i class="bi bi-calendar-week" style="margin-right: 10px;"></i>  Job Schedule', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'schedule', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'location')->textInput([
                                    'placeholder' => 'Enter the job location (city)',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'location-input', // Add an ID
                                ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Job Location', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'location', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="title bi bi-briefcase" style="font-size: 20px; color: white;">&nbsp; Salary</h6>
        <div class="row">
            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'min_salary')->textInput([
                                    'placeholder' => 'Enter the minimum salary',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'min-input', // Add an ID
                                ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Min Salary', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'min_salary', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'max_salary')->textInput([
                                    'placeholder' => 'Enter the maximum salary',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id' => 'max-input', // Add an ID
                                ])->label('<i class="bi bi-briefcase" style="margin-right: 10px;"></i>  Max Salary', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'max_salary', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <h6 class="title bi bi-briefcase" style="font-size: 20px; color: white;">&nbsp; Job Description</h6>
            
            <div class="col-md-12">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'description')->textarea([
                                    'placeholder' => 'Describes the job (Write in one paragraph)',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'rows' => 6,
                                ])->label('', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'description', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>

        <h6 class="title bi bi-briefcase" style="font-size: 20px; color: white;">&nbsp; Job Responsibilities and Requirements</h6>

            <div class="col-md-12">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'responsibilities')->textarea([
                                    'placeholder' => 'List the job responsibilities and requirements (Auto "-" when pressing "Enter")',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id'=> 'responsibilities-textarea',
                                    'rows' => 6,
                                ])->label('', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'responsibilities', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>

        <h6 class="title bi bi-briefcase" style="font-size: 20px; color: white;">&nbsp; Job Benefits</h6>

            <div class="col-md-12">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" style="background-color: transparent; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating">
                                <?= $form->field($model, 'benefit')->textarea([
                                    'placeholder' => 'List the benefits of the job (Auto "-" when pressing "Enter")',
                                    'style' => 'font-size: 16px; color: black; background-color: white !important;',
                                    'id'=> 'benefit-textarea',
                                    'rows' => 6,
                                ])->label('', [
                                    'class' => 'form-control border-start-0',
                                    'style' => 'font-size: 16px; color: white; background-color: transparent !important; padding: 5px;'
                                ])->error(false) ?>
                            </div>
                        </div>
                        <div class="error-container mt-2" style="font-size: 14px; color: red;">
                            <?= Html::error($model, 'benefit', ['class' => 'error-message']) ?>
                        </div>
                    </div>
                </div>
            </div>

        <div class="card-footer d-flex justify-content-end">
            <?= Html::submitButton('Save', ['class' => 'btn btn-md btn-theme bg-green me-2']) ?>
            <?= Html::a('Cancel', ['portal/index'], ['class' => 'btn btn-md btn-theme bg-red']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        </div>
    </div>
    
    <style>
    .error-message {
        color: red;
        background-color: transparent;
        padding: 5px;
        font-size: 16px;
        margin-top: 5px;
        border-radius: 3px;
        display: flex;
        align-items: center;
    }

    .error-message.hidden {
        display: none; /* Hide error message when input is valid */
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Select all input fields and dropdowns
    var fields = [
        { id: 'title-input' },
        { id: 'jobType-dropdown' },
        { id: 'schedule-input' },
        { id: 'location-input' },
        { id: 'min-input' },
        { id: 'max-input' }
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

    document.getElementById('responsibilities-textarea').addEventListener('keydown', function(event) {
        handleEnterKey(event, 'responsibilities-textarea');
    });

    document.getElementById('benefit-textarea').addEventListener('keydown', function(event) {
        handleEnterKey(event, 'benefit-textarea');
    });


    </script>
</div>