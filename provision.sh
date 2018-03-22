#!/usr/bin/env bash

# Mise à jour des dépots
apt-get -qq update

# Configuration de la timezone
echo "Europe/Paris" > /etc/timezone
apt-get install -y tzdata
dpkg-reconfigure -f noninteractive tzdata

# Installation de Apache et PHP
apt-get -y install libapache2-mod-php5 php5-cli
a2enmod rewrite
service apache2 restart

# Installation de Gulp
curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -
sudo apt-get install -y nodejs
cd /vagrant/src/wp-content/themes/35h && npm install gulp gulp-sass gulp-autoprefixer gulp-cssnano gulp-uglify gulp-concat gulp-plumber gulp-rename

# Installation de MySQL
echo "mysql-server mysql-server/root_password password root" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password root" | debconf-set-selections
apt-get install -y mysql-server

# Installation de PhpMyAdmin
echo "phpmyadmin phpmyadmin/dbconfig-install boolean true" | debconf-set-selections
echo "phpmyadmin phpmyadmin/app-password-confirm password root" | debconf-set-selections
echo "phpmyadmin phpmyadmin/mysql/admin-pass password root" | debconf-set-selections
echo "phpmyadmin phpmyadmin/mysql/app-pass password root" | debconf-set-selections
echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | debconf-set-selections
apt-get install -y phpmyadmin

# Création de la base de données
mysql --defaults-file=/etc/mysql/debian.cnf -e "drop database if exists 35h_wp"
mysql --defaults-file=/etc/mysql/debian.cnf -e "create database 35h_wp default charset utf8 collate utf8_general_ci"
mysql --defaults-file=/etc/mysql/debian.cnf 35h_wp < /vagrant/data/35h_wp.sql

# Mise à disposition du projet dans Apache
ln -sf /vagrant/src/* /var/www/html/
rm -f /var/www/html/index.html
