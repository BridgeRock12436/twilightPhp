TABLE_NAME=$1
CURR_DIR=`pwd`
PHP_DIR=../twilight
cd ${PHP_DIR}
php -f dumpOneTable.php ${TABLE_NAME}
cd ${CURR_DIR}
