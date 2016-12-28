<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead"><?= Html::a('Create New Book Review', ['/book-reviews/index'], ['class' => 'btn btn-primary']) ?> </p>

    </div>


    <div class="body-content">

       <h1>  Here you can create your own book review and add it to our library.</h1>

    </div>
</div>
