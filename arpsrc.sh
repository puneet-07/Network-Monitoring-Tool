#!/bin/bash
grep "Reply" arp | cut -f 11 -d " " && grep "Request" arp | cut -f 12 -d " "
