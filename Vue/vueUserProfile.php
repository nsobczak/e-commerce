<?php $titre = "User profile : " . $user['titre']; ?>

<section id=logoProfile>
    <img class="display" width=10% src="Images/profil-utilisateur.jpg" alt="portrait" title="UserProfile"/>
</section>


<article>
    <header>
        <h1 class="titreUserProfile"><?= $user['nom'] ?><?= $user['prenom'] ?></h1>
    </header>
    <p>
        <?= $user['id'] ?>
        <?= $user['niveau_accreditation'] ?>
        <?= $user['mail'] ?>
        <?= $user['mot_de_passe'] ?>
    </p>
</article>