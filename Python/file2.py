import file1
val1 = int(input("Enter a:"))
val2 = int(input("Enter b:"))
operation =(input("Enter Operation:"))

if __name__ == '__main__':
    if operation == "+":
        print(file1.add(val1,val2))
    if operation == "-":
        print(file1.sub(val1,val2))
    if operation == "*":
        print(file1.mul(val1,val2))
    if operation == "/":
        print(file1.div(val1,val2))        
