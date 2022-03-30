Vagrant.configure("2") do |config|
  config.vm.box = "generic/debian10"
  config.vm.hostname = "proyecto-m07uf3-laravel"
  config.vm.provider "virtualbox" do |v|
    # v.gui = true
    v.name = "proyecto-m07uf3-laravel"
    v.memory = 2048
    v.cpus = 1
    v.customize ['modifyvm', :id, '--clipboard', 'bidirectional']
  end

  config.vm.synced_folder "src/", "/var/www/html",
    owner: "www-data", group: "vagrant"
  config.vm.synced_folder "conf/", "/etc/apache2/sites-available"
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "forwarded_port", guest: 443, host: 8443
  config.vm.network "forwarded_port", guest: 22, host: 8022
  config.vm.network "forwarded_port", guest: 3306, host: 8306
  config.vm.network "forwarded_port", guest: 8000, host: 8000
  
  config.vm.provision "shell", inline: <<-SHELL
    # System
    apt-get update -y
    apt-get upgrade -y
    apt-get install -y net-tools aptitude
    apt-get install -y openssh-server openssh-sftp-server
    apt-get install -y openssl
    apt-get install -y apache2 apache2-doc
    apt-get install -y mariadb-server mariadb-client
    apt-get install -y php php7.3 libapache2-mod-php libapache2-mod-php7.3 php-mysql php7.3-mysql
    apt-get install -y php-bcmath php-json php-mbstring php-tokenizer php-xml php-zip
    apt-get install -y composer
    # Apache
    a2enmod rewrite
    a2enmod ssl
    a2enmod headers
    systemctl restart apache2.service
    # Laravel
    su - vagrant -c 'composer global require laravel/installer'
    su - vagrant -c 'echo "export PATH=$PATH:~/.composer/vendor/bin" >> ~/.bashrc'
    # User
    ln -s /var/www/html /home/vagrant/apache
    # TODO: Configurar apache para que muestre el proyecto de Laravel
    a2ensite default-ssl.conf
    systemctl reload apache2
    systemctl enable --now apache2
  SHELL

end
