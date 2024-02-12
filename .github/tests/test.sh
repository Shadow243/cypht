#!/bin/bash

php -f .github/tests/setup.php


# Debugging
echo "Attempting to load Symfony Dotenv...\n";

# Attempt to load Symfony Dotenv
php -r 'new Symfony\Component\Dotenv\Dotenv();'

# Debugging
echo "Symfony Dotenv loaded successfully.\n";

php -r 'Hm_Environment::getInstance()->load();'

phpunit_tests() {
    phpunit --configuration tests/phpunit/phpunit.xml --testdox
}

selenium_tests() {
    cd tests/selenium/ && sh ./runall.sh && cd ../../
}

# Main
echo "database: ${DB}"
echo "php-version: ${PHP_V}"
echo "test-arg: ${TEST_ARG}"

ARG="${TEST_ARG}"
case "$ARG" in
    phpunit)
        phpunit_tests
    ;;
    ui)
        selenium_tests
    ;;
    *)
        phpunit_tests
    ;;
esac
