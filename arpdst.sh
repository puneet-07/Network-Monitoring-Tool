#!/bin/bash

grep "Request" arp | cut -f 14 -d " " | cut -f 1  -d "," && grep "Reply" arp | cut -f 13 -d " " | cut -f 1  -d ","
