# **Learning Laravel**

### Install Laravel Via Composer

    composer global require laravel/installer

### Create a New Laravel Project

    laravel new <project_name>

### Start the Development Server

    php artisan serve

## **LARAVEL CONTROLLER**

### Create a Controller

    php artisan make:controller <controller_name>

### Create a Resource Controller

    php artisan make:controller <controller_name> --resource

### Create single action controller

    php artisan make:controller <controller_name> --invokable

## **LARAVEL COMPONENTS**

### Create a Component

    php artisan make:component <component_name>

#### **Component File Structure**

    app
    └── View
        └── Components
            └── <component_name>.php

    resources
    └── views
        └── components
            └── <component_name>.blade.php

## **CONFIGURE CACHE**

### Cache Configuration

    php artisan config:cache

## **LARAVEL MIGRATION**

### Run Migration

    php artisan migrate

### Rollback Migration
    
        php artisan migrate:rollback

### Create Table

    php artisan make:migration create_<table_name>_table

### Refresh Migration

    php artisan migrate:refresh

### Add Column

    php artisan make:migration add_<column_name>_to_<table_name>_table

## **LARAVEL MODEL**

### Create Model

    php artisan make:model <model_name>

### Create Model with Migration
    
        php artisan make:model <model_name> -m