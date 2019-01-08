from conn import * #import conn.py
import math #import LOG
from heapq import nlargest

# ========================================== CALL DB ==================================

def data_abstract(t):
	sql = 'SELECT teks FROM `'+t+'`;'
	q.execute(sql)
	d = q.fetchall()
	data = []
	for i  in d:
		for j in i:
			data.append(j)
	return data

# ===========================================  Join Data ==============================

d1 = data_abstract("multimedia")
d2 = data_abstract("hs")
d3 = data_abstract("ai")
d4 = data_abstract("network")
#d5 = data_abstract("contoh")

dn = []

def dataN(d):
	join_row = [" ". join(d)]
	for i in join_row:
		dn.append(i)
	return dn

dataN(d1)
dataN(d2)
dataN(d3)
dataN(d4)

st = " ".join(dn).split()

# ====================================== REMOVE SAME WORD ============================

def remove_same_word():
	final_word = []
	for i in st:
		if i not in final_word:
			final_word.append(i)
	return final_word

# ================================= TF =======================================

word_array = dn
def tf():
	count_word_index = []
	for i in range(len(word_array)):
		count_word_index.append(len(word_array[i].split()))
	#print (count_word_index)
	tf = []
	for j in range(len(word_array)):
		tf.append([])
		a = 0
		for i in remove_same_word():
			a += 1
			ct = word_array[j].count(i)
			tf[j].append(ct/count_word_index[j])
	return tf

# ========================= IDF ===========================================

abstract = dn

def idf():
	dokument_frek = len(abstract)
	idf = []
	for i in remove_same_word():
		count_dok_word = 0
		for j in range(dokument_frek):
			if i in abstract[j]:
				count_dok_word += 1
		idf.append(math.log(dokument_frek / count_dok_word))
	return idf


# ==================================== TFIDF ==============================

tf = tf()
idf = idf()
def tfidf():
	tfidf = []
	for i in range(len(tf)):
		tf1 = tf[i]
		tfidf.append([])
		for j in range(len(idf)):
			tfidf[i].append(tf1[j] * idf[j])
	return tfidf

t = tfidf()
def data(d):
	dt = []
	for i in d:
		dt.append(str(i))
	return dt

d1 = data(t[0])
d2 = data(t[1])
d3 = data(t[2])
d4 = data(t[3])


def save_tfidf():
	q.execute('TRUNCATE `tfidf`;')
	w = remove_same_word()

	val = []
	for i in range(len(w)):
		val.append([])
		val[i].extend((w[i],d1[i],d2[i],d3[i],d4[i]))
	sql = 'INSERT INTO `tfidf` VALUES (Null,%s,%s,%s,%s,%s);'
	q.executemany(sql,val)
	conn.commit()
	return
save_tfidf()

