<?php
   // $this->title ='Фермы';
use yii\grid\GridView; ?>



<h1>Show</h1>
<?php

    foreach($cows as $minicow)
    {
        echo  $minicow-> cows . '<br>';
    }
?>

<?php //function debug($farms){ return '<pre>' . print_r($farms, true) . '</pre>';} ?>

<button class="btn btn-success" id="btn">Ввести данные</button>

<?php
    //подключить файл JS
    //$this->registerJsFile('@web/js/myscripts.js', ['depends' => 'yii\web\YiiAsset']);
?>
<?php
    //для малого количества кода JS
    //$this->registerJs("$('.container').append('<p>SHOW!</p>');", \yii\web\View::POS_LOAD)
?>
<?php
    //$this->registerCss('.container{background: #ccc;}')
?>
<?php
/*$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);
*/
?>