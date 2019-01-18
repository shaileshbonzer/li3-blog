<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 11:52 AM
 */
?>

<p>Posts listing</p>

<?php foreach($myPosts as $post): ?>
    <div><?=$post->title ?></div>
    <div><?=$post->body ?></div>
<?php endforeach; ?>