<?php
use yii\helpers\Html;

echo 'nah' ;

echo Html::beginForm(['/customer'], 'get');
    echo Html::label('Phone number to search:', 'phone_number');
    echo Html::textInput('phone_number');
    echo Html::submitButton('Search');
echo Html::endForm();