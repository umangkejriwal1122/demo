import smtplib
 
server = smtplib.SMTP('smtp.gmail.com', 587)
server.starttls()
server.login("umang20072007@gmail.com", "umang@1122")
msg = "Hello IOT!"
server.sendmail("umang20072007@gmail.com", "info.apptronix@gmail.com", "Subject: Mail Subject \n\n Hello IOT")
server.quit()