GREEN='\e[32m'
RED='\e[31m'
NC='\e[0m'

echo -e "${GREEN}Starting to get the latest wordpress${NC} "
wget https://wordpress.org/latest.zip

echo -e "${GREEN}Unziping${NC} "
unzip latest.zip

echo -e "${GREEN}Removing default config${NC} "
rm -f $(pwd)/wordpress/wp-config-sample.php

echo -e "${GREEN}Copying .htaccess${NC} "
cp $(pwd)/public_html/.htaccess $(pwd)/wordpress/

[[ -f $(pwd)/wordpress/.htaccess ]] && echo -e "${GREEN}|_ File copyied success fully${NC}" || echo -e "${RED}|_ File not copyied${NC}"

echo -e "${GREEN}Copying .wp-config${NC} "
cp $(pwd)/public_html/wp-config.php $(pwd)/wordpress/

[[ -f $(pwd)/wordpress/wp-config.php ]] && echo -e "${GREEN}|_ File copyied success fully${NC}" || echo -e "${RED}|_ File not copyied${NC}"

echo -e "${GREEN}Changing wp-content for backup${NC} "
mv $(pwd)/wordpress/wp-content $(pwd)/wordpress/wp-content_new

echo -e "${GREEN}Copying old wp-content${NC} "
cp $(pwd)/public_html/wp-content/ $(pwd)/wordpress/ -R

echo -e "${GREEN}Copying New files${NC} "
yes | cp -rf $(pwd)/wordpress/wp-content_new/* $(pwd)/wordpress/wp-content/

echo -e "${GREEN}Changing old public_html with new wordpress folder${NC} "
mv $(pwd)/public_html/ $(pwd)/public_html_old
mv $(pwd)/wordpress $(pwd)/public_html

echo -e "${GREEN} - Finished - ${NC} "