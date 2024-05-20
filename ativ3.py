numero = int(input("Digite um número inteiro positivo: "))
soma = 0

print("Números pares entre 0 e", numero, ":")

for i in range(0, numero + 1, 2):
    print(i)
    soma += i

print("A soma dos números pares é:", soma)