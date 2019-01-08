# # #import a

# # a = 10

# a = 10 

# if a == 10:
# 	b = "makan"
# else:
# 	b = "minum"

# print(b)


import pymysql #pip install pymysql
#from pre import stemming
# Open database connection
conn = pymysql.connect(host="localhost",user="root",password="",db="python")

# prepare a cursor object using cursor() method
q = conn.cursor()


#-----------------------count ROW----------------------
