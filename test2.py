import time
import os
a = int(input('Через сколько скрипт запуститься?: '));
print('ожидание')
time.sleep(a)
print("Запуск скрипта")
os.system('mkdir test_floader2')
print("Была создана папка")
time.sleep(2.4)
os.system("shutdown -s")
time.sleep(2.4)
