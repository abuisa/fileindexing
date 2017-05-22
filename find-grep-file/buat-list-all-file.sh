#!/bin/bash
echo "--------START COLLECTING FILES-----------";

#if find /etc -name "*" -type f -exec md5sum {} \; > ~/.bdir/etc-list-file.txt; then echo "->/etc: OK"; fi;
#if find /root -name "*" -type f -exec md5sum {} \; > ~/.bdir/root-list-file.txt; then echo "->/root: OK"; fi;
if find /sbin -name "*" -type f -exec md5sum {} \; > ~/.bdir/sbin-list-file.txt; then echo "->/sbin: OK"; fi;
#if find /opt -name "*" -type f -exec md5sum {} \; > ~/.bdir/opt-list-file.txt; then echo "->/opt: OK"; fi;
#if find /core -name "*" -type f -exec md5sum {} \; > ~/.bdir/core-list-file.txt; then echo "->/core: OK"; fi;
#if find /bin -name "*" -type f -exec md5sum {} \; > ~/.bdir/bin-list-file.txt; then echo "->/bin: OK"; fi;
#if find /boot -name "*" -type f -exec md5sum {} \; > ~/.bdir/boot-list-file.txt; then echo "->/boot: OK"; fi;
#if find /lib -name "*" -type f -exec md5sum {} \; > ~/.bdir/lib-list-file.txt; then echo "->/lib: OK"; fi;
#if find /usr -name "*" -type f -exec md5sum {} \; > ~/.bdir/usr-list-file.txt; then echo "->/usr: OK"; fi;
#if find /snap -name "*" -type f -exec md5sum {} \; > ~/.bdir/snap-list-file.txt; then echo "->/snap: OK"; fi;
#if find /var -name "*" -type f -exec md5sum {} \; > ~/.bdir/var-list-file.txt; then echo "->/var: OK"; fi;
#if find /lastore -name "*" -type f -exec md5sum {} \; > ~/.bdir/lastore-list-file.txt; then echo "->/lastore: OK"; fi;
#if find /home -name "*" -type f  -exec md5sum {} \; > ~/.bdir/home-list-file.txt; then echo "->/home: OK"; fi;
if find /lib64 -name "*" -type f -exec md5sum {} \; > ~/.bdir/lib64-list-file.txt; then echo "->/lib64: OK"; fi;
#if find /media -name "*" -type f -exec md5sum {} \; > ~/.bdir/media-list-file.txt; then echo "->/media: OK"; fi;

dt=`date +%Y-%m-%d--%H-%M`
#echo $dt;
#if cat ~/.bdir/*.txt > ~/.bdir/ALL-file-$(echo $dt;).all; then echo "Marge to One File : OK."; fi; # for my computer
#if cat ~/.bdir/*.txt > filelist-$(echo $dt;).all; then echo "Marge to One File : OK."; fi;
if cat ~/.bdir/*.txt > filelist.all; then echo "Marge to One File : OK."; fi;
echo "--------FINISH COLLECTED FILES-----------";

# OTHER OPTIONS
#$1" "$2" "$3" "$4" "$5" "$6" "$7" "$8" "$9" "$10" "$3" "$11" "$12
# find /some/directory -maxdepth 1 -type f -exec cmd option {} \; > hasil.out
