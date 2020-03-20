<?php require_once APPROOT.'/views/inc/header.php';?>
<a href="<?php echo URLROOT?>/posts" class="btn btn-light">Back</a>
<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->name;?> on <?php echo $data['post']->created_at;?>
</div>
<p><?php echo $data['post']->content;?></p>
<?php require_once APPROOT.'/views/inc/footer.php';?>

