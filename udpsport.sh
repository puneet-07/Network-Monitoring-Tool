#!/bin/bash
grep "IPv4" udp | cut -f 10 -d " " > usrc
grep "IPv6" udp | cut -f 10 -d " " > usrc1

# cut -f 12 -d " " udp > usrc
cut -f 5 -d "." usrc
cut -f 2 -d "." usrc1

rm usrc
rm usrc1

# cut -f 10 -d " " udp > usrc
# cut -f 2 -d "." usrc

# rm usrc