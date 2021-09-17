#!/usr/local/bin/python
print ("Content-type:text/html")
print()

from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from pprint import pprint
from selenium.common.exceptions import NoSuchElementException
import cgi
import mysql.connector
import json
import requests
import urllib.request as urllib2
import bs4
import datetime
import os
import ftplib

mydb = mysql.connector.connect(
  host="162.222.227.215",
  user="emarket",
  password="mi6fjp,.f_Ra",
  database="emarket_main"
)
mycursor = mydb.cursor()
mycursor.execute("SELECT filename FROM filename WHERE 1")
myresult = mycursor.fetchall()
filename=[]
for row in myresult:
  row=list(row)
  filename.append(row[0])
session = ftplib.FTP('207.174.214.40','images@dwaik.xyz','images')
for fn in filename:
	file = open(fn,'rb')                  # file to send
	session.storbinary('STOR ' + fn, file)     # send the file
	file.close()                                    # close file and FTP
session.quit()

sql="DELETE FROM filename WHERE 1"
mycursor.execute(sql)

#Commit changes
mydb.commit()