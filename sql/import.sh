#/bin/bash
#user="website"
#pass="website"
#database="website"
if [ -z "$1" ] ||  [ -z "$2" ] || [ -z "$3" ] ;
then
    echo "You need to type import.sh [user] [password] [database]"
else
    user=$1
    pass=$2
    database=$3
    
    sqls=`ls *.sql`
    for i in $sqls
    do
        echo "mysql -u $user --password=**** $database < $i"
        mysql -u $user --password=$pass $database < $i
    done
fi

