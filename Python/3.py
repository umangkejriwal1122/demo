Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> a =
SyntaxError: invalid syntax
>>> a = []
>>> type(a)
<class 'list'>
>>> a = [12,20.5,"Umang",34+89j,False]
>>> print(a)
[12, 20.5, 'Umang', (34+89j), False]
>>> b = [19,30.5,"Kejriwal",10+10j,True]
>>> print(b)
[19, 30.5, 'Kejriwal', (10+10j), True]
>>> len(a)
5
>>> c = a + b
>>> print(c)
[12, 20.5, 'Umang', (34+89j), False, 19, 30.5, 'Kejriwal', (10+10j), True]
>>> c[2]
'Umang'
>>> c[2:9]
['Umang', (34+89j), False, 19, 30.5, 'Kejriwal', (10+10j)]
>>> c[-2]
(10+10j)
>>> c[2:-3]
['Umang', (34+89j), False, 19, 30.5]
>>> c.append("Dog")
>>> print(c)
[12, 20.5, 'Umang', (34+89j), False, 19, 30.5, 'Kejriwal', (10+10j), True, 'Dog']
>>> c.insert(5,"Hello")
>>> print(c)
[12, 20.5, 'Umang', (34+89j), False, 'Hello', 19, 30.5, 'Kejriwal', (10+10j), True, 'Dog']
>>> d = c.copy()
>>> print(d)
[12, 20.5, 'Umang', (34+89j), False, 'Hello', 19, 30.5, 'Kejriwal', (10+10j), True, 'Dog']
>>> c.clear()
>>> c
[]
>>> clear
Traceback (most recent call last):
  File "<pyshell#22>", line 1, in <module>
    clear
NameError: name 'clear' is not defined
>>> cls
Traceback (most recent call last):
  File "<pyshell#23>", line 1, in <module>
    cls
NameError: name 'cls' is not defined
>>> print(d)
[12, 20.5, 'Umang', (34+89j), False, 'Hello', 19, 30.5, 'Kejriwal', (10+10j), True, 'Dog']
>>> d.count(1)
1
>>> d.count("abc")
0
>>> d.index("Hello")
5
>>> d.index(19)
6
>>> d.remove(19)
>>> d
[12, 20.5, 'Umang', (34+89j), False, 'Hello', 30.5, 'Kejriwal', (10+10j), True, 'Dog']
>>> d.append(12)
>>> d
[12, 20.5, 'Umang', (34+89j), False, 'Hello', 30.5, 'Kejriwal', (10+10j), True, 'Dog', 12]
>>> d.remove(12)
>>> d
[20.5, 'Umang', (34+89j), False, 'Hello', 30.5, 'Kejriwal', (10+10j), True, 'Dog', 12]
>>> d.remove(12)
>>> d
[20.5, 'Umang', (34+89j), False, 'Hello', 30.5, 'Kejriwal', (10+10j), True, 'Dog']
>>> c
[]
>>> del(c)
>>> c
Traceback (most recent call last):
  File "<pyshell#39>", line 1, in <module>
    c
NameError: name 'c' is not defined
>>> c = d.pop(5)
>>> c
30.5
>>> d
[20.5, 'Umang', (34+89j), False, 'Hello', 'Kejriwal', (10+10j), True, 'Dog']
>>> e = d.pop(3)
>>> e
False
>>> type(d)
<class 'list'>
>>> data = [12,80,90,50,34,1,56,45]
>>> print(data)
[12, 80, 90, 50, 34, 1, 56, 45]
>>> data.sort()
>>> data
[1, 12, 34, 45, 50, 56, 80, 90]
>>> data.sort(reverse=True)
>>> data
[90, 80, 56, 50, 45, 34, 12, 1]
>>> str = ["Umang","Rohan","Preeti","Sohan","Aditya"]
>>> str.sort()
>>> str
['Aditya', 'Preeti', 'Rohan', 'Sohan', 'Umang']
>>> d.sort()
Traceback (most recent call last):
  File "<pyshell#55>", line 1, in <module>
    d.sort()
TypeError: '<' not supported between instances of 'str' and 'float'
>>> 