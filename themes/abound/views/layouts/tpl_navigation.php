<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          
          <a class="brand" href="#"><?php echo Yii::app()->name; ?></a>
          
          <div class="nav-collapse">
          <?php 
				$openCasesBadge = "";          
          /*
          	$openCasesCount = CallHistory::countMyActiveCases();
          	$openCasesBadge = '';
          	if($openCasesCount > 0)
          		$openCasesBadge = "<span class='badge badge-info pull-right'>$openCasesCount active</span>";
          		*/
          ?>
			<?php /*$this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'pull-right nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
                       	array('label'=>'Dashboard', 'url'=>array('/forms/requisition/admin')),
                        array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs')),
                        array('label'=>'Forms', 'url'=>array('/site/page', 'view'=>'forms')),
                        array('label'=>'Tables', 'url'=>array('/site/page', 'view'=>'tables')),
								//array('label'=>'Interface', 'url'=>array('/site/page', 'view'=>'interface')),
                        array('label'=>'Typography', 'url'=>array('/site/page', 'view'=>'typography')),
                        //array('label'=>'Gii generated', 'url'=>array('customer/index')),
                        /*array('label'=>'My Account <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        		'items'=>array(
                            			array('label'=>'My Messages <span class="badge badge-warning pull-right">26</span>', 'url'=>'#'),
												array('label'=>'My Tasks <span class="badge badge-important pull-right">112</span>', 'url'=>'#'),
												array('label'=>'My Invoices <span class="badge badge-info pull-right">12</span>', 'url'=>'#'),
												array('label'=>'Separated link', 'url'=>'#'),
												array('label'=>'One more separated link', 'url'=>'#'),
                        )),
                        array('label'=>'Requisition <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
                        		'items'=>array(                            			
												array('label'=>'New Purchase Request', 'url'=>'/index.php/forms/requisition/create?type=p'),
												array('label'=>'New Service Request', 'url'=>'/index.php/forms/requisition/create?type=s'),
                        )),
                        array('label'=>'Suggest or Report Bug', 'url'=>array('/evaluation/create')),
                        array('label'=>'Requisition <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown",'visible'=>Yii::app()->user->isGuest), 
                        		'items'=>array(                            			
												array('label'=>'New Purchase Request', 'url'=>'/index.php/forms/requisition/create?type=p'),
												array('label'=>'New Service Request', 'url'=>'/index.php/forms/requisition/create?type=s'),
                        )),
                        //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                    ),
                ));*/ ?>
                <?php
                	$this->widget('zii.widgets.CMenu',array(
                    	'htmlOptions'=>array('class'=>'pull-right nav'),
                    	'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
							         'itemCssClass'=>'item-test',
                    	'encodeLabel'=>false,
                    	'items'=>WebApp::getMenuItems()
                ));
                ?>
    	</div>
    </div>
	</div>
</div>

<?php /*
<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
    	<div class="container">
            <form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>
    	</div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav --> 
*/ ?>