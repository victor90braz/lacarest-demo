# lacarest-demo

https://laracasts.com/path

Installation PHP

Option:

**[Download Laragon - Full (173 MB)](https://github.com/leokhoa/laragon/releases/download/6.0.0/laragon-wamp.exe)**
https://laragon.org/download/index.html

terminal CMD

- php -h
- PHP -S localhost:8888


Double Quotes (`" "):

Variables enclosed in double quotes will be replaced with their values. This is known as variable interpolation.
Escape sequences (e.g., \n, \t, \") are interpreted and converted to special characters.
Example:
$name = "John";
echo "Hello, $name!"; // Outputs: Hello, John!


Single Quotes (' '):

Variables inside single quotes will not be interpolated; they will be treated as literal strings.
Escape sequences are not interpreted within single quotes. Everything inside single quotes is treated as a plain string.
Example:

$name = "John";
echo 'Hello, $name!'; // Outputs: Hello, $name!
