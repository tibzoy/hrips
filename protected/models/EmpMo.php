<?php

/**
 * This is the model class for table "emp_mov".
 *
 * The followings are the available columns in table 'emp_mov':
 * @property integer $id
 * @property integer $empId
 * @property string $empName
 * @property string $prevMove
 * @property string $curMove
 * @property string $movType
 * @property integer $RaiseType
 * @property string $NightDiff
 * @property string $ExtraAllowance
 * @property string $IncreaseTotal
 * @property string $Notes
 * @property integer $UpdateToPayroll
 * @property integer $ShowNotif
 * @property integer $PayrollSync
 * @property string $effectdate
 * @property string $createddate
 * @property string $createdby
 */
class EmpMo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmpMo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emp_mov';
	}
		public static function label($n = 1) {
		return Yii::t('app', 'Salary History|Salary History', $n);
	}
	
		public static function representingColumn() {
		return 'FromSalary';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empId, empName, movType, effectdate, createddate, createdby', 'required'),
			array('empId, RaiseType, UpdateToPayroll, ShowNotif, PayrollSync', 'numerical', 'integerOnly'=>true),
			array('empName, prevMove, curMove, movType, createdby', 'length', 'max'=>50),
			array('NightDiff, ExtraAllowance, IncreaseTotal', 'length', 'max'=>20),
			array('Notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, empId, empName, prevMove, curMove, movType, RaiseType, NightDiff, ExtraAllowance, IncreaseTotal, Notes, UpdateToPayroll, ShowNotif, PayrollSync, effectdate, createddate, createdby', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
	

		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		
			
			'raiseType' => array(self::BELONGS_TO, 'EmpRaisetype', 'RaiseType'),
			'emp' => array(self::BELONGS_TO, 'EmpInformation', 'empId'),
			'addedBy' => array(self::BELONGS_TO, 'Employee', 'createdby'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'empId' => 'Emp',
			'empName' => 'Emp Name',
			'prevMove' => 'Prev Move',
			'curMove' => 'Cur Move',
			'movType' => 'Mov Type',
			'RaiseType' => 'Raise Type',
			'NightDiff' => 'Night Diff',
			'ExtraAllowance' => 'Extra Allowance',
			'IncreaseTotal' => 'Increase Total',
			'Notes' => 'Notes',
			'UpdateToPayroll' => 'Update To Payroll',
			'ShowNotif' => 'Show Notif',
			'PayrollSync' => 'Payroll Sync',
			'effectdate' => 'Effectdate',
			'createddate' => 'Createddate',
			'createdby' => 'Createdby',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('empId',$this->empId);
		$criteria->compare('empName',$this->empName,true);
		$criteria->compare('prevMove',$this->prevMove,true);
		$criteria->compare('curMove',$this->curMove,true);
		$criteria->compare('movType',$this->movType,true);
		$criteria->compare('RaiseType',$this->RaiseType);
		$criteria->compare('NightDiff',$this->NightDiff,true);
		$criteria->compare('ExtraAllowance',$this->ExtraAllowance,true);
		$criteria->compare('IncreaseTotal',$this->IncreaseTotal,true);
		$criteria->compare('Notes',$this->Notes,true);
		$criteria->compare('UpdateToPayroll',$this->UpdateToPayroll);
		$criteria->compare('ShowNotif',$this->ShowNotif);
		$criteria->compare('PayrollSync',$this->PayrollSync);
		$criteria->compare('effectdate',$this->effectdate,true);
		$criteria->compare('createddate',$this->createddate,true);
		$criteria->compare('createdby',$this->createdby,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}