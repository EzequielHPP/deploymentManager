cd /var/www/html/lecnovo/lec-elearning
git pull
chown ehduser.apache /var/www/html/lecnovo/lec-elearning/smartcoach -R
chmod 0775 /var/www/html/lecnovo/lec-elearning/smartcoach -R
cd /var/www/html/lecnovo/lec-elearning/smartcoach/
composer dump-autoload -o
gulp just-once