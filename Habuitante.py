pao = 0.18

anos = 0

while anos <= 50:
    
    populacao_A += populacao_A * (taxa_crescimento_A / 100)
    
    
    populacao_B += populacao_B * (taxa_crescimento_B / 100)
    print(populacao_A)
    print(populacao_B, "\n")
    
    anos += 1

print(f"São necessários {anos} anos para que a população do país A ultrapasse ou iguale a do país B.")