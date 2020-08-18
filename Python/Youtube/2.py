Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> # String Operations
>>> str = "We are Learning Python from Basics by Umang Kejriwal"
>>> print(str)
We are Learning Python from Basics by Umang Kejriwal
>>> #### String Slicing
>>> str[:]
'We are Learning Python from Basics by Umang Kejriwal'
>>> str[5]
'e'
>>> str[3:10]   ## print from 3 to 9
'are Lea'
>>> str[3:20]
'are Learning Pyth'
>>> str[3]
'a'
>>> str[4:]
're Learning Python from Basics by Umang Kejriwal'
>>> [:10]
SyntaxError: invalid syntax
>>> str[:10]
'We are Lea'
>>> str[-5]
'r'
>>> str[1:-10]
'e are Learning Python from Basics by Uman'
>>> print(str)
We are Learning Python from Basics by Umang Kejriwal
>>> str.upper()
'WE ARE LEARNING PYTHON FROM BASICS BY UMANG KEJRIWAL'
>>> str.lower()
'we are learning python from basics by umang kejriwal'
>>> str.capitalize()
'We are learning python from basics by umang kejriwal'
>>> print(str)
We are Learning Python from Basics by Umang Kejriwal
>>> l = str.lower()
>>> print(l)
we are learning python from basics by umang kejriwal
>>> print(str)
We are Learning Python from Basics by Umang Kejriwal
>>> str.count("A")
0
>>> str.count("a")
5
>>> str.count("Umang")
1
>>> str.replace("a","A")
'We Are LeArning Python from BAsics by UmAng KejriwAl'
>>> str
'We are Learning Python from Basics by Umang Kejriwal'
>>> str.replace("Umang Kejriwal" , "Kejriwal Umang")
'We are Learning Python from Basics by Kejriwal Umang'
>>> 