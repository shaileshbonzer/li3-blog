<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 18/1/2019
 * Time: 11:52 AM
 */
?>

<h1>Blog</h1>
<!--We'll hard-code a link to the add post page -->
<p><a href="/my_posts/add/">Add Post</a></p>

<!--Loop through all the posts in the $myPosts object -->
<?php foreach($myPosts as $post): ?>
    <!--Each post should be displayed with this template... -->
    <article>
        <h2>
            <!--Use the id column to build a link to this post -->
            <a href="/my_posts/view/<?=$post->id ?>/">
                <!--Use the title column to show the post title -->
                <?=$post->title ?>
            </a>
        </h2>
        <!--Use the body column to show the posts contents -->
        <p><?=$post->body ?></p>
        <p><a href="/my_posts/edit/<?=$post->id ?>/">Edit This Post</a></p>
    </article>
<?php endforeach; ?>
