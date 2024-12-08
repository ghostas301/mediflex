# Utiliser l'image PHP officielle avec Apache
FROM php:8.0-apache

# Installer les extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier les fichiers de votre application dans le conteneur
COPY . /var/www/html/

# Exposer le port pour le serveur web
EXPOSE 80
