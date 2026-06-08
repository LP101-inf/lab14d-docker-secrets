# Laboratorium 14D – Docker Compose z sekretami dla stacka LEMP

## Opis
Rozwiązanie zadania rozszerzonego – wykorzystanie Docker Secrets do przechowywania haseł MySQL i phpMyAdmin.

## Struktura
├── docker-compose.yaml
├── Dockerfile
├── .gitignore
├── html/
│ └── index.php
├── nginx/
│ └── conf.d/
│ └── default.conf
└── secrets/
├── db_root_password.txt
└── db_password.txt


## Uruchomienie
```bash
docker compose up -d --build