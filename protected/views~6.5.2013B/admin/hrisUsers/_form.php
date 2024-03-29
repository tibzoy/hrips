<?php
Yii::app()->clientScript->registerScript('resetpass-checked', "
$('#HrisUsers_reset_pass').click(function(){
	$('#HrisUsers_password_md5').val('');
	$('#HrisUsers_password_md5').focus();
});
");
?>

<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'hris-users-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>
		<?php if($model->isNewRecord){ ?>
		<div class="row">
		<?php echo $form->labelEx($model,'emp_id'); ?>
		<?php echo $form->dropDownList($model, 'emp_id',CHtml::listData(Employee::model()->findAll(array('order'=>'Lname asc')), 'Emp_ID', 'empIdFullName')); ?>
		<?php echo $form->error($model,'emp_id'); ?>
		</div><!-- row -->
		<?php } ?>
		<div class="row">
		<?php echo $form->labelEx($model,'password_md5'); ?>
		<?php echo $form->textField($model, 'password_md5', array('maxlength' => 50)); ?>
		<?php echo (!$model->isNewRecord) ? $form->checkBox($model, 'reset_pass'). " Reset Password" : ""; ?>
		<?php echo $form->error($model,'password_md5'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'access_lvl_id'); ?>
		<?php echo $form->dropDownList($model, 'access_lvl_id', GxHtml::listDataEx(HrisAccessLvl::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'access_lvl_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'dept_id'); ?>
		<?php echo $form->dropDownList($model, 'dept_id', GxHtml::listDataEx(HrisDept::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'dept_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'), array('class'=>'btn btn-success'));
$this->endWidget();
?>
</div><!-- form -->