FROM php:8.3.4-apache

WORKDIR /var/www/html
    #Cette commande définit le répertoire de travail à l'intérieur du conteneur Docker où les commandes suivantes seront exécutées. 
    #Dans ce cas, cela déplace le répertoire de travail vers /var/www/html, où les fichiers de l'application ont été copiés.

RUN apt-get update && apt-get upgrade -y \
    #Cette commande permet realise une maj du gestionnaire de paquets 'apt-get' et de tous les paquets installés sur l'image
    && a2enmod rewrite \ 
    #Cette commande permet d'activer le module "rewrite" d'apache afin traiter les régles de réécriture d'URL dans les fichiers de configuration
    && docker-php-ext-install mysqli pdo pdo_mysql \
    #Cette commande permet d'installer des extensions PHP, ici mysql et pdo, et pdo_mysql
    && docker-php-ext-enable mysqli pdo pdo_mysql \
    #Cette commande active les extensions PHP installées précédement
    && sed -i 's!/var/www/html!/var/www/html/tltleave/public!g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's!/var/www/html!/var/www/html/tltleave/public!g' /etc/apache2/apache2.conf 
    # Configuration d'Apache pour utiliser /var/www/html/public comme DocumentRoot

COPY ./tltleave/App /var/www/html/tltleave/App
COPY ./tltleave/public /var/www/html/tltleave/public
    #Cette commande copie les fichiers de l'application situés dans le répertoire ./src du système de fichiers de notre poste de travail 
    #dans le répertoire /var/www/html du conteneur Docker. Cela permet de transférer les fichiers de l'application dans l'image Docker.

EXPOSE 80
    #Cette ligne expose le port 80 du conteneur Docker, qui est le port par défaut utilisé par le serveur web Apache. 
    #Cela permet à d'autres conteneurs ou au système hôte d'accéder au serveur web exécuté à l'intérieur du conteneur Docker.