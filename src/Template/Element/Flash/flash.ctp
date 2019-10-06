<div class="alert alert-<?= h($params['type']) ?>">
    <?= h($message) ?>
    <a href="#" class="close" onclick="$(this).parent().fadeOut();return false;">&times;</a>
</div>