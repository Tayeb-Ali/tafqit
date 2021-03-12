<?= $this->extend('templates/app', esc($number)) ?>

<?= $this->section('content') ?>

<div class="container">
    <h1>number: <?= esc($number) ?></h1>
</div>

<?= $this->endSection() ?>
