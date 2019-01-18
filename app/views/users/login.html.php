<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 1:19 PM
 */
?>

<?php if ($noauth): ?>
    <h4>Login failed</h4>
<?php endif; ?>

<?=$this->form->create(); ?>
<?=$this->form->field('username');?>
<?=$this->form->field('password', array('type'=>'password'));?>
<?=$this->form->submit('Login');?>
<?=$this->form->end();?>
