<!doctype html>
<html>
<body>

<h1>À propos</h1>
</br>
<h3>Rayane Taleb</h3>
</br>
<p>420-5b7 MO Applications internet</br>
Automne 2018, Collège Montmorency</p>
</br>
<p>Lien vers mon dépôt GitHub contenant la dernière version de mon application : <a href="https://github.com/rtar019/TP_V001">Lien GitHub</a></p>
</br>
<p>Lien vers le modèle que j'ai utilisé pour construire ma base de données : <a href="http://www.databaseanswers.org/data_models/hotel_reporting_services/index.htm">Lien modèle de base de données</a></p>
</br>
<p>
    <h3>Les étapes à suivre pour utiliser le site web</h3>
    <ul>
        <li>En arrivant sur la page "localhost/TP_V001/", vous pourrez tester l'ajout, la modification et le vue d'un type de chambre avec Ajax</li>
        <li>En appuyant sur "Section admin en PHP" qui se situe sur la barre du haut à droite, vous pourrez accéder au routage admin et toutes ses fonctionnalitées **</li>
        <li>en activant le boostrap, toutes page ne l'utilisant pas n'ont plus de theme. Pour le changer, désactiver bootsrap en faisant l'inverse de la dernière etape</li>
        <li>l'autocomplete est disponible sur "http://localhost/TP1_V001/rooms/add" sur le champ Roomtype</li>
        <li>les listes liées sont disponnibles sur "http://localhost/TP1_V001/cruises/add"</li>
        <li>la fonctionnalité pdf est disponnible sur "http://localhost/TP1_V001/cruises"</li>
    </ul>
</p>
<p>**le bootsrap est fonctionnel sur les page roomtype et admin/roomtype mais il faut l'activée en mettant en commentaire "parent::initialize();" et en décommentant "$this->initializeUI();" dans le fichier appview**</p>
</br>
<p>Vous ne pourrez malheureusement pas encore ajouter une chambre et un invité</p>
</br>
<img src="webroot/img/capture.png" />
</body>
</html>