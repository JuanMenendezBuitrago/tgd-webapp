<?php

/**
 * This is the model base class for the table "{{categories}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Categories".
 *
 * Columns in table "{{categories}}" available as properties of the model,
 * followed by relations of table "{{categories}}" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 *
 * @property Services[] $services
 */
abstract class BaseCategories extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{categories}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Categories|Categories', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name', 'length', 'max'=>255),
			array('name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'services' => array(self::HAS_MANY, 'Services', 'category_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'services' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}