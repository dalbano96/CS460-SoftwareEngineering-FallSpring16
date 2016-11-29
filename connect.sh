#!/bin/bash
echo "Connecting to Team404 Server"
USER='team404-admin'
IP_ADDR='132.160.49.90 -p 2229'

#read -n1 -p "Root or someUser [1,2]" input
#case $input in
#	1) ssh root@104.236.140.186 ;;
#	2) ssh someUser@104.236.140.186 ;;
#	*) echo "Error, quiting now" ;;
#esac

ssh $USER@$IP_ADDR
