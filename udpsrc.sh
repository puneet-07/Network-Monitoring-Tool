#!/bin/bash

grep "IPv4" udp | cut -f 10 -d " "  | cut -f 1-4 -d "."
grep "IPv6" udp | cut -f 10 -d " "  | cut -f 1 -d "."
