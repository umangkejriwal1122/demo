Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> # Tuple (Immutable Datatype)
>>> a = ()   # empty tuple
>>> type(a)
<class 'tuple'>
>>> a = (1,2.5,"Umang",True,3+7j)
>>> a
(1, 2.5, 'Umang', True, (3+7j))
>>> a.index(2.5)
1
>>> a.count(1)
2
>>> a[2]
'Umang'
>>> a[2:5]
('Umang', True, (3+7j))
>>> # Dictionary
>>> d = {}  ## empty dictionary
>>> type(d)
<class 'dict'>
>>> d = {"Mobile":"Android","Company":"OnePlus","Version":"Android 10"}
>>> d
{'Mobile': 'Android', 'Company': 'OnePlus', 'Version': 'Android 10'}
>>> d.keys()
dict_keys(['Mobile', 'Company', 'Version'])
>>> d.values()
dict_values(['Android', 'OnePlus', 'Android 10'])
>>> d.items()
dict_items([('Mobile', 'Android'), ('Company', 'OnePlus'), ('Version', 'Android 10')])
>>> d[1]
Traceback (most recent call last):
  File "<pyshell#17>", line 1, in <module>
    d[1]
KeyError: 1
>>> d['Company']
'OnePlus'
>>> d['Sweets'] = 'Jalebi'
>>> d
{'Mobile': 'Android', 'Company': 'OnePlus', 'Version': 'Android 10', 'Sweets': 'Jalebi'}
>>> d['Mobile'] = 'ios'
>>> d
{'Mobile': 'ios', 'Company': 'OnePlus', 'Version': 'Android 10', 'Sweets': 'Jalebi'}
>>> d['mobile']='android'
>>> d
{'Mobile': 'ios', 'Company': 'OnePlus', 'Version': 'Android 10', 'Sweets': 'Jalebi', 'mobile': 'android'}
>>> del(d['mobile'])
>>> d
{'Mobile': 'ios', 'Company': 'OnePlus', 'Version': 'Android 10', 'Sweets': 'Jalebi'}
>>> e = d.pop('Sweets')
>>> e
'Jalebi'
>>> d
{'Mobile': 'ios', 'Company': 'OnePlus', 'Version': 'Android 10'}
>>> 