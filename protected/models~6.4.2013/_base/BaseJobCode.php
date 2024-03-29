<?php

/**
 * This is the model base class for the table "job_code".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "JobCode".
 *
 * Columns in table "job_code" available as properties of the model,
 * followed by relations of table "job_code" available as properties of the model.
 *
 * @property integer $code
 * @property string $title
 * @property string $description
 *
 * @property HrisLoaApplication[] $hrisLoaApplications
 * @property HrisMuApplication[] $hrisMuApplications
 * @property HrisOtApplication[] $hrisOtApplications
 */
abstract class BaseJobCode extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'job_code';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'JobCode|JobCodes', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('title', 'required'),
			array('title', 'length', 'max'=>50),
			array('description', 'safe'),
			array('description', 'default', 'setOnEmpty' => true, 'value' => null),
			array('code, title, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'hrisLoaApplications' => array(self::HAS_MANY, 'HrisLoaApplication', 'job_code_id'),
			'hrisMuApplications' => array(self::HAS_MANY, 'HrisMuApplication', 'job_code_id'),
			'hrisOtApplications' => array(self::HAS_MANY, 'HrisOtApplication', 'job_code_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'code' => Yii::t('app', 'Code'),
			'title' => Yii::t('app', 'Title'),
			'description' => Yii::t('app', 'Description'),
			'hrisLoaApplications' => null,
			'hrisMuApplications' => null,
			'hrisOtApplications' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('code', $this->code);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('description', $this->description, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}