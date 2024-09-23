<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Careers $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Create a Internship Job';
?>

<div style="max-width: 1000px; margin: 40px auto; padding: 15px; box-sizing: border-box;">
    <div class="card" id="card">
        <div class="card-body">

        <h1 class="text-center mb-4" style="font-size: 44px; color: white; "><?= Html::encode($this->title) ?></h1>
        <div class="mt-3">
                <label for="colorSelect1" class="form-label">Choose Background Color: (card)</label>
                <select id="colorSelect1" class="form-select">
                <option value="#000000">#000000</option>
                <option value="#0a0913">#0a0913</option>
                <option value="#131122">#131122</option>
                <option value="#1d1936">#1d1936</option>
                <option value="#282442">#282442</option>
                <option value="#040622">#040622</option>
                <option value="#150f38">#150f38</option>
                <option value="#151345">#151345</option>
                <option value="#1c1d54">#1c1d54</option>
                <option value="#26236b">#26236b</option>
                <option value="#10102c">#10102c</option>
                <option value="#342c5c">#342c5c</option>
                <option value="#67647d">#67647d</option>
                <option value="#272d50">#272d50</option>
                <option value="#bdc7d8">#bdc7d8</option>
                <option value="#201E43">#201E43</option>
                <option value="#134B70">#134B70</option>
                <option value="#508C9B">#508C9B</option>
                <option value="#EEEEEE">#EEEEEE</option>
                <option value="#17153B">#17153B</option>
                <option value="#2E236C">#2E236C</option>
                <option value="#433D8B">#433D8B</option>
                <option value="#C8ACD6">#C8ACD6</option>
                <option value="#070F2B">#070F2B</option>
                <option value="#1B1A55">#1B1A55</option>
                <option value="#535C91">#535C91</option>
                <option value="#9290C3">#9290C3</option>
                <option value="#2C3639">#2C3639</option>
                <option value="#3F4E4F">#3F4E4F</option>
                <option value="#A27B5C">#A27B5C</option>
                <option value="#DCD7C9">#DCD7C9</option>
                <option value="#1A3636">#1A3636</option>
                <option value="#40534C">#40534C</option>
                <option value="#677D6A">#677D6A</option>
                <option value="#D6BD98">#D6BD98</option>
                <option value="black">Black</option>
                <option value="darkblue">Dark Blue</option>
                <option value="darkred">Dark Red</option>
                <option value="darkgreen">Dark Green</option>
                <option value="darkslategray">Dark Slate Gray</option>
                <option value="darkolivegreen">Dark Olive Green</option>
                <option value="darkorchid">Dark Orchid</option>
                <option value="darkmagenta">Dark Magenta</option>
                <option value="midnightblue">Midnight Blue</option>
                <option value="indigo">Indigo</option>
                <option value="saddlebrown">Saddle Brown</option>
                <option value="darkcyan">Dark Cyan</option>
                <option value="firebrick">Firebrick</option>
                <option value="darkviolet">Dark Violet</option>
                <option value="darkorchid">Dark Orchid</option>
                <option value="darkslateblue">Dark Slate Blue</option>
                <option value="maroon">Maroon</option>
                <option value="dimgray">Dim Gray</option>
                <option value="navy">Navy</option>
                <option value="darkgoldenrod">Dark Goldenrod</option>
                <option value="darkturquoise">Dark Turquoise</option>
                <option value="darkseagreen">Dark Sea Green</option>
                <option value="darkorange">Dark Orange</option>
                <option value="darkkhaki">Dark Khaki</option>
                <option value="darkslateblue">Dark Slate Blue</option>
                </select>
            </div>
        <br>
            <div class="mt-3">
                <label for="colorSelect2" class="form-label">Choose Background Color: (Card-body)</label>
                <select id="colorSelect2" class="form-select">
                    <option value="black">Black</option>
                    <option value="darkblue">Dark Blue</option>
                    <option value="darkred">Dark Red</option>
                    <option value="darkgreen">Dark Green</option>
                    <option value="darkslategray">Dark Slate Gray</option>
                    <option value="darkolivegreen">Dark Olive Green</option>
                    <option value="darkorchid">Dark Orchid</option>
                    <option value="darkmagenta">Dark Magenta</option>
                    <option value="midnightblue">Midnight Blue</option>
                    <option value="indigo">Indigo</option>
                    <option value="saddlebrown">Saddle Brown</option>
                    <option value="darkcyan">Dark Cyan</option>
                    <option value="firebrick">Firebrick</option>
                    <option value="darkviolet">Dark Violet</option>
                    <option value="darkorchid">Dark Orchid</option>
                    <option value="darkslateblue">Dark Slate Blue</option>
                    <option value="maroon">Maroon</option>
                    <option value="dimgray">Dim Gray</option>
                    <option value="navy">Navy</option>
                    <option value="darkgoldenrod">Dark Goldenrod</option>
                    <option value="darkturquoise">Dark Turquoise</option>
                    <option value="darkseagreen">Dark Sea Green</option>
                    <option value="darkorange">Dark Orange</option>
                    <option value="darkkhaki">Dark Khaki</option>
                    <option value="darkslateblue">Dark Slate Blue</option>
                    <option value="#000000">#000000</option>
                    <option value="#0a0913">#0a0913</option>
                    <option value="#131122">#131122</option>
                    <option value="#1d1936">#1d1936</option>
                    <option value="#282442">#282442</option>
                    <option value="#040622">#040622</option>
                    <option value="#150f38">#150f38</option>
                    <option value="#151345">#151345</option>
                    <option value="#1c1d54">#1c1d54</option>
                    <option value="#26236b">#26236b</option>
                    <option value="#10102c">#10102c</option>
                    <option value="#342c5c">#342c5c</option>
                    <option value="#67647d">#67647d</option>
                    <option value="#272d50">#272d50</option>
                    <option value="#bdc7d8">#bdc7d8</option>
                    <option value="#201E43">#201E43</option>
                    <option value="#134B70">#134B70</option>
                    <option value="#508C9B">#508C9B</option>
                    <option value="#EEEEEE">#EEEEEE</option>
                    <option value="#17153B">#17153B</option>
                    <option value="#2E236C">#2E236C</option>
                    <option value="#433D8B">#433D8B</option>
                    <option value="#C8ACD6">#C8ACD6</option>
                    <option value="#070F2B">#070F2B</option>
                    <option value="#1B1A55">#1B1A55</option>
                    <option value="#535C91">#535C91</option>
                    <option value="#9290C3">#9290C3</option>
                    <option value="#2C3639">#2C3639</option>
                    <option value="#3F4E4F">#3F4E4F</option>
                    <option value="#A27B5C">#A27B5C</option>
                    <option value="#DCD7C9">#DCD7C9</option>
                    <option value="#1A3636">#1A3636</option>
                    <option value="#40534C">#40534C</option>
                    <option value="#677D6A">#677D6A</option>
                    <option value="#D6BD98">#D6BD98</option>
                </select>
            </div>
        <br>
        <?php $form = ActiveForm::begin(['options' => [
            'class' => 'check-valid',
            'enctype' => 'multipart/form-data'
        ]]); ?>

        <div class="row">
            <div class="col-md-6 px-3 mb-2">
                <div class="card border-0" style="border-radius: 10px;">
                    <div class="card-body" id="card-body0" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating0">
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
                    <div class="card-body" id="card-body1" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating1">
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
                    <div class="card-body" id="card-body2" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating2">
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
                    <div class="card-body" id="card-body3" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating3">
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
                    <div class="card-body" id="card-body4" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating4">
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
                    <div class="card-body" id="card-body5" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating5">
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
                    <div class="card-body" id="card-body6" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating6">
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
                    <div class="card-body" id="card-body7" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating7">
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
                    <div class="card-body" id="card-body8" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating8">
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
                    <div class="card-body" id="card-body9" style="background-color: black; border-radius: 10px;">
                        <div class="row gx-3 align-items-center">
                            <div class="form-floating" id="form-floating9">
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
            <?= Html::a('Cancel', ['career/index'], ['class' => 'btn btn-md btn-theme bg-red']) ?>
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
    
    document.getElementById('colorSelect1').addEventListener('change', function() {
        var selectedColor1 = this.value;
        document.getElementById('card').style.backgroundColor = selectedColor1;
    });

    document.getElementById('colorSelect2').addEventListener('change', function() {
        var selectedColor2 = this.value;
        document.getElementById('card-body0').style.backgroundColor = selectedColor2;
        document.getElementById('card-body1').style.backgroundColor = selectedColor2;
        document.getElementById('card-body2').style.backgroundColor = selectedColor2;
        document.getElementById('card-body3').style.backgroundColor = selectedColor2;
        document.getElementById('card-body4').style.backgroundColor = selectedColor2;
        document.getElementById('card-body5').style.backgroundColor = selectedColor2;
        document.getElementById('card-body6').style.backgroundColor = selectedColor2;
        document.getElementById('card-body7').style.backgroundColor = selectedColor2;
        document.getElementById('card-body8').style.backgroundColor = selectedColor2;
        document.getElementById('card-body9').style.backgroundColor = selectedColor2;
        document.getElementById('card-body10').style.backgroundColor = selectedColor2;
        document.getElementById('card-body11').style.backgroundColor = selectedColor2;
        document.getElementById('card-body12').style.backgroundColor = selectedColor2;
        document.getElementById('card-body13').style.backgroundColor = selectedColor2;
        document.getElementById('card-body14').style.backgroundColor = selectedColor2;
        document.getElementById('card-body15').style.backgroundColor = selectedColor2;
        document.getElementById('card-body16').style.backgroundColor = selectedColor2;

        document.getElementById('form-floating0').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating1').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating2').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating3').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating4').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating5').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating6').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating7').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating8').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating9').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating10').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating11').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating12').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating13').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating14').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating15').style.backgroundColor = selectedColor2;
        document.getElementById('form-floating16').style.backgroundColor = selectedColor2;
    });


    </script>
</div>

