#!/bin/bash

tcpdump -ne -c 3000 > pack
grep "Flags" pack > tcp
grep "UDP" pack > udp
grep "ARP" pack > arp

chmod 777 pack
chmod 777 tcp
chmod 777 udp
chmod 777 arp
