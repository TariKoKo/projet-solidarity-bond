<div class='col-2 mt-4 bd-highlight' /><a href='' id="bouton-connect" class='btn btn-default btn-rounded text-white'
    data-toggle='modal' data-target='#elegantModalForm'>Connexion</a></div>
<div class='modal fade' id='elegantModalForm' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'
    aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <!--Content-->
        <div class='modal-content form-elegant'>
            <!--Header-->
            <div class='modal-header text-center'>
                <h3 class='modal-title w-100 dark-grey-text font-weight-bold my-3' id='myModalLabel'>
                    <strong>Connexion</strong></h3>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class='modal-body mx-4'>
                <!--Body-->
                <form method='post' action='scriptConnexion.php' autocomplete='on'>
                    <div id='Se connecter' class='md-form mb-5'>
                        <input type='email' id='email' name='Adresse_email' class='form-control validate'>
                        <label data-error='wrong' required='required' data-success='right' for='email'>Email</label>
                    </div>
                    <div class='md-form pb-3'>
                        <input type='password' id='password' name='Mot_de_passe' class='form-control validate'>
                        <label data-error='wrong' data-success='right' required='required' for='password'>Mot de
                            passe</label>
                    </div>
                    <div class='text-center mb-3'>
                        <input type='submit' value='Se connecter'
                            class='btn blue-gradient btn-block btn-rounded z-depth-1a'>
                    </div>
                </form>
            </div>
            <!--Footer-->
            <div class='modal-footer mx-5 pt-3 mb-1'>
                <p class='font-small grey-text d-flex justify-content-end'>Vous n'avez pas de comtpe? <a
                        href='inscription.php' class='blue-text ml-1'>S'inscrire</a></p>
            </div>
        </div>
    </div>
</div>