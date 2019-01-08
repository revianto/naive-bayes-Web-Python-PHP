#! /Python/Python37-32/python
print("Content-Type: text/html")
print()
import cgi, cgitb
form = cgi.FieldStorage()
string = form.getvalue("text")

import sys
sys.path.append('admin/python')
from conn import *


# string = "lan"

#======================= preprocessing :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) 
#----------------------CaseFolding = Lower Case-----------------------
def casefold():
	#string = open('cth.txt','r').read()
	cf = string.casefold()
	#open('cf.txt','w').write(cf)
	return cf 

#print (casefold())	
#--------------------Filtering = Menghilangkangkan tagging----------------- 
def filtering(): 
	filteringWord = ("~!@#$%^&*()_+}{[]':;<>?,./")
	ft = casefold()

	for w in filteringWord:
		ft = ft.replace(w,"")
	#open('ft.txt','w').write(ft)
	return ft

#print(filtering())
#------------------Stop-Word = Menghilangkan kata bantu----------------
def stopword():
	wordRemov = open('dot/stopword.txt').read().split()
	s = filtering().split()
	sw = []

	for i in s:
		if i not in wordRemov:
			sw.append(i)

	# with open('sw.txt', 'w') as f:
	# 	for sww in sw:
	# 		f.write("%s\n" %sww)

	return sw
#print (stopword())
#----------------------Stemming = Merubag katadasar-------------- 
def stemming():
	#Cara Install satrawi plugin = pip install Sastrawi
	from Sastrawi.Stemmer.StemmerFactory import StemmerFactory #Deklarasi Sastrawi
	# create stemmer
	factory = StemmerFactory()
	stemmer = factory.create_stemmer()
	stemming = stopword()
	st = []

	for s in stemming:
		st.append(stemmer.stem(s))	
	return st

#print(stemming())


# ==================================== Naive Bayes =================================
# ======================================= P(Data)
def p_data(id_table,table):
	q.execute('SELECT `'+id_table+'` FROM `'+table+'`') 
	count = len(q.fetchall())
	return count

d1 = p_data('id_multimedia','multimedia') #bug if c == 0 : c = 1 ==============
d2 = p_data('id_hs','hs')
d3 = p_data('id_ai','ai')
d4 = p_data('id_network','network')


# ====================================== P(Class)
def p_class(count_k):
	jml_klass = d1+d2+d3+d4
	prob = count_k/jml_klass
	return prob

c1 = p_class(d1)
c2 = p_class(d2)
c3 = p_class(d3)
c4 = p_class(d4)

#print(c1)

#============================== P(Data | class)

def word_tfidf():
	w = []
	q.execute('SELECT teks FROM `tfidf`')
	w_tfidf = q.fetchall()
	for i in w_tfidf:
		w.append(i[0])	
	return w

def p_data_class(values):
	st = stemming()
	word = word_tfidf()
	ary=[]
	for i in st:
		if i in word:
			q.execute('SELECT `'+values+'` FROM `tfidf` WHERE teks = "'+i+'";')
			p = q.fetchall()
			for i in p:
				if i[0] == 0:
					ary.append(0+1)
				else:
					ary.append(i[0]+1)
		else:
			ary.append(0+1)
	fold = 1
	for i in ary:
		fold *= i
	return fold

dc1 = p_data_class('values_multimedia')
dc2 = p_data_class('values_hs')
dc3 = p_data_class('values_ai')
dc4 = p_data_class('values_network')

#print(dc1,'==', dc2,'==', dc3,'==',dc4)

# =============================== ( NBC ) ^_^
def NBC(dc,c,d):
	result = dc*c/d
	return result

nbc1 = NBC(dc1,c1,d1)
nbc2 = NBC(dc2,c2,d2)
nbc3 = NBC(dc3,c3,d3)
nbc4 = NBC(dc4,c4,d4)
hsl = ""

if nbc1 > nbc2 and nbc1 > nbc3 and nbc1 > nbc4 :
	hsl = "Multimedia"
elif nbc2 > nbc1 and nbc2 > nbc3 and nbc2 > nbc4:
	hsl = "Hardware & Software"
elif nbc3 > nbc1 and nbc3 > nbc2 and nbc3 > nbc4:
	hsl = " Artificial Intelligence "
elif nbc4 > nbc1 and nbc4 > nbc2 and nbc4 > nbc3:
	hsl = "Network"
else:
	hsl = "UNKNON"

def save_v(v0,v1,v2,v3,v4):
	q.execute("TRUNCATE val ")
	q.execute("INSERT INTO `val` VALUES ('"+v0+"', '"+v1+"', '"+v2+"', '"+v3+"', '"+v4+"');")
	conn.commit()
	return

save_v(hsl,str(nbc1),str(nbc2),str(nbc3),str(nbc4))

print("<script type='text/javascript'>parent.location.assign('http://localhost/#grap');parent.location.reload();</script>");