### Loops (While Loop)

'''
i = 0
while(i<10):
    i = i+1
    print('Umang')
    print("The value of i is "+ str(i))

'''
'''
# infinite loop
while True:
    print("Umang")
'''
'''
i = 0
while(i<10):
    i = i+1
    print("The value of i is "+ str(i))
    if i==5:
        break
'''
'''
i = 0
while(i<10):
    i = i+1
    if i==5:
        continue
    print("The value of i is "+ str(i))
'''
'''
i = 0
while(i<10):
    i = i+1
    if i==5:
        break
    print("The value of i is "+ str(i))
'''
# For Loop
'''
for i in range(10):
    print("The Value of i is "+str(i))
'''
'''
for i in range(5,15):
    print("The Value of i is "+str(i))
'''
'''
for i in range(5,15,3):
    print("The Value of i is "+str(i))
'''
fruits = ["Mango","Banana","Apple","Litchi","Strawberry"]
'''
for i in range(len(fruits)):
    print(fruits[i])
'''
'''
for i in fruits:
    print(i,end=" ")
'''
'''
## Print all odd or even numbers b/w 1 to 100
even = []
odd = []
for i in range(1,101):
    if i%2 == 0:
        even.append(i)
    else:
        odd.append(i)
print(even)
print(odd)
'''
'''
a = "Umang"
print("u" in a)
'''
'''
Sentence = input("Enter a phrase: ")
for letter in Sentence:
    print(letter)

## Count the vowel in the user typed string
'''
'''
vowel = ['a', 'e', 'i', 'o', 'u', 'A','E','I','O','U']
#vower = "aeiouAEIOU"
Sentence = input("Enter a phrase: ")
count = 0
for letter in Sentence:
    if letter in vowel:
        count= count + 1
print(count)
'''
# Nested Loops
a = ["A","B","C","D","E"]
b = [1,2,3,4,5]
for i in a:
    for j in b:
        print(i,j)





































