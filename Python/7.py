### Functions in Python

"""
def greetings(name):
    print("Good Afternoon!! "+name)

name = input("Enter Name-")
greetings(name)
"""
"""
def calculator(a,b,c):
    if c == "+":
        print(float(a+b))
    elif c == "-":
        print(float(a-b))
    elif c == "*":
        print(float(a*b))
    elif c == "/":
        print(float(a/b))
    else:
        print("Invalid Operation")

i = float(input("Enter First Number-"))
j = float(input("Enter Second Number-"))
k = input("Enter The Operation -")
calculator(i,j,k)
"""

def make_greeting(title,name,surname,formal=True):
    if formal == True:
        return("Hello "+title+" "+surname)
    else:
        return("Hello "+ name)

print(make_greeting("Mr","Umang","Kejriwal",True))
print(make_greeting("Mr","Umang","Kejriwal",False))
print(make_greeting("Mr","Umang","Kejriwal"))
    


