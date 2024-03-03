#!/bin/bash
echo "$FLAG" > /flag.php && \
export FLAG=not && FLAG=not && \
service apache2 restart && \
tail -f /dev/null