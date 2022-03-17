<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
date_default_timezone_set('Asia/Kolkata');

?>

<header class="main-header"  >

<?= Html::csrfMetaTags() ?>

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo' ]) ?>

    <header class="main-header">
  
 </header>

    <nav class="navbar navbar-static-top " role="navigation" >

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav ">

               
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       
                       </a> 
                    <?php 
                    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Register/Login',['/site/register-login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    ?>
                    
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../web/user_image/noimage.jpg" class="img-circle"
                                 alt="User Image"/>

                           

                            <div class="pull-right">
                                <a href="index.php?r=user/change_password" class="btn btn-default btn-flat">Change Password</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                  
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="index.php?r=user/change_password" class="btn btn-default btn-flat">Change Password</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Sign out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>

                         <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
                        
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
               
            </ul>
        </div>
    </nav>
</header>
