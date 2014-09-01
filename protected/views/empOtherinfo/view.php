<?php
/* @var $this EmpOtherinfoController */
/* @var $model EmpOtherinfo */

$this->breadcrumbs=array(
	'Emp Otherinfos'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List EmpOtherinfo', 'url'=>array('index')),
	array('label'=>'Create EmpOtherinfo', 'url'=>array('create')),
	array('label'=>'Update EmpOtherinfo', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete EmpOtherinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpOtherinfo', 'url'=>array('admin')),
);
?>

<h1>View EmpOtherinfo #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'EmpID',
		'SkillsHobbies',
		'NonAcadRecognition',
		'MembershipAssocOrg',
	),
)); ?>
