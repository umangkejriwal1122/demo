import os
#os.remove('a.txt')   ## delete file
#os.rmdir('a')   ## delete folder

if os.path.exists("a.txt"):
    os.remove("a.txt")
else:
    print("file not exist")
