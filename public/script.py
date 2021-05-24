#!/usr/bin/env python
# coding: utf-8

# In[1]:


import face_recognition

import cv2
import os

def read_img(path):
    img = cv2.imread(path)
    (h, w) = img.shape[:2]
    width = 500
    ratio = width / float(w)
    height = int(h * ratio)
    return cv2.resize(img, (width, height))

known_encodings = []
known_names = []

known_dir = "E:\\college\\level.4\\GP\\GraduationProjectV1.1\\MissingPeopleSystem\\public\\images"
for file in os.listdir(known_dir):
    #print(file)
    img = read_img(known_dir + '/' + file)
    img_enc = face_recognition.face_encodings(img, model="large")[0]
    known_encodings.append(img_enc)
    known_names.append(file.split('.')[0])
    
photos = []
for name in known_names:
    name = name + '.jpg'
    photos.append(name)

unknown_dir = "E:\\college\\level.4\\GP\\GraduationProjectV1.1\\MissingPeopleSystem\\public\\oneImage"
for file in os.listdir(unknown_dir):
    #print("Processing", file)
    img = read_img(unknown_dir + '/' + file)
    img_enc = face_recognition.face_encodings(img, model="large")[0]

    results = face_recognition.compare_faces(known_encodings, img_enc)
    distance = face_recognition.face_distance(known_encodings, img_enc)

x = 0
for distant in distance:
  if(distant > 0.5):
    results[x] = False
  x = x + 1

final = []
lent = len(results)
for i in range(lent):
    app = [photos[i],1 - distance[i]]
    if(1 - distance[i] >= 0.5):
        final.append(app)
    
final_sorted = sorted(final, key=lambda x: x[1], reverse=True)

if(final_sorted):
    column1, column2 = zip(*final_sorted)

    f = open("result.txt", "w")
    f = open("result.txt", "a")
    for cell in column1:
        f.write(cell)
        f.write("\n")
    f.close()
else:
    f = open("result.txt", "w")
    f = open("result.txt", "a")
    f.close()
#open and read the file after the appending:
f = open("result.txt", "r")
print(f.read())

# %%
