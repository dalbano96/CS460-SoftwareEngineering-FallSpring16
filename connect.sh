#!/bin/bash
echo "Connecting to Team404 Server"
IP_ADDR=104.236.140.186

#read -n1 -p "Root or someUser [1,2]" input
#case $input in
#	1) ssh root@104.236.140.186 ;;
#	2) ssh someUser@104.236.140.186 ;;
#	*) echo "Error, quiting now" ;;
#esac

ssh root@$IP_ADDR
