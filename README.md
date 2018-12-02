# Projet Web ! 

**Attention** ! Bien mettre à jours le fichier de config présent dans application/config pour assurer un bon fonctionnement.

Le .htaccess doit rediriger tout sur `/` afin que le routeur puisse être utile

# Démo !
**Démo présente à ce lien !**
https://youtu.be/M81PLKeDMI0

Must see si vous avez des problèmes d'affichage :-)

# Architecture du projet 

`/application` --> tout ce qui est en lien avec le mvc

`/application/configs` --> l'endroit ou ce site le fichier de config. A modifier en fonction de l'installation

`/public/userImages/` --> les images avatars des utilisateurs : le nom de l'image est le même que l'id de l'utilisateur

`/public/index.php` --> le point d'entré. Là ou le routeur redirige tout en fonction de l'url entrée. **Grace au .htaccess, toute les requètes passent par ici**.

