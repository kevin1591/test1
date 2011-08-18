<?php
$this->breadcrumbs=array(
	'Yii Begin',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>
<p><?php echo CHtml::link($time,array('yiiBegin/next'));?></p>
<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
