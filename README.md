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


## **LARAVEL HELPER FILE**

Create a php file in app folder. Ex- helper.php

**Auto load helper file**

Edit composer.json file and add below code in autoload section

    "files": [
        "app/helper.php" // path of helper file
    ]

**Run composer dump-autoload**

    composer dump-autoload

## **LARAVEL SESSION**

### Retrieve Session Data

    $value = session('key');
    $value = $request->session()->get('key');

### Retrieve All Session Data

    $data = $request->session()->all();
    $data = session()->all();

### If Session Data Exists

    $value = $ewquet->session()->has('key');
    $value = session()->key('key');

### Store Session Data
    
    $request->session()->put('key', 'value');
    session()->put('key', 'value');

### Flash Data To The Session

    $request->session()->flash('status', 'Task was successful!');
    session()->flash('status', 'Task was successful!');

### Delete Session Data

    $request->session()->forget('key');
    session()->forget('key');

### Delete All Session Data
    
        $request->session()->flush();
        session()->flush();


## **LARAVEL CUSTOM VALIDATION**

### Create a custom validation rule

    php artisan make:rule <rule_name>