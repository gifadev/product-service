# Laravel API with Docker

Proyek ini adalah sebuah API sederhana yang dibangun menggunakan Laravel dan dibungkus dengan Docker. API ini menyediakan operasi CRUD (Create, Read, Update, Delete) untuk produk.

## Fitur

- **GET**: Mendapatkan semua produk.
- **GET**: Mendapatkan produk berdasarkan ID.
- **POST**: Menambahkan produk baru.
- **PUT**: Mengupdate produk berdasarkan ID.
- **DELETE**: Menghapus produk berdasarkan ID.

## Endpoint API

- **GET** `/api/products` - Mendapatkan semua produk.
- **GET** `/api/products/{id}` - Mendapatkan produk berdasarkan ID.
- **POST** `/api/products` - Menambahkan produk baru.
- **PUT** `/api/products/{id}` - Mengupdate produk berdasarkan ID.
- **DELETE** `/api/products/{id}` - Menghapus produk berdasarkan ID.

## Persyaratan Sistem

- Docker
- Docker Compose

## Instalasi

1. **Clone Repositori**

   ```bash
   git clone https://github.com/username/nama-repo.git
   cd nama-repo
2. **Install**
    ```bash
    docker-compose up --build -d

