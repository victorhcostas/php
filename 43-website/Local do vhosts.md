#Localizacao do arquivo de implementacao de Virtual Hosts do Apache: {

    xamppfiles/etc/extra/httpd-vhosts.conf
}

#PATH do LocalHost{

    /Applications/xampp/xamppfiles/htdocs/43-website
}

#PATH do arquivo "hosts" do sistema {

    sudo nano /private/etc/hosts

    adicionar "127.0.0.1 local.cursophp7.com.br" ao texto
}

#Mostrar arquivos ocultos no Mac: {

    shift + command + .
}

#Arquivo de configuracao do xampp {    

    /xampp/xamppfiles/apache2/conf/httpd.conf

    Options Indexes FollowSymLinks
    AllowOverride All

#vhosts {

    <VirtualHost *:80>
    ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "/Applications/website"
    ServerName local.cursophp7.com.br
    ErrorLog "logs/dummy-host.example.com-error_log"
    CustomLog "logs/dummy-host.example.com-access_log" common
    <Directory "/Applications/website">
	Order allow, deny
	Allow from all
	Require all granted
    </Directory>
    </VirtualHost>
}