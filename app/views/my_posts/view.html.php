<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 12:17 PM
 */
?>

<h1><?=$myPost->title ?></h1>
<p><?=$myPost->body ?></p>
<p><a href="/my_posts/delete/<?=$myPost->id ?>/">Delete This Post</a></p>

<a href="/my_posts/">View All Posts</a>

