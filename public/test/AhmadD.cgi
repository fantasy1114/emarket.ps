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
mycursor.execute("SELECT id, sku FROM products WHERE sku IS NOT NULL")
myresult = mycursor.fetchall()
max=0
for row in myresult:
  row=list(row)
  if max < row[0]:
    max=row[0]
  searchQueryAddition=row[1]

  #Check if site has product in stock identified by its sku
  search_query = "https://ca.shein.com/pdsearch/"
  search_query += searchQueryAddition
  page = requests.get(search_query)
  src=page.text
  indexOne=src.find("<img data-src")
  
  #Found image of product, i.e. product exists
  if indexOne != -1:
    subStr=src[indexOne+17:indexOne+200]
    indexTwo=subStr.find('"')
    subStr=subStr[0:indexTwo]
    refinedSrc="https://"+subStr
    response = requests.get(refinedSrc)
    fileName=refinedSrc[refinedSrc.rfind('/')+1:]
    file = open(fileName, "wb")
    file.write(response.content)
    file.close()
    skuValue=str(row).replace("'", "").replace("(", "").replace(")", "").replace(",", "")

    indexThree=src.find("min_price")
    subStrTwo=src[indexThree+11:indexThree+14]
    indexFour=subStrTwo.find(',')
    subStrTwo=subStrTwo[0:indexFour]
    price = "%.2f" % round(int(subStrTwo)*1.2, 2)
    special_price = "%.2f" % round(int(subStrTwo)*1.1, 2)

    sql="UPDATE products SET in_stock = 1 WHERE sku = '" + skuValue + "'"
    mycursor.execute(sql)
    sql="UPDATE products SET price = '" + price + "'WHERE sku = '" + skuValue + "'"
    mycursor.execute(sql)
    sql="UPDATE products SET special_price = '" + special_price + "'WHERE sku = '" + skuValue + "'"
    mycursor.execute(sql)

  #No image of product
  else:
    skuValue=str(row).replace("'", "").replace("(", "").replace(")", "").replace(",", "")
    sql="UPDATE products SET in_stock = 0 WHERE sku = '" + skuValue + "'"
    mycursor.execute(sql)

max=str(max)
sql="INSERT INTO max VALUES ('" + max + "')"
mycursor.execute(sql)

#Commit changes
mydb.commit()