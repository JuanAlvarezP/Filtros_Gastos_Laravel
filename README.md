# Filtro de fechas para Gastos con Laravel 🧾💼

Este es un sistema de gestión de gastos desarrollado con **Laravel**. Permite gestionar empleados, departamentos y gastos, con la funcionalidad de filtrar los gastos por rango de fechas y calcular el total en dicho rango.

## 🛠️ Características

- CRUD completo para **empleados**, **departamentos** y **gastos**.
- Filtrado de gastos por rango de fechas.
- Relación entre tablas:
  - **Empleados** pertenecen a un **departamento**.
  - **Gastos** están relacionados con **empleados** y **departamentos**.
- Base de datos MySQL compatible con **AWS RDS**.
- Despliegue en **AWS Elastic Beanstalk**.

---

## 🚀 Requisitos Previos

1. **Servidor Web** compatible con PHP (por ejemplo, Apache o Nginx).
2. **PHP 8.x** o superior.
3. **Composer** instalado.
4. **Base de Datos MySQL**.

---

## 🔧 Instalación Local

Sigue estos pasos para clonar e instalar el proyecto en tu máquina local.

### 1. Clonar el Repositorio
```bash
git clone https://github.com/tu-usuario/gestion-gastos.git
cd gestion-gastos

```

### 2. Instalar dependencias
```bash
composer install
```

### 3. Configurar el archivo de entorno .env
Copia el archivo de ejemplo y configura tus credenciales:
```bash
cp .env.example .env
```

### 4. Migrar y Poblar la Base de Datos
Ejecuta las migraciones y seeders:

```bash
php artisan migrate --seed
```
### 6. Ejecutar el Servidor
Inicia el servidor local:
```
php artisan serve
```
Accede al sistema en: http://localhost:8000 👾👾

