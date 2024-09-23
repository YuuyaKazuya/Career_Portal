<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

NavBar::begin([
    'brandLabel' => Html::img('https://aerosys.com.my/wp-content/uploads/2022/11/Aerosys-Logo-Official-1536x266.png', [
        'style' => 'max-width: 70%; padding: 5px;',
        'alt' => 'Aerosys Logo',
    ]),
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-lg navbar-dark bg-custom fixed-top shadow-sm',
    ],
]);

$items = [
    [
        'label' => '<i class="fa-solid fa-house me-2"></i> Home', 
        'url' => ['/site/index'], 
        'options' => ['class' => 'nav-item'], 
        'encode' => false,
        'linkOptions' => ['class' => 'nav-link']
    ],
    [
        'label' => '<i class="fa-solid fa-briefcase me-2"></i> Career', 
        'url' => ['/portal/index'], 
        'options' => ['class' => 'nav-item'], 
        'encode' => false,
        'linkOptions' => ['class' => 'nav-link']
    ],
];

if (!Yii::$app->user->isGuest && in_array(Yii::$app->user->identity->role, [1, 2])) {

    $items[] = [
        'label' => '<i class="fas fa-user-group me-2"></i> Applicant',
        'items' => [
            ['label' => '<i class="fas fa-user-check me-2"></i> Internship', 'url' => ['/intern/index'], 'encode' => false],
            ['label' => '<i class="fas fa-user-check me-2"></i> Employment', 'url' => ['/employee/index'], 'encode' => false],
        ],
        'options' => ['class' => 'nav-item dropdown'],
        'linkOptions' => [
            'class' => 'nav-link dropdown-toggle',
            'id' => 'navbarDropdownApplicant',
            'role' => 'button',
            'data-bs-toggle' => 'dropdown',
            'aria-expanded' => 'false',
        ],
        'dropDownOptions' => [
            'class' => 'dropdown-menu dropdown-custom',
            'aria-labelledby' => 'navbarDropdownApplicant',
        ],
        'encode' => false,
    ];
    

    $items[] = [
        'label' => '<i class="fas fa-users me-2"></i> Users',
        'url' => ['/user/index'],
        'encode' => false,
    ];


}

if (!Yii::$app->user->isGuest && in_array(Yii::$app->user->identity->role, [1, 2])) {
    $items[] = [
        'label' => '<i class="fa-solid fa-plus me-2"></i> Post Job',
        'url' => ['/portal/create'],
        'options' => ['class' => 'nav-item border-left'], // Add 'border-left' class for the left border
        'encode' => false, // Allows HTML rendering
        'linkOptions' => ['class' => 'nav-link'] // Add 'nav-link' class for proper Bootstrap styling
    ];
}

$items[] = Yii::$app->user->isGuest
    ? ['label' => '<i class="fas fa-sign-in-alt me-2"></i> Login', 
        'url' => ['/site/login'], 
        'options' => ['class' => 'nav-item border-left'], 
        'encode' => false
    ]
    : [
        'label' => '<i class="fa-regular fa-circle-user me-2"></i> ' . Yii::$app->user->identity->username,
        'items' => [
            [
                'label' => Html::tag('i', '', ['class' => 'fas fa-user me-2']) . ' Profile',
                'url' => ['/user/view', 'id' => Yii::$app->user->identity->id], // Pass user ID
                'encode' => false, // Allows HTML in the label
            ],
            [
                'label' => Html::tag('i', '', ['class' => 'fas fa-sign-out-alt me-2']) . ' Logout',
                'url' => ['/site/logout'],
                'linkOptions' => [
                    'class' => 'dropdown-item',
                    'data-method' => 'post',
                ],
                'encode' => false, // Allows HTML in the label
            ],
        ],
        'options' => ['class' => 'nav-item dropdown'],
        'linkOptions' => [
            'class' => 'nav-link dropdown-toggle',
            'id' => 'navbarDropdownApplicant',
            'role' => 'button',
            'data-bs-toggle' => 'dropdown',
            'aria-expanded' => 'false',
        ],
        'dropDownOptions' => [
            'class' => 'dropdown-menu dropdown-custom',
            'aria-labelledby' => 'navbarDropdownApplicant',
        ],
        'encode' => false,
    ];

echo Nav::widget([
    'options' => ['class' => 'navbar-nav ms-auto'],
    'items' => $items,
]);

NavBar::end();
?>

<br>

<style>
/* Dropdown menu styling */
.dropdown-menu {
    background-color: rgba(32, 30, 67) !important;
    border: none; /* Optional: remove border if desired */
}

/* Dropdown item styling */
.dropdown-item {
    color: white !important;
}

.dropdown-item.active, .dropdown-item:active {
    background-color: blue !important; /* Change to blue when pressed */
    background-blend-mode: multiply; /* Ensures the color blends with the background */
    transform: scale(0.95); /* Smaller scale effect when pressed */
}

/* Additional styling for dropdown items on hover */
.dropdown-item:hover {
    background-color: rgba(111, 191, 242, 0.1); /* Light background on hover */
    color: white !important; /* Ensure color remains consistent on hover */
}

/* Optional additional styling for dropdown menu */
.dropdown-custom {
    border-radius: 0.375rem; /* Optional: Adds border radius to dropdown menu */
}

/* Custom navbar background */
.bg-custom {
    background-color: rgba(32, 30, 67); /* Updated with a bit of opacity */
}

.border-left {
    border-left: 3px solid white; /* Adjust color and width */
    padding-left: 5px; /* Adjust padding if necessary */
}


</style>
