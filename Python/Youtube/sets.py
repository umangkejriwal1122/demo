Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> ## Sets (Unordered Collection of data)
>>> a = set()
>>> a
set()
>>> type(a)
<class 'set'>
>>> a = {10,80,20,10,80,100,90,30,50}
>>> type(a)
<class 'set'>
>>> print(a)
{100, 10, 80, 50, 20, 90, 30}
>>> a.add(10)
>>> a
{100, 10, 80, 50, 20, 90, 30}
>>> a.add(9)
>>> a
{100, 9, 10, 80, 50, 20, 90, 30}
>>> a.add(190)
>>> a
{100, 9, 10, 80, 50, 20, 90, 190, 30}
>>> a.remove(20)
>>> a
{100, 9, 10, 80, 50, 90, 190, 30}
>>> a.remove(700)
Traceback (most recent call last):
  File "<pyshell#15>", line 1, in <module>
    a.remove(700)
KeyError: 700
>>> a.discard(30)
>>> a
{100, 9, 10, 80, 50, 90, 190}
>>> a.discard(30)
>>> b = a.pop()
>>> b
100
>>> a
{9, 10, 80, 50, 90, 190}
>>> a.clear()
>>> a
set()
>>> list=[10,90,80,70,10,40,80,70]
>>> list
[10, 90, 80, 70, 10, 40, 80, 70]
>>> a = set(list)
>>> a
{70, 40, 10, 80, 90}
>>> a = list(a)
Traceback (most recent call last):
  File "<pyshell#28>", line 1, in <module>
    a = list(a)
TypeError: 'list' object is not callable
>>> b = list(a)
Traceback (most recent call last):
  File "<pyshell#29>", line 1, in <module>
    b = list(a)
TypeError: 'list' object is not callable
>>> a
{70, 40, 10, 80, 90}
>>> ### union , intersection, difference, symmetric_difference
>>> set1 = {"A","B","C","D","E"}
>>> set2 = {"AA","BB","CC","D","E"}
>>> print(set1.union(set2))
{'A', 'E', 'B', 'CC', 'AA', 'D', 'C', 'BB'}
>>> print(set1.intersection(set2))
{'E', 'D'}
>>> print(set1.difference(set2))
{'A', 'C', 'B'}
>>> print(set2.difference(set1))
{'AA', 'CC', 'BB'}
>>>  print(set2 | set1)
 
SyntaxError: unexpected indent
>>> print(set2 | set1)
{'A', 'E', 'CC', 'AA', 'D', 'C', 'B', 'BB'}
>>> print(set1.symmetric_difference(set1))
set()
>>> print(set1.symmetric_difference(set2))
{'AA', 'A', 'B', 'C', 'CC', 'BB'}
>>> print(set2 & set1)
{'E', 'D'}
>>> 