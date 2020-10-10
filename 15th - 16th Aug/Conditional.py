## Condional Statement
'''
a = 30
b = 50
if a>b:
    print("a is greater than b")
else:
    print("b is greater than a")
print("Hello")

'''
'''
a = int(input("Enter A:"))
b = int(input("Enter B:"))
print(a+b)
'''
'''
a = int(input("Enter A:"))
b = int(input("Enter B:"))
if a>b:
    print("a is greater than b")
else:
    print("b is greater than a")
'''
'''
a = 30
b = 50
print("a is greater than a") if a>b else print("b is greater than a")
'''
'''
marks = int(input("Enter Marks:"))
if marks>50:
    if marks>90:
        print("A grade")
    elif marks<=70:
        print("C Grade")
    else:
        print("B Grade")
else:
    print("D Grade")
'''
'''
marks = int(input("Enter Marks:"))
if marks>50:
    if marks>80 and marks<=90:
        print("A grade")
    elif marks<=70:
        print("C Grade")
    elif marks>90:
        print("A++ Grade")
    else:
        print("B Grade")
else:
    print("D Grade")
'''

