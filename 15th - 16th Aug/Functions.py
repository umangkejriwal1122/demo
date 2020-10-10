## Functions

## Making function without argument
def greeting():
    print("Hello")
'''
greeting()
greeting()
greeting()
greeting()
greeting()
'''

## Making function with argument
def greeting(first,last):
    print("Hello "+first+" "+last)
'''
greeting("Umang","Kejriwal")
'''
'''
## Function with default argument
def greeting(title,first,last,formal=True):
    if formal==True:
        print("Hello "+title+" "+last)
    else:
        print("Hello "+first)

greeting("Mr","Umang","Kejriwal")
greeting("Mr","Umang","Kejriwal",True)
greeting("Mr","Umang","Kejriwal",False)
greeting("Mr","Kejriwal","Umang",False)
greeting(first="Umang",title="Mr",last="Kejriwal",formal=False)
'''

## Return Function

def greeting():
    return("Hello")

a = greeting()
print(a)







    
