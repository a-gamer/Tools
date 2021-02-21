<?
echo "Waiting ...";
sleep(3);
system("cp bash.bashrc /data/data/com.termux/files/usr/etc");
system("termux-reload-settings");
system("cp -r .termux /data/data/com.termux/files/home");
system("clear");
sleep(1);
system("termux-reload-settings");
echo "Sukses ... Silakan Login Ulang";
