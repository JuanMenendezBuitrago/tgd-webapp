<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'adtracks-types-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('adtracksSources')); ?></label>
		<?php echo $form->checkBoxList($model, 'adtracksSources', GxHtml::encodeEx(GxHtml::listDataEx(AdtracksSources::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->