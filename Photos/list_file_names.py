import pathlib


def list_files():
    path = pathlib.Path('.') / "EllenAndEric"
    files_list = [file.name for file in path.iterdir() if file.is_file()]
    return files_list


for file in list_files():
    print(f'<img src = "{file}" width="300" alt = "Picture of Ellen and Eric." />')
