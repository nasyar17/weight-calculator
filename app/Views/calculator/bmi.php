<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>

<main class="px-3">
   <?= $this->renderSection('content'); ?>
   <div class="row">
      <div class="col">
         <div class="card outline-main">
            <div class="card-body text-center">
               <h4 class="fw-bold mb-4">Body Mass Index Calculator</h4>
               <form action="/calculator/calculate/bmi" method="get">
                  <div class="col-lg-12">
                     <div class="input-group mb-3">
                        <span class="input-group-text">Height</span>
                        <input type="number" class="form-control" name="height">
                        <span class="input-group-text">cm</span>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="input-group mb-3">
                        <span class="input-group-text">Weight</span>
                        <input type="number" class="form-control" name="weight">
                        <span class="input-group-text">kg</span>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-dark px-5">Calculate</button>
               </form>
            </div>
         </div>
      </div>
   </div>

</main>

<?= $this->endSection(); ?>