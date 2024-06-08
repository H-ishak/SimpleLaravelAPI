# SimpleLaravelAPI
Simple Laravel API with Job Queue, Database, and Event Handling
# Instructions

install the deps:
composer install

launch sail 
./vendor/bin/sail up -d

create database :
./vendor/bin/sail artisan migrate
----------------------------------
# Testing
create 
.env.testing
migrate the db
./vendor/bin/sail artisan migrate --env=testing
tests
./vendor/bin/sail artisan test


 



