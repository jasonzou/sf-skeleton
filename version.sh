#!/bin/bash
git log|grep commit|wc|awk '{ major=($1 - $1%10000)/10000; mid=($1%10000 - $1%10000%1000)/1000; last=$1%100; print major"."mid"."last}' > VERSION.txt
