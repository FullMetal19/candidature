<?php
/* template name:page presentation */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<style>
    *{
        margin: 0;padding: 0;
    }
    .titre_text2 .titre_text{
        width: 50%;
    }
    section.main_body{
        display: grid;
        grid-template-rows: 150px auto 150px;
    }
    body{
        background-image: url("http://localhost/candidature/wp-content/uploads/2021/11/bg_cand.jpg");
        background-position: 0;
        background-repeat: repeat-y;
        background-size: contain;
    }
    .container{
        margin-bottom: 2%
    }
    div.header{
        background-image: url("http://localhost/candidature/wp-content/uploads/2021/11/bg_cand.jpg");
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: white;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        border-radius: 0% 0% 1% 1%;
        position: -webkit-sticky;
        position: sticky;
        top: 0px;
    }
    div.header img{
        width: 200px;
        margin-left: 10%;
    }
    div.menu_bar{
        display: flex;
        gap: 0.2em;
        width: 30%;
        position: absolute;
        bottom: 0%;
        right: 1%;
        flex-wrap: nowrap;
    }
    div.menu_bar a{
        text-decoration: none;
        color: white;
        font-size: large;
        padding: 2%;
        margin-bottom: 5.5%;
        background-color: rgb(132, 181, 39);
        width: 90%;
        margin-right: 2%;
        text-align: center;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        transition: 2s all;
    }
    div.menu_bar a:hover{
        transform: scale(1.05);
        background-color:rgb(141, 54, 20);
        box-shadow: 0px 5px 3px rgb(132, 181, 39);
        transition: 1s all;
    }
    img.banner_recteur{
        width: 100%;
        margin-top: 1%;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        height: auto;
        border-radius: 1% 1% 0% 0%;
    }
    div.titre_text h1{
        background-color: rgba(10, 107, 49,0.6);
        margin: 2% 10%;
        text-align: center;
        color: white;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
    }
    .p{
        margin: 0% 10%;
        text-align: justify;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        padding: 2%;
        background-color: rgba(255,255,255,0.6);
    }
    div.titre_text2{
        display: flex;
        margin: 2% 5%;
        width: 90%;
    }
    .nom{
        text-align: right;
    }
   
    @media(max-width:745px){
        section.main_body{
        grid-template-rows: 100px auto 100px;
    }
    div.header img{
        width: 130px;
    }
    div.menu_bar a{
        font-size: small;
        margin-right: 5%;
        margin-bottom: 8%;
    }
    div.titre_text2{
        display: flex;
        flex-direction: column;
        margin: 2% 0%;
    }
    div.menu_bar a{
            font-size: x-small;
        }
        .titre_text2 .titre_text{
        width: 100%;
    }
    div.titre_text2{
        width: 100%;
    }
    }
    
    @media(max-width:450px){
        div.menu_bar a{
            font-size: 0.5em;
        }
    }
    footer{
    background-color:#333;
    /* padding :2em; */
}

 div.pied_de_page_general{
	 display :flex;
	 flex-wrap :wrap;
	 justify-content : space-between;
	 gap:1em;
	 
 }
 div.reseau_sociaux{
	display :flex;
	justify-content : center;
	gap: 3px;
 }
 div.blog_gauche{
     display:flex;
     flex-direction:column;
     /* align-items :center; */
     gap:1em 0;
 }
 div.blog_gauche label{
     font-size:x-large;
     color:gray;
 }
 div.blog_gauche a{
     color: rgb(132, 181, 39);
     font-size:large;  
     text-decoration :none;
     transition:all 1s;
 }
 div.blog_gauche a:hover{
     color:green;
     transform:scale(1.03);
     transition: all 1s;
 }
 div.blog_centre{
	 display :flex;
	 flex-direction :column;
	 align-items :center;
     float : bottom;
 }
 div.blog_centre p{
    font-size:large;
    color :gray;
    font-weight:bold;
}
 img#icone{
  width:200px;
  height: 150px;
  cursor : pointer;
 }
img.aplli_google{
	cursor : pointer;
	border-top :2px solid #DB4437;
	border-right :2px solid #4285f4;
	border-bottom :2px solid #0F9D58;
	border-left :2px solid #F4B400;
	padding:0.5em;
	transition: all 1s;
}
img.aplli_rs{
	border :2px solid #4285f4;
    padding:0.5em;
    transition: all 1s;
}

img.aplli_google:hover, img.aplli_rs:hover{
    transform:scale(1.03);
	transition: all 1s;
}
img.google{
	cursor : pointer;
	border-left :2px solid #4285f4;
	border-right :2px solid  #F4B400;
}
</style>
<body>
    <section class="main_body">
        <div class="header">
            <div class="logo">
                <img src="http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO-1.png" alt="logo USSEIN">
            </div>
            <div class="menu_bar">
                <a href="http://localhost/candidature/connexion/">Se Connecter</a>
                <a href="http://localhost/candidature/inscription/">S'inscrire</a>
            </div>
        </div>
        <div class="container">
            <div class="img_banner">
                <img src="http://localhost/candidature/wp-content/uploads/2021/09/banner_cand.png" alt="bannière recteur" class="banner_recteur">
            </div>
            <div class="titre_text">
                <h1>Mot du Recteur</h1>
                <p class="p"> 
                    <strong>Chers visiteurs,</strong><br>
                    <strong>Chers partenaires,</strong><br>
                    <strong>Chers membres de l’espace Universitaire,</strong><br><br>

                    L’Université du Sine Saloum El-Hadj Ibrahima NIASS (USSEIN) est une université à vocation agricole créée par son Excellence, Monsieur Macky Sall, Président de la République, par Décret n°2013-173 du 25 janvier 2013. Elle forme des étudiants(es) à l’agriculture et aux métiers connexes pour la sécurité alimentaire, le développement durable et la prospérité.
                    <br>
                    La mission de l’USSEIN est de former des ressources humaines de qualité, entreprenantes et capables d’accompagner le développement agricole pour relever le défi du développement économique et social du pays et de la sous région africaine.
                    <br><br>
                    L’USSEIN s’engage également dans une démarche de citoyenneté pour rendre service à la communauté et participer à la diffusion des savoirs. L’USSEIN entend aussi s’investir dans la réflexion et la recherche sur les grands enjeux actuels et futurs de l’agriculture.
                    <br><br>
                    L’USSEIN dispose d’un personnel d’enseignement et de recherche sélectionné à travers le Sénégal, l’Afrique, l’Amérique du nord, l’Asie et l’Europe. Ce personnel comprend aussi des cadres issus du monde socioprofessionnel.
                    <br><br>
                    L’USSEIN propose ici une offre de formation riche de 35 Licences professionnalisantes correspondant aux besoins du secteur économique et dans les secteurs très porteurs. L’USSEIN compte ainsi participer pleinement à l’atteinte des objectifs du Plan Sénégal Emergent et de l’Agenda 2063 de l’Afrique dans le secteur de l’agriculture.
                    <br><br>
                    Ces formations innovantes se dérouleront en 6 semestres et sont bâties sur des connaissances fondamentales (scientifiques et techniques) et sur des pratiques professionnelles.
                    <br><br>
                    Ces licences sont reparties dans les 04 Unités de Formation et de Recherche (UFR) / 12 Départements qui constituent l’ossature de l’USSEIN.
                    <br><br>
                    Grâce à une démarche novatrice, l’USSEIN entend ainsi répondre à l’adéquation formation-emploi et à la demande de l’employabilité des jeunes diplômés, tout en développant leur esprit d’entreprise.
                    <br><br>
                    La licence ouvrira aux jeunes diplômés les portes pour l’obtention d’un emploi, la voie pour la création d’entreprises ou la poursuite vers des filières de masters ou ingénieurs.
                    <br><br><br>
                    <strong class="nom">Professeur Ndèye Coumba TOURE</strong><br>
                    Recteur de l’Université du Sine Saloum El-Hâdj Ibrahima NIASS
                </p>
            </div>
            <div class="titre_text2">
                <div class="titre_text">
                    <h1>Vision</h1>
                    <p class="p">
                    L’Université du Sine Saloum El Hadj Ibrahima NIASS se veut être une université de 4ème génération. Elle va s’inspirer de l’expérience des universités émergentes mais elle devra surtout prendre en compte les leçons apprises de 3 générations d’universités au Sénégal : Dakar (1ère génération), Saint Louis (2ème génération) et Thiès/Ziguinchor/Bambey (3ème génération).
                    L’ambition est de faire de l’USSEIN une université moderne de classe internationale qui sera attractive aussi bien pour les étudiants du Sénégal et de la sous région que pour les PER et PATS.
                    <br><br>
Première université à polariser plusieurs régions administratives, l’USSEIN jouera à fond la diversification des filières et des sites avec des unités de formation et recherche (UFR) et écoles qui seront installées dans les quatre régions, à Kaolack, Fatick, Kaffrine et Diourbel. Ancrée dans ses terroirs dont elle va tirer le meilleur profit, elle va s’employer à rendre des services aux communautés.
<br><br><br>
Grace au partenariat qui sera tissé avec l’ITA et l’ISRA, entre autres, de la valeur sera ajoutée au projet de l’USSEIN qui pourra ainsi mieux réussir sa mission en favorisant le transfert de technologies accumulées par ces institutions partenaires au sein de la communauté. Ainsi, l’USSEIN devra contribuer à la modernisation de l’agriculture familiale tout en s’appuyant sur les savoirs endogènes.
<br><br><br>
Comme toute université, l’USSEIN va dispenser des savoirs ; mais elle mettra surtout l’accent sur les savoir-faire et les savoir-être dans une perspective professionnalisante pour assurer un développement durable.
<br><br><br><br>
Par ailleurs cette université devant répondre aux besoins du développement industriel des zones d’implantation, il est important de réserver suffisamment d’espaces pour les parcs scientifiques et incubateurs pour susciter l’auto emploi des futurs diplômés et l’initiative privée autour du potentiel agricole de la région.
<br><br><br>
Elle sera adossée sur une recherche de qualité, gage de sa crédibilité et de sa performance. De par la place qu’elle va occuper dans son espace, l’USSEIN, grâce à ses compétences, devra se positionner comme un pole de référence de la réflexion, de la prospective et de l’innovation dans le domaine de l’agriculture et du développement rural au Sénégal <br>
                    </p>
                </div>
                <div class="titre_text">
                    <h1>Mission</h1>
                    <p class="p">
                   <strong>Nos missions:</strong><br><br>

Former les ressources humaines aptes à répondre aux besoins du développement agricole et rural, et à élaborer les connaissances et les technologies adéquates pour un développement local, national et régional,
Donner à la jeunesse une formation compétitive, ouverte et susceptible de lui permettre de saisir les opportunités offertes par le développement local, national et régional,<br>
Former des compétences capables de gérer les innovations et de proposer des actions prospectives,<br>
Répondre à des besoins de formation diversifiée au profit d’apprenants de plus en plus hétérogènes,<br>
Promouvoir une démarche inclusive prenant en compte les apports traditionnels des communautés dans les stratégies d’adaptation et d’innovation,<br>
Bâtir un partenariat innovant entre agriculteurs, chercheurs et vulgarisateurs pour la mise au point de technologies appropriées et durables,<br>
Porter la qualité de la formation et de la recherche au niveau des standards internationaux,<br>
Développer dans les programmes et au sein des écoles doctorales une recherche au service de l’innovation et du développement agricole, profitable à la communauté,<br>
Contribuer à l’intégration régionale et à la consolidation de l’espace africain de l’enseignement supérieur,<br><br>
<strong>Les Principes:</strong><br><br>

Efficience et efficacité : Pédagogie de la réussite,<br>
Qualité : Auto-évaluation et d’amélioration continue de la qualité seront appliqués. L’USSEIN mettra au cœur de sa démarche, la satisfaction de l’étudiant,<br>
Flexibilité : Outre les connaissances académiques, l’USSEIN reconnaîtra et valorisera les acquis de l’expérience,<br>
Apprentissage des langues : Anglais, langues nationales, arabe, chinois,<br>
Motivation, équité et citoyenneté : l’USSEIN doit être un espace de rayonnement intellectuel fondé sur des valeurs de démocratie, de citoyenneté, d’équité et de patriotisme,<br>
Bonne gouvernance : la transparence et la reddition de comptes seront de rigueur. Elle mettra en œuvre une gouvernance vertueuse et efficiente qui exploitera à fond les énergies positives,<br>
Partenariat avec les collectivités locales,<br>
Création d’une Fondation pour l’USSEIN pour diversifier les sources de financement,
                    </p>
                </div>
            </div>
            <div class="titre_text">
                <h1>Présentation</h1>
                <p class="p">
                Le Gouvernement du Sénégal, conscient de l’enjeu que représente l’agriculture dans le développement économique et social de notre pays, a fait du développement de  ce secteur sa première priorité. De nombreuses mesures ont été annoncées pour la modernisation et le développement de ce secteur  parmi lesquelles la création d’une université à vocation agricole dénommée Université du Sine Saloum  El Hadj Ibrahima NIASS (USSEIN). <br><br>
                L’agriculture demeure encore un des secteurs les plus importants de l’activité économique sénégalaise mais elle est contre performante et n’arrive pas à nourrir la population. Le Sénégal importe l’essentiel de son alimentation et doit faire face à des crises alimentaires récurrentes, une insécurité alimentaire chronique et un réchauffement climatique aux conséquences néfastes. Le Sénégal doit oser opérer une rupture en matière d’agriculture pour affronter frontalement son défi majeur qui est de produire pour se nourrir d’abord. Pour cela, le Gouvernement du Sénégal a décidé d’investir massivement dans l’agriculture. Le Gouvernement du Sénégal a adopté un nouveau document de stratégie appelé Plan Sénégal Emergent (PSE)  qui cherche d’abord à infléchir d’ici à l’horizon 2018, les tendances lourdes identifiées par la rétrospective socio-économique. La transformation de l’agriculture servira de fer de lance à celle de la structure de l’économie. Ainsi, la transformation de la structure de l’économie se fera selon plusieurs leviers dont le premier est le développement de l’agriculture, de la pêche et de l’industrie agroalimentaire <br><br>
                Gagner la bataille de l’émergence passe nécessairement par un investissement massif dans le capital humain peu développé. Former dans les universités des ressources humaines de qualité dédiées au secteur de l’agriculture, tel est le pari que s’est fixé le Gouvernement du Sénégal pour relever le défi de l’insécurité alimentaire chronique, de la pauvreté, du développement rural et du sous emploi de la jeunesse. Aujourd’hui, il ne fait aucun doute que le développement économique d’un pays repose sur son savoir, son savoir-faire et sa compétitivité tributaires, pour une grande part, de ses capacités d’adaptation et d’innovations qui permettent le renouvellement rapide et profond du savoir de haut niveau. La saturation des capacités d’accueil, constatée dans le sous-secteur, particulièrement à l’UCAD, l’inadéquation formation-emploi, obligent à opérer une réorganisation et une diversification des offres de formation. Cette contrainte, qui prend les contours d’un défi à relever par l’Etat du Sénégal, obéit à un souci de préserver  la qualité, la pertinence et l’efficacité. <br><br>
                Le gouvernement a décidé de poursuivre la politique de décentralisation de l’enseignement supérieur sur la base  d’une carte universitaire cohérente et diversifiée en vue de faire du Sénégal un hub d’enseignement supérieur  en Afrique. La prise en charge des zones du Centre et de l’Est du pays dans la mise en œuvre de la carte universitaire, s’impose car l’accès des populations à l’enseignement supérieur, est non seulement un impératif de développement harmonieux et équilibré, mais également une question fondamentale d’équité. <br><br>
                La création de l’Université du Sine Saloum El Hadji Ibrahima NIASS  (Décret 2013-173 du 25 janvier 2013) répond à une nécessité socio-économique car elle permet au Gouvernement du Sénégal d’apporter une réponse appropriée aux besoins de développement de 03 régions nourricières du Centre par la valorisation de leurs ressources et de leurs atouts. Elle est également une volonté d’équilibrer la distribution spatiale des institutions universitaires et des effectifs. <br><br>
                Grand pourvoyeur de bacheliers au Sénégal, ce terroir ne dispose pas à ce jour d’un établissement d’enseignement supérieur. Grenier du Sénégal, le bassin arachidier pourra enfin disposer d’une université à vocation agricole. Par sa position géographique, Kaolack polarise les régions de Fatick, Kaffrine, Diourbel, Tamba et Kédougou. En plus d’animer la vie culturelle et scientifique, l’Université du Sine Saloum El-hâdj ibrahima NIASS ouvrira une large fenêtre sur le monde extérieur et aura un impact direct sur la vie économique et touristique de la région. 
                </p>
            </div>
            
        </div>
        <footer>
        <div class="footer">
        <div class="pied_de_page_general">

<div class="blog_gauche">
<label > A PROPOS DE L’USSEIN </label> 

    <a href="https://www.ussein.sn/mission/"> MISSION </a>
    <a href="https://www.ussein.sn/vision/"> VISION </a>
    <a href="https://www.ussein.sn/defis-et-opportunites/"> DÉFIS ET OPPORTUNITÉS </a>
</div>

<div class="blog_centre"> 
    <p>Plateforme de candidature a l'Universite Sine Saloum El-Hadji Ibrahima Niasse</p>
    <p>copyright USSEIN , DISI 2021</p>
    </div>

<div class="blog_droite">

    <div class="reseau_sociaux">

        <a href="https://www.google.com/intl/fr/gmail/about/" > <img class="aplli_google" src="https://img.icons8.com/color/48/000000/gmail-new.png"/> </a>
        <a href="https://twitter.com/?lang=fr" target="_blank"> <img class="aplli_rs" src="https://img.icons8.com/color/48/000000/twitter--v1.png"/> </a>
        <a href="https://fr-fr.facebook.com/" target="_blank"> <img class="aplli_rs" src="https://img.icons8.com/fluency/48/000000/facebook-circled.png"/> </a>
        <a href="https://www.google.fr/" target="_blank"> <img class="aplli_google google" src="https://img.icons8.com/color/48/000000/google-logo.png"/>  </a>
                             
    </div>

</div>


</div>
        </div>
</footer>
    </section>
</body>
</html>