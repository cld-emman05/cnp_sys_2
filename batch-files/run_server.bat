cd ..
@echo off

mode con: cols=45 lines=10

title Laravel Server

start php artisan serve
echo. [-- SERVER HAS BEEN STARTED --]
echo. Press any key to open the system.
echo. 

pause

echo. [-- OPENING THE SYSTEM --]
start "" http://localhost:8000
pause

echo. [-- CLOSE THE SERVER? --]
echo. Press any key to stop the server
echo.
pause

taskkill /f /im php.exe /t
echo. [-- SERVER CLOSED --]
echo. Press any key to terminate the terminal.
pause