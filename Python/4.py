Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> a = ()
>>> type(a)
<class 'tuple'>
>>> a = (12,20.5,"Umang",3+7j,True)
>>> a
(12, 20.5, 'Umang', (3+7j), True)
>>> a.index(12)
0
>>> a.count(12)
1
>>> a[3]
(3+7j)
>>> a[2:]
('Umang', (3+7j), True)
>>> d = {}
>>> type(d)
<class 'dict'>
>>> d = {"Fruit":"Apple","Mobile":"Android","Snake":"Anaconda"}
>>> print(d)
{'Fruit': 'Apple', 'Mobile': 'Android', 'Snake': 'Anaconda'}
>>> d.keys()
dict_keys(['Fruit', 'Mobile', 'Snake'])
>>> d.values
<built-in method values of dict object at 0x03F75578>
>>> d.value()
Traceback (most recent call last):
  File "<pyshell#15>", line 1, in <module>
    d.value()
AttributeError: 'dict' object has no attribute 'value'
>>> d.values()
dict_values(['Apple', 'Android', 'Anaconda'])
>>> d.items()
dict_items([('Fruit', 'Apple'), ('Mobile', 'Android'), ('Snake', 'Anaconda')])
>>> d['Mobile']
'Android'
>>> d['Sweets'] = "Jalebi"
>>> d
{'Fruit': 'Apple', 'Mobile': 'Android', 'Snake': 'Anaconda', 'Sweets': 'Jalebi'}
>>> d['Fruit'] = "Mango"
>>> d
{'Fruit': 'Mango', 'Mobile': 'Android', 'Snake': 'Anaconda', 'Sweets': 'Jalebi'}
>>> d['Fruit'].append('Apple')
Traceback (most recent call last):
  File "<pyshell#23>", line 1, in <module>
    d['Fruit'].append('Apple')
AttributeError: 'str' object has no attribute 'append'
>>> type(d['Fruit'])
<class 'str'>
>>> del(d['Mobile'])
>>> d
{'Fruit': 'Mango', 'Snake': 'Anaconda', 'Sweets': 'Jalebi'}
>>> a = d.pop('Sweets')
>>> a
'Jalebi'
>>> d
{'Fruit': 'Mango', 'Snake': 'Anaconda'}
>>> 