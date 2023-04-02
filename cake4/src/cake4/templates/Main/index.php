<?php
/**
 * @var $newsList Cake\ORM\Query
 */
?>

<?php
foreach($newsList as $news) {
    echo $news->title;
}
?>

<div id="app"></div>

<script src="/assets/app.js"></script>
