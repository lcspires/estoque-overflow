# Script para exibir a estrutura de diretórios com arquivos.

import os

def show_tree(startpath, indent=0):
    for item in os.listdir(startpath):
        path = os.path.join(startpath, item)
        print(" " * indent + "|-- " + item)
        if os.path.isdir(path):
            show_tree(path, indent + 4)

root_dir = "."
show_tree(root_dir)
