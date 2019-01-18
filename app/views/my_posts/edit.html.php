<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:22 PM
 */
?>

<a href="/my_posts/">Return to Index</a>

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

<?=$this->form->create($myPost); ?>
<?=$this->form->field('title',array('value'=>$myPost->title)); ?>
<?=$this->form->field('body',
    array('type'=>'textarea','value'=>$myPost->body)); ?>
<?=$this->form->submit('Edit Post'); ?>
<?=$this->form->end(); ?>
