<?php

class YiiBeginController extends Controller
{
	public function actionIndex()
	{
		$time=date("Y-m-d h:m")." hello yiic i am coming.";
		$this->render('index',array('time'=>$time));
	}

	public function actionNext()
	{
		$firstStr="i am on the way.";
		$this->render('next',array('firstStr'=>$firstStr));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}