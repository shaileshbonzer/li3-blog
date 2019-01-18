<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 11:57 AM
 */
?>

<?php if($saved): ?>
    <h4>Data saved successfully!</h4>
<?php endif; ?>

<!--Customize the form error messages-->
<?php
$this->form->config(
    array(
        'templates' => array(
            'error' => '<div class="error">{:content}</div>'
        )
    )
);
?>

<!--Generate the opening form tag-->
<?=$this->form->create($myPost); ?>
<!--Generate a text field for "title"-->
<?=$this->form->field('title');?>
<!--Generate a textarea field for body content-->
<?=$this->form->field('body',array('type'=>'textarea'));?>
<!--Generate the submit button-->
<?=$this->form->submit('Add Post');?>
<!--Generate the closing form tag-->
<?=$this->form->end();?>

