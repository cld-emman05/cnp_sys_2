cd ..
@echo off
title Clear Cache and Dump Autoload

start composer clear-cache
start composer dump-autoload

pause 
taskkill /f /im cmd.exe /t
echo. [-- CLOSED --]
echo. Press any key to terminate the terminal.
pause