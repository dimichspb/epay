<?php

/* @var $this yii\web\View */

$this->title = 'IT-Talents 2016';

$this->registerCssFile('/css/bootstrap.min.css');
$this->registerCssFile('/css/style.css');
$this->registerCssFile('/css/bootstrap-slider.css');
$this->registerJsFile('http://maps.googleapis.com/maps/api/js');
$this->registerJsFile('/js/jquery.min.js');
$this->registerJsFile('/js/bootstrap.min.js');
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.0.2/bootstrap-slider.min.js');
$this->registerJsFile('/js/scripts.js');

?>

<div class="row">
    <div class="col-md-12">
        <div class="well well-sm text-center">
            <h1>
                epay Transactions 2017
            </h1>
            <p>
                by <img src="/images/logo.png"/>
            </p>
        </div>
        <div class="row text-center">
            <div id="someMeaningfulId"></div>

            <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="50" data-slider-step="1" data-slider-value="1"/>
            <input type="button" value="pause" id="pauseBtn" onclick="togglePause();" />
            <br />

        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>

        </div>
    </div>
</div>
