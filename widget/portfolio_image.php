<div class="portfolio-thumb">
    <?php if ($image !== null) : ?>
        <img src="data:image/png;base64,<?php echo base64_encode($image['image']); ?>"/>
    <?php else : ?>
        not found
    <?php endif; ?>
</div>
<div class="portfolio-meta">
    <p class="portfolio-date"><?=$image !== null ? date('F, Y', strtotime($image['date'])) : ''; ?></p>
    <h2><?=$image !== null ? $image['name'] : ''; ?></h2>
</div>