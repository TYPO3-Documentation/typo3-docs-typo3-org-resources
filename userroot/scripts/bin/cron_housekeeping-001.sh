#!/usr/bin/env bash

# cron_housekeeping-001.sh
# mb, 2018-11-29, 2018-11-29

# collect info about symlinks in the webroot tree

# garantee folder
mkdir -p /tmp/housekeeping

# new run, new luck. Remove everything we knew before.
rm -rf /tmp/housekeeping/*
echo $(date +'%F %T UTC' -u): Start >> /tmp/housekeeping/cron_housekeeping-001.log.txt

# find all symlinks there are in the webroot tree. This takes a while :-(
echo $(date +'%F %T UTC' -u): Create symlinks-001.log.txt >> /tmp/housekeeping/cron_housekeeping-001.log.txt
find /home/mbless/public_html -type l > /tmp/housekeeping/symlinks-001.log.txt

# create intermediate file
echo $(date +'%F %T UTC' -u): Create symlinks-002.source_me.txt >> /tmp/housekeeping/cron_housekeeping-001.log.txt
cat /tmp/housekeeping/symlinks-001.log.txt | xargs -L1 | sed 's/.*/echo "&","$(readlink &)"/' > /tmp/housekeeping/symlinks-002.source_me.txt

# create the output we are looking for: csv file with <symlink>,<symlink_value> per line
echo $(date +'%F %T UTC' -u): Create symlinks-003.log.txt >> /tmp/housekeeping/cron_housekeeping-001.log.txt
source /tmp/housekeeping/symlinks-002.source_me.txt > /tmp/housekeeping/symlinks-003.log.txt

# finish
echo $(date +'%F %T UTC' -u): Finish: Done. >> /tmp/housekeeping/cron_housekeeping-001.log.txt

