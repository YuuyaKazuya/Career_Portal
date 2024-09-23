<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\Intern[] $interns */
/** @var int $totalCount */
/** @var int $pageSize */
/** @var int $currentPage */

$this->title = 'Internship Applicant';
$this->params['breadcrumbs'][] = ['label' => 'Career', 'url' => ['portal/index']];
$this->params['breadcrumbs'][] = $this->title;

$totalPages = ceil($totalCount / $pageSize);
?>

<div class="intern-index">

    <!-- Grid table -->
    <div class="card border-0 mb-4" style="background-color: rgba(32, 30, 67);">
        <div class="card-header">
            <div class="row">
                <div class="col-auto align-self-center">
                    <h6 class="d-inline-block mb-0" style="font-size: 24px; color: white;">Applicant for Internship</h6>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table footable" data-show-toggle="true">
                <thead style="background-color: transparent;">
                    <tr class="text-muted">
                        <th class="w-12"></th>
                        <th>Intern Name</th>
                        <th data-breakpoints="xs sm">Contact Details</th>
                        <th data-breakpoints="xs sm">University</th>
                        <th>Resume</th>
                        <th>Cover Letter</th>
                    </tr>
                </thead>
                <?php foreach ($interns as $v) : ?>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                        <img src="<?= Yii::getAlias('@web') ?>/theme/adminux/html/assets/img/<?= htmlspecialchars($v->image) ?>" alt="Image">
                                    </figure>
                                </div>
                                <div class="col ps-0">
                                    <p class="mb-0" style="color: white;"><?= $v->name ?></p>
                                    <p class="text-secondary small" style="color: white;"><?= $v->city ?>, <?= $v->state0 !== null ? htmlspecialchars($v->state0->state_name) : '' ?></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0" style="color: white;"><?= $v->email ?></p>
                            <p class="text-secondary small" style="color: white;"><?= $v->phone ?></p>
                        </td>
                        <td>
                            <p class="mb-0" style="color: white;"><?= $v->course ?></p>
                            <p class="text-secondary small" style="color: white;"><?= $v->university ?></p>
                        </td>
                        <td>
                            <?php if ($v->resume): ?>
                                <a href="<?= Yii::getAlias('@web') ?>/theme/adminux/html/assets/resume/<?= htmlspecialchars($v->resume) ?>" class="text-white, bi bi-file-pdf" target="_blank"> Resume</a>
                            <?php else: ?>
                                <span class="text-secondary">Not Available</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($v->cover_letter): ?>
                                <a href="<?= Yii::getAlias('@web') ?>/theme/adminux/html/assets/cover_letter/<?= htmlspecialchars($v->cover_letter) ?>" class="text-white, bi bi-file-pdf" target="_blank"> Cover Letter</a>
                            <?php else: ?>
                                <span class="text-secondary">Not Available</span>
                            <?php endif; ?>
                        </td>
                        <td>
                        <div class="row">
                            <div class="col-auto">
                                <div class="dropup d-inline-block">
                                    <?php if (in_array(Yii::$app->user->identity->role, [1,2])) : ?>
                                        <button class="btn btn-square btn-sm rounded-circle btn-outline-light dd-arrow-none dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <?= Html::a('View', ['view', 'id' => $v->id], ['class' => 'dropdown-item']) ?>
                                            </li>
                                            <?php if (Yii::$app->user->identity->role == 1) : ?>
                                                <li>
                                                    <?= Html::a('Update', ['update', 'id' => $v->id], ['class' => 'dropdown-item']) ?>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>

            <div class="pagination-wrapper" style="background-color: transparent;">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item <?= $currentPage == 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?= Url::to(['index', 'page' => $currentPage - 1]) ?>" aria-label="Previous" style="background-color: transparent;">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>" >
                                <a class="page-link" href="<?= Url::to(['index', 'page' => $i]) ?>" style="background-color: transparent;"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?= $currentPage == $totalPages ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?= Url::to(['index', 'page' => $currentPage + 1]) ?>" aria-label="Next" style="background-color: transparent;">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
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
