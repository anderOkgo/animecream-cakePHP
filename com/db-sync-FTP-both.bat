@ECHO Off
SETLOCAL
IF EXIST setter.bat (CD.. & CALL com\setter.bat) ELSE ( CALL com\setter.bat )
"keys/WinSCP.com" ^
  /command ^
    "open ftp://%FTPUsername.txt%:%FTPPss.txt%@%FTPserver.txt%" ^
    "option batch off" ^
    "synchronize remote ""%LocalPath.txt%\webroot\img\tarjeta\"" /webroot/img/tarjeta/" ^
    "synchronize local ""%LocalPath.txt%\config\"" /config/" ^
    "synchronize both ""%LocalPath.txt%\src\"" /src/" ^
    "synchronize both ""%LocalPath.txt%\webroot\"" /webroot/" ^
    "exit" ^
IF %ERRORLEVEL% EQU 0 (Echo No error found) ELSE (Echo An error was found)
PAUSE
