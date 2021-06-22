<section class="examenes">
    <div class="container">
        <div class="accordion" id="accordionExample">
            <?php $exams = get_field('exam') ?>
            <?php foreach ($exams as $index => $exam) : ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $index ?>">
                        <button class="accordion-button examen__btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>">
                            <?= $exam['titulo'] ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $index ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $index ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body examen__description">
                            <?= $exam['descripcion'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>