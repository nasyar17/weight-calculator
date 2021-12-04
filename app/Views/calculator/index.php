<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<main class="px-3 text-white text-center">
   <?= $this->renderSection('content'); ?>
   <h1>Body Mass Calculator</h1>
   <p class="lead">Idealism is online tools to calculate ideal body weight with some methods</p>
   <p class="lead">
      <a href="/calculator/bmi" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Try Now</a>
   </p>
</main>

<?= $this->endSection(); ?>