from os import listdir
from os.path import isfile, join
path = 'C:\\Users\\hocke\\OneDrive\\Desktop\\EricZacharia\\02-Career\\04-WebDevelopment\\ellenericwedding\\images\\engagement_session'
onlyfiles = [f for f in listdir(path) if isfile(join(path, f))]

print(onlyfiles)

with open("photohtml.txt", 'w') as f:
    for file in onlyfiles:
        f.write(f''' <div class="gallery__solo"> <img src="/images/engagement_session/{file}"  class="gallery__image"> </div>''')
