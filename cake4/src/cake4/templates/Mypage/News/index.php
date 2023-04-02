<h1>News</h1>

<div>
    <a href="/news/create">Create</a>
</div>

<div>
    <ul>
        <?php foreach ($newsList as $newsData): ?>
            <li><a href="/news/<?php echo $newsData->id; ?>"><?php echo $newsData->title; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
