#Ce programme détermine l'index de la première occurrence d'une sous-chaine dans une chaine
def find(string, substring):
    index = 0
    while index < len(string) - len(substring) + 1:
        if string[index] == substring[0] and string[index: index + len(substring)] == substring:
            return index
        index = index + 1
    return -1

if __name__ == "__main__":
    string = "Bonjour"
    substring = "on"
    print(find(string, substring))

