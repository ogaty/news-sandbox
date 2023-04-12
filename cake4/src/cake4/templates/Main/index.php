<?php
/**
 * @var $newsList Cake\ORM\Query
 * @var $newsListJson array
 */
?>

<?php
foreach($newsList as $news) {
    echo $news->title;
}
?>

<div id="app" data-app="<?php echo htmlspecialchars(json_encode($newsListJson)); ?>"></div>

<script src="/assets/app.js"></script>
