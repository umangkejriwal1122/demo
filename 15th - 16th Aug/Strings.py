Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> # String Operations
>>> a = "We are learning Python by Umang Kejriwal"
>>> a
'We are learning Python by Umang Kejriwal'
>>> print(a)
We are learning Python by Umang Kejriwal
>>> a[:]
'We are learning Python by Umang Kejriwal'
>>> a[3:]
'are learning Python by Umang Kejriwal'
>>> a[3:8]
'are l'
>>> a[:9]
'We are le'
>>> s[-4]
Traceback (most recent call last):
  File "<pyshell#8>", line 1, in <module>
    s[-4]
NameError: name 's' is not defined
>>> a[-4]
'i'
>>> a[-4:5]
''
>>> a[-4:9]
''
>>> a[-4:-9]
''
>>> a
'We are learning Python by Umang Kejriwal'
>>> a[-9:-4]
' Kejr'
\
>>> a[-9:-6]
' Ke'
>>> a[2:8,3]
Traceback (most recent call last):
  File "<pyshell#16>", line 1, in <module>
    a[2:8,3]
TypeError: string indices must be integers
>>> a[2:8:3]
' e'
>>> a[2:9:3]
' ee'
>>> a[2:10]
' are lea'
>>> a[2:10:2]
' r e'
>>> print(a)
We are learning Python by Umang Kejriwal
>>> a.capitalize()
'We are learning python by umang kejriwal'
>>> a.upper()
'WE ARE LEARNING PYTHON BY UMANG KEJRIWAL'
>>> a.lower()
'we are learning python by umang kejriwal'
>>> a.count('a')
4
>>> a.count('A')
0
>>> a.count("Hello")
0
>>> a.count("Umang")
1
>>> a
'We are learning Python by Umang Kejriwal'
>>> a = a.lower()
>>> a.count("Umang")
0
>>> a.count("
	")
SyntaxError: EOL while scanning string literal
>>> a.count("the")
0
>>> len(a)
40
>>> a.count(" ")
6
>>> a.replace('Python','Python Programming')
'we are learning python by umang kejriwal'
>>> a.replace('python','Python Programming')
'we are learning Python Programming by umang kejriwal'
>>> a = "Umang"
>>> b = " Kejriwal"
>>> a+b
'Umang Kejriwal'
>>> 