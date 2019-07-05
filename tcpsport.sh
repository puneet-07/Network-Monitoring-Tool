#!/bin/bash

grep "IPv4" tcp | cut -f 10 -d " " > tsrc
grep "IPv6" tcp | cut -f 10 -d " " > tsrc1

cut -f 5 -d "." tsrc
cut -f 2 -d "." tsrc1

rm tsrc
rm tsrc1