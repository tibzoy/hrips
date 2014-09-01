<?php
Yii::app()->clientScript->registerScript('print-mu-report',"
$(document).ready(function(){
  window.print();
});
");

?>

<div class="content letter-print">
<h1>Make Up Report</h1>
<?php
  $this->beginWidget('zii.widgets.CPortlet', array(
	 'title'=>"<i class='icon-folder-open'></i> Fast Facts",
 ));?>

<table class="table table-bordered table-condensed">
<tbody>  
<tr>
    <th style="width:200px;">Period:</th><td><?php echo (!empty($model->from) or !empty($model->to)) ? date('M d, Y',strtotime($model->from)).' - '.date('M d, Y',strtotime($model->to)) : ''; ?></td>
</tr>
<tr>
    <th>No. of Applications:</th><td><?php echo $model->searchPrint()->totalItemCount;?></td>
</tr>
</tbody>
</table> 
<?php $this->endWidget(); ?>
<?php
  $this->beginWidget('zii.widgets.CPortlet', array(
	 'title'=>"<i class='icon-folder-open'></i> Records",
 ));?>

<table class="table table-bordered table-condensed">
<thead>
<tr>
    <th>ID</th>
    <th>Employee</th>
    <th>Status</th>
    <th>Clocked In</th>
    <th>Clocked Out</th>
    <th>Makeup From</th>
    <th>Makeup To</th>
    <th>Duration</th>
    <th>Reason</th>
</tr>
</thead>
<tbody>
<?php foreach($model->searchPrint()->data as $data){ ?>
<tr>
    <td><?php echo $data->id;  ?></td>
    <td><?php echo $data->emp->getEmpIdFullName();  ?></td>
    <td><?php echo $data->nextLvl->status;  ?></td>
    <td><?php echo $data->clockedin_datetime;  ?></td>
    <td><?php echo $data->clockedout_datetime;  ?></td>
    <td><?php echo $data->from_datetime;  ?></td>
    <td><?php echo $data->to_datetime;  ?></td>
    <td><?php echo $data->hours;  ?></td>
    <td><?php echo $data->reason;  ?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php $this->endWidget();
?>
<p class="pull-right"><small>Generated By <?php echo Yii::app()->user->getState('emp_name').', '.date('Y-m-d H:i:s',time()); ?></small></p>
</div>