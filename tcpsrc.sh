#!/bin/bash

grep "IPv4" tcp | cut -f 10 -d " " | cut -f 1-4 -d "."
grep "IPv6" tcp | cut -f 10 -d " " | cut -f 1 -d "."