# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Rajouter la fonction qui suit dans le fichier: /vendor/cakephp/cakephp/src/Utility/Xml.php

        public static function xml_attribute($object, $attribute)
        {
            if(isset($object[$attribute]))
                return (string) $object[$attribute];
        }