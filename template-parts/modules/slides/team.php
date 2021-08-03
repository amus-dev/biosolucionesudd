<section class="team">
     <div class="container">
          <h2 class="team__title">Equipo Científico Clínico</h2>
          <div class="team__slide">
               <div class="row">
                    <?php $team_clinico = get_field("team_clinico"); ?>
                    <?php foreach ($team_clinico as $index => $person) : ?>
                         <div class="col-lg-3 col-md-6 col-sm-12">
                              <a href="javascript:void(0)" id="teamClick" data-bs-toggle="modal" data-bs-target="#modal<?= $index; ?>">
                                   <div class="team__card">
                                        <div class="card__image" style="background-image: url(<?= $person["image"]["sizes"]["large"]; ?>"></div>
                                        <div class="card__body">
                                             <p class="card__name"><?= $person["name"]; ?></p>
                                             <p class="card__position"><?= $person["cargo"]; ?></p>
                                        </div>
                                   </div>
                              </a>
                         </div>
                         <!-- Modal -->
                         <div class="modal fade modalTeam" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="modal<?= $index; ?>">
                              <div class="modal-dialog modal-xl modal-dialog-centered">
                                   <div class="modal-content">
                                        <div class="modal-header">
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                             <div class="row">
                                                  <div class="col-12 col-md-6">
                                                       <img src="<?= $person["image"]["sizes"]["large"]; ?>" class="img-fluid modalTeam__image">
                                                  </div>
                                                  <div class="col-12 col-md-6 align-self-center">
                                                       <h5 class="modalTeam__name" id="namePerson"><?= $person["name"]; ?></h5>
                                                       <p class="modalTeam__cargo"><?= $person["cargo"]; ?></p>
                                                  </div>
                                                  <div class="col-12 mt-5">
                                                       <div class="container">
                                                            <div class="modalTeam__content">
                                                                 <?= $person["information"]; ?>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    <?php endforeach; ?>
               </div>
          </div>
     </div>
</section>