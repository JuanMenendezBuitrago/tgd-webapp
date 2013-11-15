<?php

/**
 * This is the model base class for the table "{{whitelists}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Whitelists".
 *
 * Columns in table "{{whitelists}}" available as properties of the model,
 * followed by relations of table "{{whitelists}}" available as properties of the model.
 *
 * @property integer $id
 * @property integer $member_id
 * @property string $domain
 * @property integer $adtracks_sources_id
 * @property boolean $status
 * @property string $created_at
 *
 * @property Members $member
 * @property AdtracksSources $adtracksSources
 */
abstract class BaseWhitelists extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{whitelists}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Whitelists|Whitelists', $n);
	}

	public static function representingColumn() {
		return 'domain';
	}

	public function rules() {
		return array(
			array('member_id, adtracks_sources_id', 'required'),
			array('member_id, adtracks_sources_id', 'numerical', 'integerOnly'=>true),
			array('domain', 'length', 'max'=>255),
			array('status, created_at', 'safe'),
			array('domain, status, created_at', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, member_id, domain, adtracks_sources_id, status, created_at', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'member' => array(self::BELONGS_TO, 'Members', 'member_id'),
			'adtracksSources' => array(self::BELONGS_TO, 'AdtracksSources', 'adtracks_sources_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'member_id' => null,
			'domain' => Yii::t('app', 'Domain'),
			'adtracks_sources_id' => null,
			'status' => Yii::t('app', 'Status'),
			'created_at' => Yii::t('app', 'Created At'),
			'member' => null,
			'adtracksSources' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('member_id', $this->member_id);
		$criteria->compare('domain', $this->domain, true);
		$criteria->compare('adtracks_sources_id', $this->adtracks_sources_id);
		$criteria->compare('status', $this->status);
		$criteria->compare('created_at', $this->created_at, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}