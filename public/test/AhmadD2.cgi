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

mydb = mysql.connector.connect(
  host="162.222.227.215",
  user="emarket",
  password="mi6fjp,.f_Ra",
  database="emarket_main"
)
mycursor = mydb.cursor()
mycursor.execute("SELECT * FROM max")
myresult = mycursor.fetchone()
max=myresult[0]

form = cgi.FieldStorage()
val =  form.getvalue('sku')
newID = max + 1
val=str(val)
newID=str(newID)
datetime=str(datetime.datetime.now())
datetime=datetime[:-7]

#Check if site has product in stock identified by its sku
searchQueryAddition=val
search_query = "https://ca.shein.com/pdsearch/"
search_query += searchQueryAddition
page = requests.get(search_query)
src=page.text
indexOne=src.find("<img data-src")
fileName=""

#Found image of product, i.e. product exists
if indexOne != -1:
  indexOne=src.find("goodsDetailUrl")
  subStr=src[indexOne+17:indexOne+200]
  indexTwo=subStr.find('"')  
  subStr=subStr[0:indexTwo]
  search_query="https://ca.shein.com"+subStr
  page = requests.get(search_query)

  src=page.text
  count=src.count('"thumbnail":"//')
  for x in range(count):
    if x==0:
      indexOne=src.find('"thumbnail":"//')
      subStr=src[indexOne+15:indexOne+140]
      indexTwo=subStr.find('",')
      subStr=subStr[0:indexTwo]
      refinedSrc="https://"+subStr
      response = requests.get(refinedSrc)
      fileName=refinedSrc[refinedSrc.rfind('/')+1:]
      file = open(fileName, "wb")
      file.write(response.content)
      file.close()
    else:  
      src=src[indexOne+140:]
      indexOne=src.find('"thumbnail":"//')
      subStr=src[indexOne+15:indexOne+140]
      indexTwo=subStr.find('",')
      subStr=subStr[0:indexTwo]
      refinedSrc="https://"+subStr
      response = requests.get(refinedSrc)
      fileName=refinedSrc[refinedSrc.rfind('/')+1:]
      file = open(fileName, "wb")
      file.write(response.content)
      file.close()
      
    #Filename table
    sql="INSERT INTO filename VALUES ('" + fileName + "')"
    mycursor.execute(sql)
  mydb.commit()

  indexThree=src.find("min_price")
  subStrTwo=src[indexThree+11:indexThree+14]
  indexFour=subStrTwo.find(',')
  subStrTwo=subStrTwo[0:indexFour]
  price = "%.2f" % round(int(subStrTwo)*1.2, 2)
  special_price = "%.2f" % round(int(subStrTwo)*1.1, 2)
  indexOne=src.find('{"goodsName":"')
  subStr=src[indexOne+14:]
  indexTwo=subStr.index('"')
  subStr=subStr[0:indexTwo]
  sql="INSERT INTO products VALUES ('" + newID + "', NULL, NULL, '" + subStr + "', '" + price + "', '" + special_price + "', 'fixed', NULL, NULL, '" + special_price + "', '" + val + "', '0', NULL, '1', 0, '1', NULL, NULL, NULL, '" + datetime + "', '" + datetime + "', '0')"
  mycursor.execute(sql)

  #Options table
  mycursor = mydb.cursor()
  mycursor.execute("SELECT * FROM options")
  myresult = mycursor.fetchall()
  max=0
  for row in myresult:
    row=list(row)
    if max < row[0]:
      max=row[0]
  newID = max+1
  newID=str(newID)
  imptNewID=newID
  sql="INSERT INTO options VALUES ('" + imptNewID + "', 'radio_custom', '0', '0', '1', NULL, '" + datetime + "', '" + datetime + "')"
  mycursor.execute(sql)

  #Option_values table
  mycursor = mydb.cursor()
  mycursor.execute("SELECT * FROM option_values")
  myresult = mycursor.fetchall()
  max=0
  for row in myresult:
    row=list(row)
    if max < row[0]:
      max=row[0]
  newID = max+1
  newID=str(newID)
  sql="INSERT INTO option_values VALUES ('" + newID + "', '" + imptNewID + "', NULL, 'fixed', '1', '" + datetime + "', '" + datetime + "')"
  mycursor.execute(sql)

  #Files table
  mycursor = mydb.cursor()
  mycursor.execute("SELECT * FROM files")
  myresult = mycursor.fetchall()
  max=0
  for row in myresult:
    row=list(row)
    if max < row[0]:
      max=row[0]
  newID = max+1
  newID=str(newID)
  fileStats=os.stat(fileName)
  path="media/" + fileName
  file_id=newID
  sql="INSERT INTO files VALUES ('" + newID + "', '4', '" + fileName + "', 'public_storage', '" + path + "', 'jpeg', 'image/jpeg', '" + str(fileStats.st_size) + "', '" + datetime + "', '" + datetime + "')"
  mycursor.execute(s
  #Entity_files table
  mycursor = mydb.cursor()
  mycursor.execute("SELECT * FROM entity_files")
  myresult = mycursor.fetchall()
  max=0
  for row in myresult:
    row=list(row)
    if max < row[0]:
      max=row[0]
  newID = max+1
  newID=str(newID)
  sql="INSERT INTO entity_files VALUES ('" + newID + "', '" + file_id + "', 'Modules\\Product\\Entities]\\Product', '1001', 'base_image', '" + datetime + "', '" + datetime + "')"
  mycursor.execute(sql)
  
sql="DELETE FROM max WHERE 1"
mycursor.execute(sql)

#Commit changes
mydb.commit()