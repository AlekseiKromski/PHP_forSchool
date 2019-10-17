import time
import os
a = int(input('Через сколько скрипт запуститься?(минуты): '));
a = a * 60
print('---ожидание---')
time.sleep(a)
print("Log: Запуск скрипта")
os.system('git push origin master')
print("Log: Комит был отправлен")
time.sleep(2.4)
os.system("shutdown -s")
time.sleep(2.4)
