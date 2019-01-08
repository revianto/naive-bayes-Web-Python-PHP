#! /Python/Python37-32/python
print("Content-Type: text/html")
print()

import cgi, cgitb

form = cgi.FieldStorage()

string = form.getvalue("text")
tipe = form.getvalue("type")

#preprocessing :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) :-) 
#----------------------CaseFolding = Lower Case-----------------------
def casefold():
	#string = open('cth.txt','r').read()
	cf = string.casefold()
	#open('cf.txt','w').write(cf)
	return cf 
	
#--------------------Filtering = Menghilangkangkan tagging----------------- 
def filtering(): 
	filteringWord = ("`~!@#$%^&*()_+-=}{][;:'"",./?><")
	ft = casefold()

	for w in filteringWord:
		ft = ft.replace(w,"")
	#open('ft.txt','w').write(ft)
	return ft


#------------------Stop-Word = Menghilangkan kata bantu----------------
def stopword():
	from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory
	factory = StopWordRemoverFactory()
	stopword = factory.create_stop_word_remover()
	s = filtering().split()
	sw = []

	for i in s:
		sw.append(stopword.remove(i))

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

# ============================================= SAVE Stemming to DB ==========================
if tipe == "1":
	t = "multimedia"
elif tipe == "2":
	t = "hs"
elif tipe == "3":
	t = "ai"
elif tipe == "4":
	t = "network"
else :
	t = "contoh"

#print(t)

from conn import *
def save_stemming():
	s = stemming()
	i = [' '.join(s)]
	q.executemany('INSERT INTO `'+t+'` VALUES (NULL, %s);',i)
	conn.commit()
	return
save_stemming()