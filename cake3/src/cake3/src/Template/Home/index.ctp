<?php
/**
 * @var $newsList
 */
?>
<?php foreach ($newsList as $news) : ?>
<div>
    <a href="/news/<?php echo $news->id; ?>">
        <?php echo $news->title; ?>
    </a>
</div>
<?php endforeach; ?>
