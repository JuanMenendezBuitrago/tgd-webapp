<?php

class QueriesBlacklistController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'QueriesBlacklist'),
		));
	}

	public function actionCreate() {
		$model = new QueriesBlacklist;


		if (isset($_POST['QueriesBlacklist'])) {
			$model->setAttributes($_POST['QueriesBlacklist']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'QueriesBlacklist');


		if (isset($_POST['QueriesBlacklist'])) {
			$model->setAttributes($_POST['QueriesBlacklist']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'QueriesBlacklist')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('QueriesBlacklist');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new QueriesBlacklist('search');
		$model->unsetAttributes();

		if (isset($_GET['QueriesBlacklist']))
			$model->setAttributes($_GET['QueriesBlacklist']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}