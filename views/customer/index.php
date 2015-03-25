index here <br>
<?php

echo '<pre>';
//print_r($records) ;
echo '</pre>';

echo \yii\widgets\ListView::widget([
    'options' => [
        'class' => 'list-view',
        'id' => 'search_results'
    ],
    'itemView' => '_customer',
    'dataProvider' => $records
]) ;