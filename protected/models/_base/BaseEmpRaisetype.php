<?php

/**
 * This is the model base class for the table "emp_raisetype".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EmpRaisetype".
 *
 * Columns in table "emp_raisetype" available as properties of the model,
 * followed by relations of table "emp_raisetype" available as properties of the model.
 *
 * @property integer $recordid
 * @property string $RaiseTypeCol
 *
 * @property EmpAppraisals[] $empAppraisals
 */
abstract class BaseEmpRaisetype extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'emp_raisetype';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'EmpRaisetype|EmpRaisetypes', $n);
	}

	public static function representingColumn() {
		return 'RaiseTypeCol';
	}

	public function rules() {
		return array(
			array('RaiseTypeCol', 'required'),
			array('RaiseTypeCol', 'length', 'max'=>50),
			array('recordid, RaiseTypeCol', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'empAppraisals' => array(self::HAS_MANY, 'EmpAppraisals', 'RaiseTypeID'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'recordid' => Yii::t('app', 'Recordid'),
			'RaiseTypeCol' => Yii::t('app', 'Raise Type Col'),
			'empAppraisals' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('recordid', $this->recordid);
		$criteria->compare('RaiseTypeCol', $this->RaiseTypeCol, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}