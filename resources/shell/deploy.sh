REMOTEFOLDER="/home/websiteindevco/public_html/lecnovo"
LOCALFOLDER="/var/www/html/lecnovo/lec-elearning/smartcoach"

# Get data from GIT
sh pull.sh

# Cd into Folder
cd $LOCALFOLDER/

# Compress
tar -zcvf deploy.tar.gz *

# Copy to Website-in-dev
scp deploy.tar.gz root@85.92.81.130:$REMOTEFOLDER/

# SSH Extract
ssh root@85.92.81.130 "tar -zxvf $REMOTEFOLDER/deploy.tar.gz -C $REMOTEFOLDER/"
ssh root@85.92.81.130 "chown websiteindevco.websiteindevco $REMOTEFOLDER/ -R"
ssh root@85.92.81.130 "rm -Rf $REMOTEFOLDER/deploy.tar.gz"

rm -Rf deploy.tar.gz