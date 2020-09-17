import mysql.connector
import time

mydb = mysql.connector.connect(
host="localhost",
user="umang",
passwd="umang@1122",
database="demo"
)

mycursor = mydb.cursor()

sql = "INSERT INTO user (name) VALUES (%s)"
val = "Umang"
mycursor.execute(sql, (val,))
mydb.commit()
print(mycursor.rowcount, "record inserted.")
