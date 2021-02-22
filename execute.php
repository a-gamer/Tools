<?
echo "Waiting ...";
sleep(3);
system("cp bash.bashrc /data/data/com.termux/files/usr/etc");
system("cp -r .termux /data/data/com.termux/files/home");
system("clear");
sleep(1);
system("termux-reload-settings");
echo "Sukses ...\nSilakan Login Ulang\n";