<?php
class OTCheckBoxColumn extends CCheckBoxColumn{
	protected function renderDataCellContent($row,$data)
	{
		if($this->value!==null)
			$value=$this->evaluateExpression($this->value,array('data'=>$data,'row'=>$row));
		elseif($this->name!==null)
			$value=CHtml::value($data,$this->name);
		else
			$value=$this->grid->dataProvider->keys[$row];

		$checked = false;
		if($this->checked!==null)
			$checked=$this->evaluateExpression($this->checked,array('data'=>$data,'row'=>$row));

		$options=$this->checkBoxHtmlOptions;
		if($this->disabled!==null)
			$options['disabled']=$this->evaluateExpression($this->disabled,array('data'=>$data,'row'=>$row));

		
		//$name = $this->evaluateExpression($options['name'],array('row'=>$row));
		$name = "ot[$row][id]";
		unset($options['name']);
		$options['value']=$value;
		$options['id']=$this->id.'_'.$row;
		echo CHtml::checkBox($name,$checked,$options);
	}
}
