#! /Users/Refi/AppData/Local/Programs/Python/Python37-32/python
print("Content-Type: text/html")
print()

import cgi, cgitb

form = cgi.FieldStorage()

t = form.getvalue("text")

print("hello ",t, " your program is")

print("<h2>succes</h2>")

f = open('b.php').read()

print(f)

def  fc():
	a = ['1','ds']
	return a

print(fc())

# def a(b):
# 	c = 3 + b
# 	return c

# print(a(3))

