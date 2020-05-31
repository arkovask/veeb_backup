<?php require_once APPROOT.'/views/inc/header.php';?>
<?php flashShow('post_message');?>
<?php if(isset($_SESSION['user_id'])) :?>
    <div class="row mb-3">
        <div class="col">
            <a href="<?php echo URLROOT?>/posts/add" class="btn btn-info">Add Post</a>
        </div>
    </div>
<?php endif;?>
    <div class="row mb-3">
        <div class="col">
            <h1>Posts</h1>
        </div>
    </div>
    <div class="row mb-3">
    <div class="col">
        <?php foreach ($data as $post):?>
            <div class="card card-body mb-3">
                <h4 class="card-title"><?php echo $post->title;?></h4>
                <div class="bg-light p-2 mb-3">Writen by <?php echo $post->name;?> on <?php echo $post->created_at;?></div>
                <div class="card-text mb-3"><?php echo substr($post->content, 0, 300);?>...</div>
                <a href="<?php echo URLROOT?>/posts/show/<?php echo $post->postID;?>" class="btn btn-info">Read More</a>
            </div>
        <?php endforeach;?>
    </div>
<?php require_once APPROOT.'/views/inc/footer.php';?>