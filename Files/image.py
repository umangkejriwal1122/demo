file_read = open("logo.png","rb") ## read already existing file (read binary)
file_write = open("mylogo.png","wb")  ## write binary
img = file_read.read()
file_write.write(img)
file_write.close()
file_read.close()

