def add(a,b):
    return a+b
def sub(a,b):
    return a-b
def mul(a,b):
    return a*b
def div(a,b):
    return a/b

if __name__ == '__main__':
    var1 = int(input("Enter first number:"))
    var2 = int(input("Enter second number:"))
    print(add(var1,var2))
    print(sub(var1,var2))
    print(mul(var1,var2))
    print(div(var1,var2))
