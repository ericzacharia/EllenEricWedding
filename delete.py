import os


def main():
    path = "C:\\Users\\hocke\\OneDrive\\Desktop\\EricZacharia\\02-Career\\04-WebDevelopment\\ellenericwedding\\compressjpeg\\"
    for filename in os.listdir(path):
        file_type = filename[-4:]
        if "." in file_type:
            # print(path + filename[:-8] + ".jpg")
            os.rename(path + filename, path + filename[:-8] + ".jpg")
        else:
            # print(path + filename[:-9] + ".jpg")
            os.rename(path + filename, path + filename[:-9] + ".jpg")


if __name__ == '__main__':
    main()
