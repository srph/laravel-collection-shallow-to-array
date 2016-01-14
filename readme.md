# laravel-collection-shallow-to-array
[![Build Status](https://img.shields.io/travis/srph/laravel-collection-shallow-to-array.svg?style=flat-square)](https://travis-ci.org/srph/laravel-collection-shallow-to-array?branch=master) [![Latest Stable Version](https://poser.pugx.org/srph/laravel-collection-shallow-to-array/v/stable)](https://packagist.org/packages/srph/laravel-collection-shallow-to-array) [![Total Downloads](https://poser.pugx.org/srph/laravel-collection-shallow-to-array/downloads)](https://packagist.org/packages/srph/laravel-collection-shallow-to-array) [![Latest Unstable Version](https://poser.pugx.org/srph/laravel-collection-shallow-to-array/v/unstable)](https://packagist.org/packages/srph/laravel-collection-shallow-to-array) [![License](https://poser.pugx.org/srph/laravel-collection-shallow-to-array/license)](https://packagist.org/packages/srph/laravel-collection-shallow-to-array)

Apply a shallow `toArray` to a `Collection`.

## Deprecation Notice
Use [`Collection#all`](https://laravel.com/api/5.2/Illuminate/Support/Collection.html#method_all) instead. This utility doesn't make any sense; created out of author's laziness to read the API Documentation.

## Huh?
Calling `toArray` of a `Collection` with Eloquent models (e.g., `User::all()`) also applies `toArray` to each item in the collection. Here's a comparison with `Collection toArray`:

```diff
- User::all()->toArray(); // [[], [] []];
+ collection_shallow_to_array(User::all()); // [User, User, User]
```

## Installing
```bash
composer require srph/laravel-collection-shallow-to-array
```

## Usage
```php
$users = Users::all();
$array = collection_shallow_to_array($users);
```
