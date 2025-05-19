# Proyecto Docker PHP + MySQL

Este proyecto forma parte de la Práctica Formativa Obligatoria N°2 y tiene como objetivo levantar un entorno con Apache, PHP y MySQL utilizando Docker y Docker Compose.

## 📦 Requisitos

- Docker
- Docker Compose

## 🚀 Instrucciones para levantar el entorno

1. **Clonar el repositorio:**

```bash
git clone https://github.com/CynthiDev/Web-Mysql-Dockerizado.git
cd mi-proyecto
```

2. **Estructura esperada del proyecto:**
```bash
mi-proyecto/
├── docker-compose.yml
├── init.sql
├── php/
│   ├── Dockerfile
│   └── index.php
```

3. **Ejecutar Docker Compose:**

Abrir una terminal en la carpeta del proyecto
```bash
docker-compose up --build -d
```

Esto hará lo siguiente:

- Crear una red Docker personalizada (red_pfo_dos_part_dos)

- Levantar un contenedor mysql-server con la base de datos devops_pfo_dos_part_dos

- Crear automáticamente la tabla e insertar datos desde init.sql

- Levantar un contenedor php-container con Apache y PHP 8.2



4. **Ver la aplicación en el navegador:**

```bash
👉 http://localhost:8080
```
Deberías ver los registros de la tabla persona.

## Detener los contenedores:
```bash
docker-compose down
```
Esto detiene y elimina los contenedores, red y volúmenes creados.


 ## 📂 Archivos importantes
`init.sql`: Script SQL para crear la base y poblarla con datos iniciales.

`Dockerfile`: Define el entorno PHP con Apache y la extensión mysqli.

`index.php`: Front-end simple que conecta a MySQL y muestra los registros.



 ##  🐋 Docker Hub
Podés crear una imagen con:
```bash
docker-compose build
docker tag php-container tu_usuario_dockerhub/php-pfo:latest
docker push tu_usuario_dockerhub/php-pfo:latest
```

## Participantes

- Vizzotti, Guido  
- Choque Galindo, Cynthia Estefania
---
