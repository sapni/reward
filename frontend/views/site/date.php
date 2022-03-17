

<?php
use edwinhaq\simpleloading;
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;

use yii\widgets\ActiveForm;


/** @var yii\web\View $this */

// $this->title = 'My Yii Application';
?>
<div class="site-index">
  
    <!-- <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div> -->
</div>



<div class="customertb-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="col-md-4 col-md-offset-4">

<?php 
$currentday  = date('d');   
$month = date('m');
$year = date('Y');  
$todaydate = $year . "-" . $month . "-" . $currentday;

$todaydate= date('Y-m-d');
// //$needby= $var->needby;

//    $diff = abs(strtotime($todaydate) - strtotime($needby));

//    $years = floor($diff / (365*60*60*24));
//    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
//    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
//   if ($days==0)
//   {
//   echo $var1." days only left";
//   }

?>
 <h1>
<?php 
    

echo '<label class="control-label">Event Time</label>';
echo DateTimePicker::widget([
    'name' => 'dp_2',
    'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
   // 'value' => '23-Feb-2022 10:01',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'd-m-yyyy hh:ii'
    ],
    'pluginEvents' =>[
        'changeDate' => 'function(e) { 
            var date = $("#w1-datetime").data("datetimepicker").getDate(),
            formatted = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate() + " " + date.getHours + ":" + date.getMinutes() + ":" + date.getSeconds();
       // alert(date);alert(new Date());

       var date1 = new Date();
var date2 = new Date(date);
var Difference_In_Time = date2.getTime() - date1.getTime();
var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
  

// document.write("Total number of days between dates  <br>"
//                + date1 + "<br> and <br>" 
//                + date2 + " is: <br> " 
//                + Difference_In_Days);

$("#show_datetime").html("Deadline :"+Math.round(Difference_In_Days) + "days");

       // var diff = Math.abs(new Date() - date);
       //     alert(diff);

            
            }',
    ]    
]);

?>
</h>
<div style="padding-top:25px">

<label id="show_datetime" style="vertical-align: middle"></label>


</div>



</div>



   
  

    <?php ActiveForm::end(); ?>

</div>
