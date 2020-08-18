Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> list = [10,40,10,50,40,40]
>>> list.index(10)
0
>>> list.index(40)
1
>>> list.index(40,2)
4
>>> list.index(40,3)
4
>>> list2 = [i for i in range(len(list1))]
Traceback (most recent call last):
  File "<pyshell#5>", line 1, in <module>
    list2 = [i for i in range(len(list1))]
NameError: name 'list1' is not defined
>>> list2 = [i for i in range(len(list))]
>>> list2
[0, 1, 2, 3, 4, 5]
>>> list2 = [i for i in range(len(list)) if list[i]==10]
>>> list2
[0, 2]
>>> list2 = [i for i in range(len(list)) if list[i]==40]
>>> list2
[1, 4, 5]
>>> 