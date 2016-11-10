#!/bin/bash
echo "Connecting to Team404 Server"

read -n1 -p "Root or someUser [1,2]" input
case $input in
	1) ssh root@138.68.50.53 ;;
	2) ssh someUser@138.68.50.53 ;;
	*) echo "Error, quiting now" ;;
esac
