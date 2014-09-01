<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="robots" content="noindex,nofollow" />
<title>Dynamically attach jQuery DatePicker to Text box </title>
<link rel="stylesheet" href="/resources/themes/master.css" type="text/css" />
<link
 href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
 rel="stylesheet" type="text/css" />
<script
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"
 type="text/javascript"></script>
<script
 src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
 type="text/javascript"></script>
<script
 src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"
 type="text/javascript"></script>
<script src="/resources/scripts/mysamplecode.js" type="text/javascript"></script>
<script>
	
	function addChild(){
		var table=document.getElementById('tblChildren');
		var rowCount=table.rows.length;
		var row=table.insertRow(rowCount);
		row.className = "row1";
		
		//childname
		var cell = row.insertCell(0);
		var element = document.createElement("input");
		element.type = "text";
		element.id="EmpChildren_ChildName";
		element.name = "EmpChildren["+(rowCount-1)+"][ChildName]";
		element.size = "5";
		cell.appendChild(element);
		
		//bday
		var cell = row.insertCell(1);
		var element = document.createElement("input");
		//$('input[type=text]').addClass('datepicker');
		element.type = "text";
		element.id="EmpChildren_BirthDate";
		element.name = "EmpChildren["+(rowCount-1)+"][BirthDate]";
		element.size = "5";
		element.className="mydatepicker";
		cell.appendChild(element);
		 $( ".row1:last" ).find( "input.mydatepicker" )
			.removeAttr( "id" )
			.removeClass( "hasDatepicker" )
			.datepicker({
			  dateFormat: "yy-mm-dd"
			}); 
	}
	
	
	
$(function() {
    //$("#EmpChildren_BirthDate0").datepicker();
	//$("tr td:last-child").addClass("hasDatepicker");
	  $( ".row1:last" ).find( "input.datepicker1" )
			//.removeAttr( "id" )
			.removeClass( "hasDatepicker" )
			.datepicker({
			  dateFormat: "yy-mm-dd"
			}); 
 });

 
</script>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'emp-children-form',
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<!-- Original crud generated by gii
	<div class="row">
		<?php echo $form->labelEx($model,'EmpID'); ?>
		<?php echo $form->textField($model,'EmpID'); ?>
		<?php echo $form->error($model,'EmpID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ChildName'); ?>
		<?php echo $form->textField($model,'ChildName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ChildName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BirthDate'); ?>
		<?php echo $form->textField($model,'BirthDate',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'BirthDate'); ?>
	</div>
	-->
	
	<!-- Children Tbl -->
	<div class="row">
		<?php echo $form->labelEx($model,'EmpID'); ?>
		<?php echo $form->textField($model,'EmpID'); ?>
		<?php echo $form->error($model,'EmpID'); ?>
	</div>
	
	<div class="row">
		<?=$children_error?>
		<table id="tblChildren">
				<tr>
					<td>Name</td>
					<td>Bday</td>
				</tr>
			
			<div id="mydiv">
				<?php
					$i=0;
					foreach($children_details as $row){
						echo "<tr class='row1'>";
						echo "<td><input size='5' type='text' name='EmpChildren[$i][ChildName]' value='".$row['ChildName']."'></td>";
						echo "<td><input class='datepicker1' id='EmpChildren_BirthDate0' maxlength='100' size='50' type='text' name='EmpChildren[$i][BirthDate]' value='".$row['BirthDate']."'></td>";
						echo "</tr>";
						$i++;						
					}
				?>	
			</div>
			
		</table>
	</div>
	<div class="row">
	<p><input type="button" value="Add Item" onclick="addChild()" /></p>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->