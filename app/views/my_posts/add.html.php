<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 11:57 AM
 */
?>

<!--Generate the opening form tag-->
<?=$this->form->create(); ?>
<!--Generate a text field for "title"-->
<?=$this->form->field('title');?>
<!--Generate a textarea field for body content-->
<?=$this->form->field('body',array('type'=>'textarea'));?>
<!--Generate the submit button-->
<?=$this->form->submit('Add Post');?>
<!--Generate the closing form tag-->
<?=$this->form->end();?>

