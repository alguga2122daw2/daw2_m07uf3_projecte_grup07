FROM debian:11-slim
EXPOSE 80
EXPOSE 443
RUN echo "Instalando paquetes necesarios" \
    && apt-get update -y \
    && apt-get upgrade -y \
    && apt-get install -y net-tools \
    && apt-get install -y openssh-server openssh-sftp-server \
    && apt-get install -y openssl \
    && apt-get install -y apache2 apache2-doc \
    && apt-get install -y mariadb-server mariadb-client \
    && apt-get install -y php php7.3 libapache2-mod-php libapache2-mod-php7.3 php-mysql php7.3-mysql \
    && apt-get install -y php-bcmath php-json php-mbstring php-tokenizer php-xml php-zip \
    && apt-get install -y composer \
    && echo "Configurano paquetes" \
    && a2enmod rewrite \
    && service apache2 restart \
    && apachectl -t -D DUMP_MODULES | grep rewrite