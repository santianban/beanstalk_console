TAG=`cat ./src/version.txt`
echo $TAG ;
/data/x/tools/mara-pub/rocket_pub.sh  --plan webgrind --prj webgrind --tag $TAG --host $*
