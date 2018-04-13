@extends('layouts.layout')

@section('title', 'accueiltest')

@section('content_1')



    <form action="traitement.php"  method="post">


        <div class="form_row_one_form">
            <div id="column_one">
                <div class="column_one_row_one_center">
                    <div id="title">
                        <div id="inscription">Renseigner vos informations perso</div>
                        <div id="inscription_oupas">ou laisser les champs non obligatoire vierge</div>
                    </div>
                    <div id="formulaire_profil_centrage">
                        <div class="formulaire_profil_centrage_col">
                            <div class="row_with_column_one">
                                <div class="col_one">
                                    <label class="label" for="pseudo">Pseudo*</label>
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
                                    <label class="label" for="date">Date de naissance*</label>
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
                                    <label class="label" for="mail">Adresse Mail*</label>
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
                                    <label class="label" for="password">Mot de passe*</label>
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
                                    <label class="label" id="align_password" for="password_confirm" >Confirmer mot de passe*</label>
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
                                    <label class="label" for="creation">Creation</label>
                                </div>
                                <div class="col_two">
                                    <input type="date" id="creation" name="creation" value="" placeholder="" onblur="verification_date_creation(this)" />
                                </div>
                                <div class="col_three">
                                    <img src="img/check_ok.png" class='check_ok'  id="check_ok_creation"/>
                                    <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_creation"/>
                                </div>
                            </div>
                        </div>
                        <div class="formulaire_profil_centrage_col">
                            <div class="row_with_column_one">
                                <div class="col_one">
                                    <label class="label" for="bank_account">Compte bancaire</label>
                                </div>
                                <div class="col_two">
                                    <input type="bank_account" id="bank_account" name="bank_account" value="" placeholder="" onblur="verification_bank_account(this)" />
                                </div>
                                <div class="col_three">
                                    <img src="img/check_ok.png" class='check_ok'  id="check_ok_bank_account"/>
                                    <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_bank_account"/>
                                </div>
                            </div>

                            <div class="row_with_column">
                                <div class="col_one">
                                    <label class="label" for="gps_country_user">gps_country_user</label>
                                </div>
                                <div class="col_two">
                                    <input type="gps_country_user" id="gps_country_user" name="gps_country_user" value="" placeholder="" onblur="verification_gps_country_user(this)" />
                                </div>
                                <div class="col_three">
                                    <img src="img/check_ok.png" class='check_ok'  id="check_ok_gps_country_user"/>
                                    <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_gps_country_user"/>
                                </div>
                            </div>

                            <div class="row_with_column">
                                <div class="col_one">
                                    <label class="label" for="gps_city_user">gps_city_user</label>
                                </div>
                                <div class="col_two">
                                    <input type="gps_city_user" id="gps_city_user" name="gps_city_user" value="" placeholder="" onblur="verification_gps_city_user(this)" />
                                </div>
                                <div class="col_three">
                                    <img src="img/check_ok.png" class='check_ok'  id="check_ok_gps_city_user"/>
                                    <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_gps_city_user"/>
                                </div>
                            </div>

                            <div class="row_with_column">
                                <div class="col_one">
                                    <label class="label" for="profile_pic">profile_pic</label>
                                </div>
                                <div class="col_two">
                                    <input type="profile_pic" id="profile_pic" name="profile_pic" value="" placeholder="" onblur="verification_profile_pic(this)" />
                                </div>
                                <div class="col_three">
                                    <img src="img/check_ok.png" class='check_ok'  id="check_ok_profile_pic"/>
                                    <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_profile_pic"/>
                                </div>
                            </div>

                            <div class="row_with_column">
                                <div class="col_one">
                                </div>
                                <div class="col_two">
                                    <select id="list_select" name="gender" onblur="verif_gender(this)">
                                        <option class="xx" value="">sexe</option>
                                        <option class="xx" value="femme">Femme</option>
                                        <option class="xx" value="homme">Homme</option>
                                        <option class="xx" value="autre">Autre</option>
                                        <!-- Changement pour l'affichage homme/femme/autre ==================== -->
                                    </select>
                                </div>
                                <div class="col_three">
                                    <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_list_select"/>
                                    <img src="img/check_ok.png" class='check_ok' id="check_ok_list_select"/>
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
                        </div>
                    </div><!--fin de formulaire_profil_centrage-->
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

@section('content_2')

    <div id="carousel">
        <div id="slider">
            <figure>
                <img src="/img/img_1.jpg" />
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