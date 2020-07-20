Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> str = "We are learning the basics of Python"
>>> print(str)
We are learning the basics of Python
>>> str[:]
'We are learning the basics of Python'
>>> print(str[:])
We are learning the basics of Python
>>> str[3:]
'are learning the basics of Python'
>>> str[3]
'a'
>>> str[3:10]
'are lea'
>>> str[:6]
'We are'
>>> str[-6]
'P'
>>> str[-6:]
'Python'
>>> print(str)
We are learning the basics of Python
>>> str.capitalize()
'We are learning the basics of python'
>>> str.upper()
'WE ARE LEARNING THE BASICS OF PYTHON'
>>> str.lower()
'we are learning the basics of python'
>>> str.count('a')
3
>>> str.count('python')
0
>>> str.count('Python')
1
>>> str.replace('a','A')
'We Are leArning the bAsics of Python'
>>> str.replace('the basics of Python','Web Scraping')
'We are learning Web Scraping'
>>> str
'We are learning the basics of Python'
>>> str = str.replace('the basics of Python','Web Scraping')
>>> str
'We are learning Web Scraping'
>>> str.replace('a','A',1)
'We Are learning Web Scraping'
>>> 