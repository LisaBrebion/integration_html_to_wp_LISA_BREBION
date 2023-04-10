 </main>

 <!-- Footer -->
 <footer id="display-love" class="bg-dark mt-3 text-white container-fluid pb-2 pt-1">
     <div class="row">
         <div class="col-12 text-center">
             <small>Created with ❤️</small>
         </div>
     </div>
 </footer>

 <!-- Scroll down mouse wheel-->
 <div class="row fixed-bottom text-center pb-5 d-none d-lg-flex" aria-hidden="true" id="scroll-down-mouse">
     <svg xmlns="http://www.w3.org/2000/svg" width="28" height="45" viewBox="0 0 28 45">
         <g id="mouse" fill="none" stroke="#969696" stroke-width="1">
             <rect width="28" height="45" rx="14" stroke="none" />
             <rect x="0.5" y="0.5" width="27" height="44" rx="13.5" fill="none" />
         </g>
         <ellipse id="mouse-wheel" cx="5.5" cy="6.5" rx="5.5" ry="6.5" fill="#969696" />
     </svg>

     <small class="pt-1"><i>Scroll</i></small>
 </div>

 <!-- Go on top -->
 <a id="scroll-top-btn" href="#top" class="btn btn-dark bg-dark border-dark"><i class="fs-4 bi bi-chevron-double-up"></i></a>

 <!-- Modale contact -->
 <div class="modal" tabindex="-1" id="contactModal">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header bg-dark text-white">
                 <h5 class="modal-title">Envie de dire un petit mot ?</h5>
                 <button type="button" class="btn text-white" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
             </div>
             <div class="modal-body">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <h6>Envoyez nous un message !</h6>
                         </div>
                     </div>
                     <!-- Contact form -->
                     <div class="row mt-3">
                         <div class="col-12">
                             <?= do_shortcode('[contact-form-7 id="20" title="Formulaire de contact 1"]'); ?>

                             <!-- <form action="" novalidate class="needs-validation" id="modal-contact">
                                 <div class="form-floating mb-3">
                                     <input required type="text" class="form-control" id="nom" aria-describedby="emailHelp" placeholder="Jean Dupont">
                                     <label for="nom" class="form-label">Prénom/Nom</label>
                                     <div class="valid-feedback">
                                         C'est bon !
                                     </div>
                                     <div class="invalid-feedback">
                                         Veuillez indiquer votre nom.
                                     </div>
                                 </div>
                                 <div class="form-floating mb-3">
                                     <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nom@exemple.com">
                                     <label for="exampleInputEmail1" class="form-label">Email</label>
                                     <div id="emailHelp" class="form-text">Nous ne spammons pas.
                                     </div>
                                     <div class="valid-feedback">
                                         C'est bon !
                                     </div>
                                     <div class="invalid-feedback">
                                         Veuillez entrer un email valide.
                                     </div>
                                 </div>
                                 <div class="form-floating mb-3">
                                     <textarea required style="height: 130px" class="form-control" placeholder="Laissez votre message ici" id="floatingTextarea"></textarea>
                                     <label for="floatingTextarea">Votre message</label>
                                     <div class="valid-feedback">
                                         C'est bon !
                                     </div>
                                     <div class="invalid-feedback">
                                         Veuillez entrer un message.
                                     </div>
                                 </div>

                                 <div class="form-check">
                                     <input required class="form-check-input" type="checkbox" value="cgu" id="defaultCheck1">
                                     <label class="form-check-label" for="defaultCheck1">
                                         J'accèpte les <a href="#!">conditions d'utilisation</a> et la <a href="#!">
                                             politique de confidentialité</a>.
                                     </label>
                                     <div class="valid-feedback">
                                         C'est bon !
                                     </div>
                                     <div class="invalid-feedback">
                                         Vous devez accepter les termes.
                                     </div>
                                 </div>

                                 <div class="row mt-3">
                                     <div class="col-12 text-center text-lg-end">
                                         <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Fermer</button>
                                         <button type="submit" class="btn btn-primary">Envoyer</button>
                                     </div>
                                 </div>
                             </form> -->
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Vendor scripts -->
 <script src="sources/js/bootstrap.bundle.min.js"></script>

 <!-- Main script -->
 <script src="assets/js/script.js"></script>
 <?php wp_footer(); ?>
 </body>

 </html>