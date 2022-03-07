# Creating file with write access
touch userData.csv
chmod 777 userData.csv
# Adding columns into file
echo "userName;userAddress" > userData.csv
# Running server (localy)
php -S localhost:8080