#!/bin/bash

ssh -A -i ~/.ssh/id_rsa.pub nosubtools 'cd /var/www/notmichal/repo && . ../deploy.sh'
