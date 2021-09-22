with open("delete.txt", 'w') as f:
    for i in range(1, 232):
        f.write(f'''  <div class="gallery__solo"> <img src="/images/websizephotos/FULL GALLERY/ellen-eric-engagement-{i}.jpg"  class="gallery__image"> </div>''')

    for i in range(1, 63):
        f.write(f'''  <div class="gallery__solo"> <img src="/images/websizephotos/Gallery Preview/ellen-eric-engagement-teasers-{i}.jpg"  class="gallery__image"> </div>''')
