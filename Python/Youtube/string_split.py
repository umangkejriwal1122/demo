Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> str = "We are learning Python"
>>> list = str.split()
>>> list
['We', 'are', 'learning', 'Python']
>>> str = "We.are.learning.Python"
>>> list = str.split()
>>> list
['We.are.learning.Python']
>>> str = "We.are.learning.Python Basics"
>>> str.split()
['We.are.learning.Python', 'Basics']
>>> str = "We.are.learning.Python"
>>> str.split(".")
['We', 'are', 'learning', 'Python']
>>> str = "We$are$learning$Python"
>>> str.split("$")
['We', 'are', 'learning', 'Python']
>>> str = "We$are$learning Python"
>>> str.split("$")
['We', 'are', 'learning Python']
>>> mylist = ['We', 'are', 'learning', 'Python']
>>> mylist
['We', 'are', 'learning', 'Python']
>>> data = " ".join(mylist)
>>> data
'We are learning Python'
>>> data = ",".join(mylist)
>>> data
'We,are,learning,Python'
>>> data = "_".join(mylist)
>>> data
'We_are_learning_Python'
>>> 