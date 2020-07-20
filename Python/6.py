"""
i = 0
while(i<10):
    print("Umang")
    i = i+1
"""

"""
i = 0
while(i<20):
    print("The value of i is "+str(i))
    i = i+1
    if(i==10):
        break       
"""
"""
i = 0
while(i<20):
    i = i+1
    if(i==10):
        continue
    print("The value of i is "+str(i))
"""
"""
for i in range(10):
    print("The value of i is "+str(i))
"""
"""
for i in range(0,20):
    print("The value of i is "+str(i))
"""
"""
for i in range(1,20,3):
    print("The value of i is "+str(i))
"""
"""
fruits = ["Mango","Apple","Banana","Strawberry","Litchi"]
for i in range(len(fruits)):
    print(fruits[i])
"""
"""
fruits = ["Mango","Apple","Banana","Strawberry","Litchi"]
for i in fruits:
    print(i)
"""
"""
# Print even and odd numbers b/w 1 to 100
even = []
odd = []
for i in range(1,101):
    if i%2 == 0:
        even.append(i)
    else:
        odd.append(i)
print(even)
print("\n")
print(odd)
"""
"""
a = int(input("Enter a number to check-"))
if(a%2==0):
    print("Even Number")
else:
    print("Odd Number")
"""
### Nested Loops
a = ["A","B","C"]
b = [1,2,3,4]
for i in a:
    for j in b:
        print(i,j)
        







