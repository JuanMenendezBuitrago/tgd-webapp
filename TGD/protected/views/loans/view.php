<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id',
'leader',
'currency',
'title_en_us',
'title_es',
array(
			'name' => 'idLoansActivity',
			'type' => 'raw',
			'value' => $model->idLoansActivity !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idLoansActivity)), array('loansActivities/view', 'id' => GxActiveRecord::extractPkValue($model->idLoansActivity, true))) : null,
			),
'image',
array(
			'name' => 'idLoansCountries',
			'type' => 'raw',
			'value' => $model->idLoansCountries !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idLoansCountries)), array('loansCountries/view', 'id' => GxActiveRecord::extractPkValue($model->idLoansCountries, true))) : null,
			),
'partner',
'amount',
'term',
'contribution',
'loan_date',
'loan_update',
array(
			'name' => 'idLoansStatus',
			'type' => 'raw',
			'value' => $model->idLoansStatus !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idLoansStatus)), array('loansStatus/view', 'id' => GxActiveRecord::extractPkValue($model->idLoansStatus, true))) : null,
			),
'paidback',
'loss_currency',
'loss_defaut',
'created_at',
'updated_at',
	),
)); ?>

