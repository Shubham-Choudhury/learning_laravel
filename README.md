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
