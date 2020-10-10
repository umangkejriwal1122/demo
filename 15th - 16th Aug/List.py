Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> ### Core Datatype (List)
>>> a = []   # empty list
>>> type(a)
<class 'list'>
>>> a = [2,4.5,"Umang",True,3+4j]
>>> a
[2, 4.5, 'Umang', True, (3+4j)]
>>> print(a)
[2, 4.5, 'Umang', True, (3+4j)]
>>> len(a)
5
>>> b = [1.7.9,True,7+9j,"Kejriwal"]
SyntaxError: invalid syntax
>>> b = [1,7.9,True,7+9j,"Kejriwal"]
>>> c = a + b
>>> c
[2, 4.5, 'Umang', True, (3+4j), 1, 7.9, True, (7+9j), 'Kejriwal']
>>> ## List Slicing
>>> c[3]
True
>>> c[2:9]
['Umang', True, (3+4j), 1, 7.9, True, (7+9j)]
>>> c[2:10:3]
['Umang', 1, (7+9j)]
>>> c[2:-5]
['Umang', True, (3+4j)]
>>> a.append("Hello")
>>> a
[2, 4.5, 'Umang', True, (3+4j), 'Hello']
>>> a.insert(2,60)
>>> a
[2, 4.5, 60, 'Umang', True, (3+4j), 'Hello']
>>> d = c.copy()
>>> d
[2, 4.5, 'Umang', True, (3+4j), 1, 7.9, True, (7+9j), 'Kejriwal']
>>> c.clear()
>>> c
[]
>>> del(c)
>>> c
Traceback (most recent call last):
  File "<pyshell#25>", line 1, in <module>
    c
NameError: name 'c' is not defined
>>> print(d)
[2, 4.5, 'Umang', True, (3+4j), 1, 7.9, True, (7+9j), 'Kejriwal']
>>> d.count("Umang")
1
>>> d.count(1)
3
>>> d.index('Umang')
2
>>> d.count(True)
3
>>> d.remove(4.5)
>>> d
[2, 'Umang', True, (3+4j), 1, 7.9, True, (7+9j), 'Kejriwal']
>>> c = d.pop('Umang')
Traceback (most recent call last):
  File "<pyshell#33>", line 1, in <module>
    c = d.pop('Umang')
TypeError: 'str' object cannot be interpreted as an integer
>>> c = d.pop(1)
>>> c
'Umang'
>>> d
[2, True, (3+4j), 1, 7.9, True, (7+9j), 'Kejriwal']
>>> d.index(True)
1
>>> d.index(True,1)
1
>>> d.index(True,2)
3
>>> d.pop()
'Kejriwal'
>>> d
[2, True, (3+4j), 1, 7.9, True, (7+9j)]
>>> ### Sorting of list
>>> data = [34,89,90,10,45,20,40,10,100,900]
>>> data.sort()
>>> data
[10, 10, 20, 34, 40, 45, 89, 90, 100, 900]
>>> data.sort(reverse=True)
>>> data
[900, 100, 90, 89, 45, 40, 34, 20, 10, 10]
>>> d.sort()
Traceback (most recent call last):
  File "<pyshell#48>", line 1, in <module>
    d.sort()
TypeError: '<' not supported between instances of 'complex' and 'bool'
>>> names = ["Umang","Rahul","Rohan","Neha"]
>>> names.sort()
>>> names
['Neha', 'Rahul', 'Rohan', 'Umang']
>>> names = ["Umang","Rahul","Rohan","Neha","abc","Abcdef"]
>>> names.sort(key=len)
>>> names
['abc', 'Neha', 'Umang', 'Rahul', 'Rohan', 'Abcdef']
>>> 