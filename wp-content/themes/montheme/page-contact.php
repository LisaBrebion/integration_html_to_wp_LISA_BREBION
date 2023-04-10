<?php get_header();
?>

// <!-- Contact -->
<section class="mt-5 mt-sm-0" id="contact-section">
    <div class="container">

        <!-- Title -->
        <div class="row justify-content-center justify-content-xl-start mt-5 pt-2 pt-lg-4">
            <div class="col-10 col-sm-12 col-xl-8">
                <h2 class="mb-0 fw-bold">Contactez-moi</h2>
                <p class="subtitle-h2">Je vous répondrais dès que possible</p>
            </div>

        </div>

        <!-- Contact form -->
        <div class="row justify-content-center mt-3">
            <div class="col-10 col-sm-12">

                <div class="row">


                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <div class="row mt-3">
                            <div class="col-12">
                                <?= do_shortcode('[contact-form-7 id="20" title="Formulaire de contact 1"]'); ?>
                                <!-- <form action="" novalidate class="needs-validation" id="home-contact">
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
                                            <button type="submit" class="btn btn-outline-primary">Envoyer</button>
                                        </div>
                                    </div>
                                </form> -->
                            </div>

                            <div class="d-none d-lg-block col-lg-6 text-center mt-4 mt-lg-0">
                                <img src="<?= get_template_directory_uri() . '/assets/img/hero-img-lg.svg' ?>" alt=" Logo">
                            </div>
                        </div>


                    </div>
                </div>
            </div>


</section>

<?php get_footer() ?>