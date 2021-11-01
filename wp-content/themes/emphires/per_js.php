<script>

//  DEBUT PUBLICATION

function calc_indexe (){

    let nbr_auteur1 = document.getElementById("ps_p_a1").value;
    let nbr_auteur2 = document.getElementById("ps_p_a2").value;
    let nbr_auteur3 = document.getElementById("ps_p_a3").value; 
    let nbr_auteur4 = document.getElementById("ps_p_a4").value;
    let nbr_auteur5 = document.getElementById("ps_p_a5").value;

    let note_auteur1 = document.getElementById("n_ps_p_a1");
    let note_auteur2 = document.getElementById("n_ps_p_a2");
    let note_auteur3 = document.getElementById("n_ps_p_a3"); 
    let note_auteur4 = document.getElementById("n_ps_p_a4");
    let note_auteur5 = document.getElementById("n_ps_p_a5");

    note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_a1) ?> ;
    note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_a2) ?> ;
    note_auteur3.value = nbr+auteur3 * <?php echo json_encode($ps_p_a3) ?> ;
    note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_a4) ?> ;
    note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_a5)  ?> ;
   
}

function calc_Nonindexe (){

let nbr_auteur1 = document.getElementById("ps_p_b1").value;
let nbr_auteur2 = document.getElementById("ps_p_b2").value;
let nbr_auteur3 = document.getElementById("ps_p_b3").value; 
let nbr_auteur4 = document.getElementById("ps_p_b4").value;
let nbr_auteur5 = document.getElementById("ps_p_b5").value;

let note_auteur1 = document.getElementById("n_ps_p_b1");
let note_auteur2 = document.getElementById("n_ps_p_b2");
let note_auteur3 = document.getElementById("n_ps_p_b3"); 
let note_auteur4 = document.getElementById("n_ps_p_b4");
let note_auteur5 = document.getElementById("n_ps_p_b5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_b1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_b2) ?> ;
note_auteur3.value = nbr+auteur3 * <?php echo json_encode($ps_p_b3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_b4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_b5)  ?> ;

}


function calc_Proceeding (){

let nbr_auteur1 = document.getElementById("ps_p_c1").value;
let nbr_auteur2 = document.getElementById("ps_p_c2").value;
let nbr_auteur3 = document.getElementById("ps_p_c3").value; 
let nbr_auteur4 = document.getElementById("ps_p_c4").value;
let nbr_auteur5 = document.getElementById("ps_p_c5").value;

let note_auteur1 = document.getElementById("n_ps_p_c1");
let note_auteur2 = document.getElementById("n_ps_p_c2");
let note_auteur3 = document.getElementById("n_ps_p_c3"); 
let note_auteur4 = document.getElementById("n_ps_p_c4");
let note_auteur5 = document.getElementById("n_ps_p_c5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_c1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_c2) ?> ;
note_auteur3.value = nbr+auteur3 * <?php echo json_encode($ps_p_c3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_c4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_c5)  ?> ;

}

function calc_Chapitre (){

let nbr_auteur1 = document.getElementById("ps_p_d1").value;
let nbr_auteur2 = document.getElementById("ps_p_d2").value;
let nbr_auteur3 = document.getElementById("ps_p_d3").value; 
let nbr_auteur4 = document.getElementById("ps_p_d4").value;
let nbr_auteur5 = document.getElementById("ps_p_d5").value;

let note_auteur1 = document.getElementById("n_ps_p_d1");
let note_auteur2 = document.getElementById("n_ps_p_d2");
let note_auteur3 = document.getElementById("n_ps_p_d3"); 
let note_auteur4 = document.getElementById("n_ps_p_d4");
let note_auteur5 = document.getElementById("n_ps_p_d5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_d1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_d2) ?> ;
note_auteur3.value = nbr+auteur3 * <?php echo json_encode($ps_p_d3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_d4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_d5)  ?> ;

}

function calc_Melange (){

let nbr_auteur1 = document.getElementById("ps_p_e1").value;
let nbr_auteur2 = document.getElementById("ps_p_e2").value;
let nbr_auteur3 = document.getElementById("ps_p_e3").value; 
let nbr_auteur4 = document.getElementById("ps_p_e4").value;
let nbr_auteur5 = document.getElementById("ps_p_e5").value;

let note_auteur1 = document.getElementById("n_ps_p_e1");
let note_auteur2 = document.getElementById("n_ps_p_e2");
let note_auteur3 = document.getElementById("n_ps_p_e3"); 
let note_auteur4 = document.getElementById("n_ps_p_e4");
let note_auteur5 = document.getElementById("n_ps_p_e5");

note_auteur1.value = nbr_auteur1 * <?php echo json_encode($ps_p_e1) ?> ;
note_auteur2.value = nbr_auteur2 * <?php echo json_encode($ps_p_e2) ?> ;
note_auteur3.value = nbr+auteur3 * <?php echo json_encode($ps_p_e3) ?> ;
note_auteur4.value = nbr_auteur4 * <?php echo json_encode($ps_p_e4) ?> ;
note_auteur5.value = nbr_auteur5 * <?php echo json_encode($ps_p_e5)  ?> ;

}

function calc_Ouvrage (){

    let nbr_ouvrage = document.getElementById("ps_p_f1").value;
    let note_ouvrage = document.getElementById("n_ps_p_f1");
    note_ouvrage.value = nbr_ouvrage * <?php echo json_encode($ps_p_f1) ?> ;
}

function calc_Revue (){

let nbr_revue = document.getElementById("ps_p_g1").value;
let note_revue = document.getElementById("n_ps_p_g1");
note_revue.value = nbr_revue * <?php echo json_encode($ps_p_g1) ?> ;
}

function calc_Fiche_tech (){

let nbr_fiche_tech = document.getElementById("ps_p_h1").value;
let note_fiche_tech = document.getElementById("n_ps_p_h1");
note_fiche_tech.value = nbr_fiche_tech * <?php echo json_encode($ps_p_h1) ?> ;
}

function calc_Doc_valorisation (){

let nbr_doc_valorisation = document.getElementById("ps_p_i1").value;
let note_doc_valorisation = document.getElementById("n_ps_p_i1");
note_doc_valorisation.value = nbr_doc_valorisation * <?php echo json_encode($ps_p_i1) ?> ;
}


// DEBUT COMMUNICATION


function calc_Conf_internationale (){

let nbr_conf_internationale = document.getElementById("ps_c_a1").value;
let note_conf_internationale = document.getElementById("n_ps_c_a1");
note_conf_internationale.value = nbr_conf_internationale * <?php echo json_encode($ps_c_a1) ?> ;
}

function calc_Conf_nationale (){

let nbr_doc_conf_nationale = document.getElementById("ps_c_a2").value;
let note_doc_conf_nationale = document.getElementById("n_ps_c_a2");
note_doc_conf_nationale.value = nbr_doc_conf_nationale * <?php echo json_encode($ps_c_a2) ?> ;
}

function calc_Conf_internationale_domaine (){

let nbr_conf_internationale_domaine = document.getElementById("ps_c_a3").value;
let note_conf_internationale_domaine = document.getElementById("n_ps_c_a3");
note_conf_internationale_domaine.value = nbr_conf_internationale_domaine * <?php echo json_encode($ps_c_a3) ?> ;
}


// DEBUT ENCADREMENT


function calc_Licence(){

let nbr_licence = document.getElementById("encadrement_a1").value;
let note_licence = document.getElementById("n_encadrement_a1");
note_licence.value = nbr_licence * <?php echo json_encode($encadrement_a1) ?> ;
}

function calc_Ingenieur (){

let nbr_ingenieur = document.getElementById("encadrement_a2").value;
let note_ingenieur = document.getElementById("n_encadrement_a2");
note_ingenieur.value = nbr_ingenieur * <?php echo json_encode($encadrement_a2) ?> ;
}

function calc_Master (){

let nbr_master = document.getElementById("encadrement_a3").value;
let note_master = document.getElementById("n_encadrement_a3");
note_master.value = nbr_master * <?php echo json_encode($encadrement_a3) ?> ;
}

function calc_DocteurMPOV (){

let nbr_docteurMPOV = document.getElementById("encadrement_a4").value;
let note_docteurMPOV = document.getElementById("n_encadrement_a4");
note_docteurMPOV.value = nbr_docteurMPOV * <?php echo json_encode($encadrement_a4) ?> ;
}

function calc_DocteurUnique (){

let nbr_docteurUnique = document.getElementById("encadrement_a5").value;
let note_docteurUnique = document.getElementById("n_encadrement_a5");
note_docteurUnique.value = nbr_docteurUnique * <?php echo json_encode($encadrement_a5) ?> ;
}

function calc_DES (){

let nbr_des = document.getElementById("encadrement_a6").value;
let note_des = document.getElementById("n_encadrement_a6");
note_conf_internationale_domaine.value = nbr_des * <?php echo json_encode($encadrement_a6) ?> ;
}


// DEBUT MEMBRE JURY DELIBERATION


function calc_Ingenieur_mjd (){

let nbr_ingenieur_mjd = document.getElementById("mjd_a1").value;
let note_ingenieur_mjd = document.getElementById("n_mjd_a1");
note_ingenieur_mjd.value = nbr_ingenieur_mjd * <?php echo json_encode($mjd_a1) ?> ;
}

function calc_Master_mjd (){

let nbr_master_mjd = document.getElementById("mjd_a2").value;
let note_master_mjd = document.getElementById("n_mjd_a2");
note_master_mjd.value = nbr_conf_internationale_domaine * <?php echo json_encode($mjd_a2) ?> ;
}

function calc_DocteurMPOV_mjd (){

let nbr_docteurMPOV_mjd = document.getElementById("mjd_a3").value;
let note_docteurMPOV_mjd = document.getElementById("n_mjd_a3");
note_docteurMPOV.value_mjd = nbr_docteurMPOV_mjd * <?php echo json_encode($mjd_a3) ?> ;
}

function calc_DES_mjd (){

let nbr_des_mjd = document.getElementById("mjd_a4").value;
let note_des_mjd = document.getElementById("n_mjd_a4");
note_des_mjd.value = nbr_des_mjd * <?php echo json_encode($mjd_a4) ?> ;
}
function calc_evaluateur_mjd (){

let nbr_evaluateur_mjd = document.getElementById("mjd_a5").value;
let note_evaluateur_mjd = document.getElementById("n_mjd_a5");
note_evaluateur_mjd.value = nbr_evaluateur_mjd * <?php echo json_encode($mjd_a5) ?> ;
}


// PRESIDENT JURY DELIBERATION


function calc_Ingenieur_pjd (){

let nbr_ingenieur_pjd = document.getElementById("pjd_a1").value;
let note_ingenieur_pjd = document.getElementById("n_pjd_a1");
note_ingenieur_pjd.value = nbr_ingenieur_pjd * <?php echo json_encode($pjd_a1) ?> ;
}

function calc_Master_pjd (){

let nbr_master_pjd = document.getElementById("pjd_a2").value;
let note_master_pjd = document.getElementById("n_pjd_a2");
note_master_pjd.value = nbr_master_pjd * <?php echo json_encode($pjd_a2) ?> ;
}

function calc_DocteurMPOV_pjd (){

let nbr_docteurMPOV_pjd = document.getElementById("pjd_a3").value;
let note_docteurMPOV_pjd = document.getElementById("n_pjd_a3");
note_docteurMPOV_pjd.value = nbr_docteurMPOV_pjd * <?php echo json_encode($pjd_a3) ?> ;
}

function calc_Docteur_unique_pjd (){

let nbr_Docteur_unique_pjd = document.getElementById("pjd_a4").value;
let note_Docteur_unique_pjd = document.getElementById("n_pjd_a4");
note_Docteur_unique_pjd.value = nbr_Docteur_unique_pjd * <?php echo json_encode($pjd_a4) ?> ;
}

// DEBUT RESPONSABILITES ACADEMIQUES


function calc_Resp_niveau (){

let nbr_resp_niveau = document.getElementById("respo_aca_a1").value;
let note_resp_niveau = document.getElementById("n_respo_aca_a1");
note_resp_niveau.value = nbr_resp_niveau * <?php echo json_encode($respo_aca_a1) ?> ;
}

function calc_Resp_formation (){

let nbr_resp_formation = document.getElementById("respo_aca_a2").value;
let note_resp_formation = document.getElementById("n_respo_aca_a2");
note_resp_formation.value = nbr_resp_formation * <?php echo json_encode($respo_aca_a2) ?> ;
}

function calc_Chef_departement  (){

let nbr_chef_departement = document.getElementById("respo_aca_a3").value;
let note_chef_departement = document.getElementById("n_respo_aca_a3");
note_chef_departement.value = nbr_chef_departement * <?php echo json_encode($respo_aca_a3) ?> ;
}

function calc_Dr_Inst_Faculte (){

let nbr_Dr_inst_fac = document.getElementById("respo_aca_a4").value;
let note_Dr_inst_fac = document.getElementById("n_respo_aca_a4");
note_Dr_inst_fac.value = nbr_Dr_inst_fac * <?php echo json_encode($respo_aca_a4) ?> ;
}

function calc_Dr_Inst_Universite (){

let nbr_Dr_inst_universite = document.getElementById("respo_aca_a5").value;
let note_Dr_inst_universite = document.getElementById("n_respo_aca_a5");
note_Dr_inst_universite.value = nbr_Dr_inst_universite * <?php echo json_encode($respo_aca_a5) ?> ;
}

function calc_Dr_Ufr_adjoint (){

let nbr_Dr_Ufr_adjoint = document.getElementById("respo_aca_a6").value;
let note_Dr_Ufr_adjoint = document.getElementById("n_respo_aca_a6");
note_Dr_Ufr_adjoint.value = nbr_Dr_Ufr_adjoint * <?php echo json_encode($respo_aca_a6) ?> ;
}

function calc_Dr_central (){

let nbr_Dr_central = document.getElementById("respo_aca_a7").value;
let note_Dr_central = document.getElementById("n_respo_aca_a7");
note_Dr_central.value = nbr_Dr_central * <?php echo json_encode($respo_aca_a7) ?> ;
}

function calc_Resp_formation_doctorale (){

let nbr_resp_form_doctorale = document.getElementById("respo_aca_a8").value;
let note_resp_form_doctorale = document.getElementById("n_respo_aca_a8");
note_resp_form_doctorale.value = nbr_resp_form_doctorale * <?php echo json_encode($respo_aca_a8) ?> ;
}

function calc_Dr_revue (){

let nbr_Dr_revue = document.getElementById("respo_aca_a9").value;
let note_Dr_revue = document.getElementById("n_respo_aca_a9");
note_Dr_revue.value = nbr_Dr_revue * <?php echo json_encode($respo_aca_a9) ?> ;
}

function calc_Dr_laboratoire (){

let nbr_Dr_laboratoire = document.getElementById("respo_aca_aa1").value;
let note_Dr_laboratoire = document.getElementById("n_respo_aca_aa1");
note_Dr_laboratoire.value = nbr_Dr_laboratoire * <?php echo json_encode($respo_aca_aa1) ?> ;
}

function calc_Dr_ecole_doctorale (){

let nbr_Dr_ecole_doctorale = document.getElementById("respo_aca_aa2").value;
let note_Dr_ecole_doctorale= document.getElementById("n_respo_aca_aa2");
note_Dr_ecole_doctorale.value = nbr_Dr_ecole_doctorale * <?php echo json_encode($respo_aca_aa2) ?> ;
}

function calc_Dr_Ufr (){

let nbr_Dr_ufr = document.getElementById("respo_aca_aa3").value;
let note_Dr_ufr = document.getElementById("n_respo_aca_aa3");
note_Dr_ufr.value = nbr_Dr_ufr * <?php echo json_encode($respo_aca_aa3) ?> ;
}

function calc_Dr_institut_universite (){

let nbr_Dr_institut_universite = document.getElementById("respo_aca_aa4").value;
let note_Dr_institut_universite = document.getElementById("n_respo_aca_aa4");
note_Dr_institut_universite.value = nbr_Dr_institut_universite * <?php echo json_encode($respo_aca_aa4) ?> ;
}


// DEBUT DEVELOPPEMENT INSTITUTIONNEL

function calc_Promotion_pedagogie (){

let nbr_pedagogie = document.getElementById("di_a1").value;
let note_pedagogie = document.getElementById("n_di_a1");
note_pedagogie.value = nbr_pedagogie * <?php echo json_encode($di_a1) ?> ;
}


function calc_Promotion_recherche (){

let nbr_recherche = document.getElementById("di_a2").value;
let note_recherche = document.getElementById("n_di_a2");
note_recherche.value = nbr_recherche * <?php echo json_encode($di_a2) ?> ;
}


function calc_Promotion_gouvernance (){

let nbr_gouvernance = document.getElementById("di_a3").value;
let note_gouvernance = document.getElementById("n_di_a3");
note_gouvernance.value = nbr_gouvernance * <?php echo json_encode($di_a3) ?> ;
}


function calc_Service_a_la_communaute (){

let nbr_service_com = document.getElementById("di_a4").value;
let note_service_com = document.getElementById("n_di_a4");
note_service_com.value = nbr_service_com * <?php echo json_encode($di_a4) ?> ;
}

function calc_Chercheur_principal  (){

let nbr_principal = document.getElementById("di_a5").value;
let note_principal = document.getElementById("n_di_a5");
note_principal.value = nbr_principal * <?php echo json_encode($di_a5) ?> ;
}

function calc_chercheur_associe  (){

let nbr_associe = document.getElementById("di_a6").value;
let note_associe = document.getElementById("n_di_a6");
note_associe.value = nbr_associe * <?php echo json_encode($di_a6) ?> ;
}


// DEBUT INNOVATIONS, BREVETS, DISTINCTIONS

function calc_Brevets (){

let nbr_brevet = document.getElementById("ibd_a1").value;
let note_brevet = document.getElementById("n_ibd_a1");
note_brevet.value = nbr_brevet * <?php echo json_encode($ibd_a1) ?> ;
}

function calc_Distinctions (){

let nbr_distinction = document.getElementById("ibd_a2").value;
let note_distinction = document.getElementById("n_ibd_a2");
note_distinction.value = nbr_distinction * <?php echo json_encode($ibd_a2) ?> ;
}



</script>
