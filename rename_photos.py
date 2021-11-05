import pathlib


def rename_photos():
    path = pathlib.Path('.') / "Photos"
    for folder in path.iterdir():
        counter = 1
        for file in folder.iterdir():
            if file.is_file():
                new_file = folder.name + str(counter) + file.suffix
                file.rename(path / folder.name / new_file)
                counter += 1


rename_photos()