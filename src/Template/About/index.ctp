<!doctype html>
<html>
<body>

<h1>À propos</h1>
</br>
<h3>Rayane Taleb</h3>
</br>
<p>420-5b7 MO Applications internet</br>
Automne 2019, Collège Montmorency</p>
</br>
<p>Lien vers mon dépôt GitHub contenant la dernière version de mon application : <a href="https://github.com/rtar019/TP_V001">Lien GitHub</a></p>
</br>
<p>Lien vers le modèle que j'ai utilisé pour construire ma base de données : <a href="http://www.databaseanswers.org/data_models/hotel_reporting_services/index.htm">Lien modèle de base de données</a></p>
</br>
<p>
    <h4>Les étapes à suivre pour utiliser le site web</h4>
    <ul>
        <li>En arrivant sur la page "localhost/TP_V001/", vous pourrez tester l'ajout, la modification et le vue d'un type de chambre avec Ajax</li>
        <li>En appuyant sur "Section admin en PHP" qui se situe sur la barre du haut à droite, vous pourrez accéder au routage admin et toutes ses fonctionnalitées *1*</li>
        <li>En activant le boostrap, toutes page ne l'utilisant pas n'ont plus de theme. Pour le changer, désactiver bootsrap en faisant l'inverse de la dernière etape</li>
        <li>Vous pouvez aller sur la page "http://localhost/TP1_V001/bookings" et cliquer sur "pdf" dans l'onglet action de n'importe quelle réservation pour générer un fichier pdf avec les informations de la réservation</li>
        <li>Vous pouvez aller tester l'autocomplete sur la page "http://localhost/TP_V001/rooms/add" ou en cliquant sur l'onglet "Autocomplete" dans la barre du haut</li>
        <li>Après vous être créé un compte utilisateur sur la page "http://localhost/TP_V001/users/add", vous pouvez aller tester les listes dynamiques liées sur la page "http://localhost/TP1_V001/bookings/add" ou en cliquant sur l'onglet "Listes Dynamiques" dans la barre du haut</li>
    </ul>
</p>
<p>*1*le bootsrap est fonctionnel sur les page typechambres et admin/typechambres mais il faut l'activée en mettant en commentaire "parent::initialize();" et en décommentant "$this->initializeUI();" dans le fichier appview**</p>
</br>
<p>
    <h4>Directives de l'intégration AngularJS (TP3)</h4>
    <ul>
        <li>Allez sur "http://localhost/TP_V001/bookings/" pour voir les bookings.</li>
        <li>Pour atteindre les listes liées, cliquez sur le bouton "New Booking" dans le menu à gauche ou sur "Listes dynaiques" dans la barre du haut.</li>
        <li>En cliquant sur la liste déroulante pour les pays et en changeant le pays, la liste de villes à sélectionner devrait également changer.*2*</li>
        <li>Le Capchat permet de mettre une mesure de sécurité de plus pour la page d'ajout de bookings.</li>
        <li>Le modèle CRUD est manquant, mais il serait normalement trouvé dans la page d'index des bookings.</li>
        <li>L'authentification avec le Jeton JTW de AngularJS permet également une sécurité plus profonde sur le site.</li>
    </ul>
</p>
<p>*2* Les listes liées ne fonctionnent malheureusement pas depuis l'ajout de Captcha.</p>
</br>
<p>Vous ne pourrez malheureusement pas ajouter de réservations, de chambre ou d'invité</p>
</br>
<img src="webroot/img/capture.png" />
</body>
</html>