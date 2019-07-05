#!/bin/bash

cut -f 12 -d " " udp | cut -f 1 -d ":" | cut -d '.'  -f 1-4