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
sql="DELETE FROM max WHERE 1"
mycursor.execute(sql)

#Commit changes
mydb.commit()