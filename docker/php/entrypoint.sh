#!/usr/bin/bash

a2ensite site1.conf 
service apache2 restart
# rm /tmp/entrypoint.sh