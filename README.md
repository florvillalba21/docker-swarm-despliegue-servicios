# Desplegar dos servicios con Docker Swarm- volumenes

### Crear las imagenes en base al dockerfile correspondiente a cada carpeta
docker build -t dockerfile-php -f Dockerfile .
docker build -t dockerfile-node -f Dockerfile .
docker build -t dockerfile-mysql -f Dockerfile .

### Iniciar swarm
docker swarm init

### Se despliega una pila de servicios en base al docker-compose
docker stack deploy -c docker-compose.yml mis-servicios


