<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\User[] $Users */
/** @var int $totalCount */
/** @var int $pageSize */
/** @var int $currentPage */

$this->title = 'Users';
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = $this->title;

$totalPages = ceil($totalCount / $pageSize);
?>

<div class="user-index">

    <!-- Grid container -->
    <div class="card border-0 mb-4" style="background-color: rgba(32, 30, 67, 0.8);">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="mb-0" style="font-size: 24px; color: #fff;">Employees</h6>
            <?= Html::a('<i class="fas fa-user-plus me-2"></i> Sign Up', ['create'], ['class' => 'btn btn-md btn-theme bg-green me-2']) ?>
        </div>

        <div class="card-body p-4">
            <div class="row">
                <?php foreach ($Users as $v) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: rgba(32, 30, 67);">
                        <div class="card-body text-white">
                            <h5 class="card-title"><?= Html::encode($v->firstname) ?> <?= Html::encode($v->lastname) ?></h5>
                            <table class="table table-borderless" style="color: white;">
                                <tr>
                                    <th style="border: none; width: 100px;">Username</th>
                                    <td style="border: none; color: white;">: <?= Html::encode($v->username) ?></td>
                                </tr>
                                <tr>
                                    <th style="border: none; width: 100px;">Phone</th>
                                    <td style="border: none; color: white;">: <?= Html::encode($v->phone) ?></td>
                                </tr>
                                <tr>
                                    <th style="border: none; width: 100px;">Email</th>
                                    <td style="border: none; color: white;">: <?= Html::encode($v->email) ?></td>
                                </tr>
                                <tr>
                                    <th style="border: none; width: 100px;">Role</th>
                                    <td style="border: none; color: white;">: <?= $v->userRole0 !== null ? Html::encode($v->userRole0->name) : '' ?></td>
                                </tr>
                                <tr>
                                    <th style="border: none; width: 100px;">Designation</th>
                                    <td style="border: none; color: white;">: <?= Html::encode($v->designation) ?></td>
                                </tr>
                            </table>
                            
                            <?php if (Yii::$app->user->identity->role == 1) : ?>
                            <p class="card-text">Password:</p>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password-<?= $v->id ?>" value="<?= Html::encode($v->password_hash) ?>" readonly>
                                <button class="btn btn-outline-light" type="button" onclick="togglePassword('password-<?= $v->id ?>', this)">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <p class="card-text">Auth Key:</p>
                            <div class="input-group">
                                <input type="password" class="form-control" id="auth-key-<?= $v->id ?>" value="<?= Html::encode($v->auth_key) ?>" readonly>
                                <button class="btn btn-outline-light" type="button" onclick="togglePassword('auth-key-<?= $v->id ?>', this)">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                            <?php endif; ?>
                            <br>
                            <!-- Action buttons -->
                            <div class="d-flex justify-content-end">
                                <?php if (Yii::$app->user->identity->role == 1) : ?>
                                    <!-- Update Button -->
                                    <?= Html::a('<i class="bi bi-pencil"></i> Update', ['update', 'id' => $v->id], [
                                        'class' => 'btn btn-primary btn-sm me-2',
                                        'role' => 'button',
                                        'title' => 'Update',
                                    ]) ?>
                                <?php endif; ?>
                                <?php if (Yii::$app->user->identity->role == 1) : ?>
                                    <!-- Delete Button -->
                                    <?= Html::a('<i class="bi bi-trash"></i> Delete', ['delete', 'id' => $v->id], [
                                        'class' => 'btn btn-danger btn-sm',
                                        'role' => 'button',
                                        'title' => 'Delete',
                                        'data-confirm' => 'Are you sure you want to delete this item?',
                                        'data-method' => 'post',
                                    ]) ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="pagination-wrapper mt-4">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?= $currentPage == 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?= Url::to(['index', 'page' => $currentPage - 1]) ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                                <a class="page-link" href="<?= Url::to(['index', 'page' => $i]) ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?= Url::to(['index', 'page' => $currentPage + 1]) ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- JavaScript for toggling visibility -->
    <script>
    function togglePassword(inputId, buttonElement) {
        var passwordField = document.getElementById(inputId);
        if (passwordField.type === "password") {
            passwordField.type = "text";
            buttonElement.innerHTML = '<i class="bi bi-eye-slash"></i>';
        } else {
            passwordField.type = "password";
            buttonElement.innerHTML = '<i class="bi bi-eye"></i>';
        }
    }
    </script>

    <style>
        .pagination-wrapper {
            margin: 20px 0;
        }

        .pagination {
            background-color: transparent; /* Light background for the pagination */
            border-radius: 5px; /* Rounded corners */
        }

        .page-item {
            margin: 0 5px;
        }

        .page-link {
            color: #007bff; /* Blue color for the links */
            border-radius: 5px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
            transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
        }

        .page-link:hover {
            background-color: #007bff; /* Background color on hover */
            color: #fff; /* Text color on hover */
        }

        .page-item.active .page-link {
            background-color: #007bff; /* Background color for the active page */
            color: white; /* Text color for the active page */
        }

        .page-item.disabled .page-link {
            color: darkgrey; /* Grey color for disabled items */
            pointer-events: none; /* Disable click events */
        }
    </style>

</div>
