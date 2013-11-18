<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'adtracks-sources-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model, 'category_id', GxHtml::listDataEx(AdtracksTypes::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'category_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model, 'url', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'url'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('adtracks')); ?></label>
		<?php echo $form->checkBoxList($model, 'adtracks', GxHtml::encodeEx(GxHtml::listDataEx(Adtracks::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('whitelists')); ?></label>
		<?php echo $form->checkBoxList($model, 'whitelists', GxHtml::encodeEx(GxHtml::listDataEx(Whitelists::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->