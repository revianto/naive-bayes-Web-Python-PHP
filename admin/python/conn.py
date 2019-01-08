import pymysql #pip install pymysql
#from pre import stemming

# Open database connection
conn = pymysql.connect(host="localhost",user="root",password="",db="ta")

# prepare a cursor object using cursor() method
q = conn.cursor()
