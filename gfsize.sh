#!/bin/bash
du -h "$1" |awk '{print $1}'
