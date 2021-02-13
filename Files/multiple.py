file = open("Sample.txt","w")
for i in range(3):
    info = input()
    file.write(info)
    file.write("\n")
file.close()
