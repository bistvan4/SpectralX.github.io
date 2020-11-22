import mysql.connector
import time
import os


db_kapcsolat = mysql.connector.connect(
    host="hostnev",
    user="felhasznalonev",
    passwd="jelszo"
)
print(db_kapcsolat)