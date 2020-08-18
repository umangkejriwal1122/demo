Python 3.8.4 (tags/v3.8.4:dfa645a, Jul 13 2020, 16:30:28) [MSC v.1926 32 bit (Intel)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> ### Dictionary
>>> dict = {}  ## empty dictionary
>>> dict
{}
>>> type(dict)
<class 'dict'>
>>> dict = {"Name":"Umang","Gender":"Male","Location":"Patna","Interest":"Programming"}
>>> dict
{'Name': 'Umang', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming'}
>>> dict['Name']
'Umang'
>>> dict['Location']
'Patna'
>>> dict['Salary']
Traceback (most recent call last):
  File "<pyshell#8>", line 1, in <module>
    dict['Salary']
KeyError: 'Salary'
>>> dict.get('Name')
'Umang'
>>> dict.get('Salary')
>>> print(dict.get('Salary'))
None
>>> print(dict['Salary'])
Traceback (most recent call last):
  File "<pyshell#12>", line 1, in <module>
    print(dict['Salary'])
KeyError: 'Salary'
>>> print(dict.get('Salary'))
None
>>> print(dict.get('Salary',"No Key Found"))
No Key Found
>>> print(dict.get('Interest',"No Key Found"))
Programming
>>> dict.keys()
dict_keys(['Name', 'Gender', 'Location', 'Interest'])
>>> dict.values()
dict_values(['Umang', 'Male', 'Patna', 'Programming'])
>>> dict.items()
dict_items([('Name', 'Umang'), ('Gender', 'Male'), ('Location', 'Patna'), ('Interest', 'Programming')])
>>> dict['Qualification'] = "Engineering"
>>> dict
{'Name': 'Umang', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming', 'Qualification': 'Engineering'}
>>> dict['Name'] = 'Ram'
>>> dict
{'Name': 'Ram', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming', 'Qualification': 'Engineering'}
>>> dict['name'] = 'Shyam'
>>> dict
{'Name': 'Ram', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming', 'Qualification': 'Engineering', 'name': 'Shyam'}
>>> dict.pop('name')
'Shyam'
>>> dict
{'Name': 'Ram', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming', 'Qualification': 'Engineering'}
>>> dict.popitem()
('Qualification', 'Engineering')
>>> dict
{'Name': 'Ram', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming'}
>>> dict2 = {"Hobbies":"Teaching","Food","North Indian"}
SyntaxError: invalid syntax
>>> dict2 = {"Hobbies":"Teaching","Food":"North Indian"}
>>> dict.update(dict2)
>>> dict
{'Name': 'Ram', 'Gender': 'Male', 'Location': 'Patna', 'Interest': 'Programming', 'Hobbies': 'Teaching', 'Food': 'North Indian'}
>>> 