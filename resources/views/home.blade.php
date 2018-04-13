@extends('layouts.layout')

@section('title', 'index c est pour un test')


@section('content_1')



    <div id="carousel">
        <div id="slider">
            <figure>
                <img src="img/img_1.jpg" />
                <img src="img/img_2.jpg" />
                <img src="img/img_3.jpg" />
                <img src="img/img_4.jpg" />
                <img src="img/img_5.jpg" />
                <img src="img/img_1.jpg" />
                <img src="img/img_2.jpg" />
                <img src="img/img_3.jpg" />
                <img src="img/img_4.jpg" />
                <img src="img/img_5.jpg" />
            </figure>
        </div>
    </div>



@endsection


@section('content_2')



    <form action="traitement.php"  method="post">

        <div class="form_row_one">
            <div id="column_one">
                <div class="column_one_row_one_center">
                    <div id="title">
                        <div id="inscription">Inscrivez-vous</div>
                        <div id="inscription_oupas">ou faites une simple visite</div>
                    </div>

                    <div class="row_with_column_one">
                        <div class="col_one">
                            <label class="label" for="pseudo">Pseudo</label>
                        </div>
                        <div class="col_two">
                            <input type="texte" id="pseudo" name="pseudo" value="" placeholder="ici doit s'écrire votre nom" onkeyup="verif_pseudo(this)"/>
                        </div>
                        <div class="col_three">
                            <img src="img/check_ok.png" class='check_ok' id="check_ok_pseudo"/>
                            <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_pseudo"/>
                        </div>
                    </div>

                    <div class="row_with_column">
                        <div class="col_one">
                            <label class="label" for="date">Date de naissance</label>
                        </div>
                        <div class="col_two">
                            <input type="date" id="date" name="birth" value="" placeholder="" onblur="verification_date_birth(this)" />
                        </div>
                        <div class="col_three">
                            <img src="img/check_ok.png" class='check_ok'  id="check_ok_birth"/>
                            <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_birth"/>
                        </div>
                    </div>

                    <div class="row_with_column">
                        <div class="col_one">
                            <label class="label" for="mail">Adresse Mail</label>
                        </div>
                        <div class="col_two">
                            <input type="texte" id="mail" name="mail" value="" placeholder="E-mail" onkeyup="verif_mail(this)"/>
                        </div>
                        <div class="col_three">
                            <img src="img/check_ok.png" class='check_ok' id="check_ok_mail"/>
                            <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_mail"/>
                        </div>
                    </div>

                    <div class="row_with_column">
                        <div class="col_one">
                            <label class="label" for="password">Mot de passe</label>
                        </div>
                        <div class="col_two">
                            <input type="texte" id="password" name="password" value="" onkeyup="verif_password(this)"/>
                        </div>
                        <div class="col_three">
                            <img src="img/check_ok.png" class='check_ok' id="check_ok_password"/>
                            <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_password"/>
                        </div>
                    </div>

                    <div class="row_with_column">
                        <div class="col_one">
                            <label class="label" id="align_password" for="password_confirm" >Confirmer mot de passe</label>
                        </div>
                        <div class="col_two">
                            <input type="password" id="password_confirm" name="pass_verif" value="" onkeyup="verif_conf_password(this)"/>
                            <div id="password_confirm_test"></div>
                        </div>
                        <div class="col_three">
                            <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_password_confirm"/>
                            <img src="img/check_ok.png" class='check_ok' id="check_ok_password_confirm"/>
                        </div>
                    </div>

                    <div class="row_with_column">
                        <div class="col_one">
                        </div>
                        <div class="col_two">
                            <div class="txt_cgu">
                                <p id="cgu_scale"><a href="cgu.php" title="va voir les condition légale d'utilisation">J'accepte vos clauses et conditions</a></p>
                            </div>
                            <div class="check_cgu">
                                <input id="checkbox" type="checkbox" name="cgu" value="" onclick="checkbox_on_click(this)" value="Connexion" />
                                <div id="checkbox_test"></div>
                            </div>
                        </div>
                        <div class="col_three">
                            <div class="col_check">
                                <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_checkbox"/>
                                <img src="img/check_ok.png" class='check_ok' id="check_ok_checkbox"/>
                            </div>
                        </div>
                    </div>

                    <div class="boutons">
                        <div id="btn_valider">
                            <input id="actif" class="btn_fin" type="submit" name="submit" value="Valider" title="vas y appui sur le bouton !!!"  />
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

@endsection