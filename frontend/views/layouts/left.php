<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
		<!--
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../web/user_image/noimage.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php // Yii::$app->user->identity->username ?></p>

            </div>
        </div>
		-->
        <!-- 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                  
                    ['label' => 'Login', 'url' => ['site/register-login'], 'visible' => Yii::$app->user->isGuest],
                     ['label' => 'Messages','icon' => 'suitcase', 'url' => ['customertb/create']],
                     ['label' => 'Check due date','icon' => 'suitcase', 'url' => ['site/date']],
                  	
					
                ], // item
            ]
        ) ?>

    </section>

</aside>
