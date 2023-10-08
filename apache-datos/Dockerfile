
# Utiliza una imagen base con Apache y PHP
FROM php:apache-bullseye

RUN  docker-php-ext-install mysqli

# Copia tu archivo PHP al directorio de documentos de Apache
COPY index.php /var/www/html/



# Exponer el puerto 80 para Apache
EXPOSE 80

# Comando para iniciar Apache cuando se inicia el contenedor
CMD ["apache2-foreground"]
