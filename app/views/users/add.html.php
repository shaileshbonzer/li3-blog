<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:55 PM
 */
?>

<?php if($data): ?>
    <h4>User <?=$data['username'] ?> created</h4>
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

<?=$this->form->create($register); ?>
<?=$this->form->field('username'); ?>
<?=$this->form->field('password',array('type'=>'password')); ?>
<?=$this->form->submit('Add User');?>
<?=$this->form->end(); ?>

