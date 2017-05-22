# grep -i $1 filelist.all |awk '{print "<tr><td>"$0"</td></tr>"}'|sort
# grep -i $1 filelist.all |awk '{print "<tr><td>"$0"</td></tr>"}'|sort
# grep -i $1 filelist.all|awk '{print "<tr><td>"$0"</td><td>"$1"</td></tr>"}'
 grep -i $1 filelist.all|awk '{print $0"</td><td>"$1"</td></tr>"}'|cut -c 34-|awk '{print "<tr><td>"$0}'
# grep -i $1 filelist.all|awk '{print "<ahref=file://"$2"<ref> "$0"</td><td>"$1"</td></tr>"}'|sed 's/<ahref=/<a href="/g'|sed 's/<ref>/">/g'
# grep -i $1 filelist.all|awk '{print $0"<bts>"$0"</td><td>"$1"</td></tr>"}'|cut -c 34-|awk '{print "<tr><td>"$0}'


