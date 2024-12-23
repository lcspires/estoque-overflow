# PHP

`php –S localhost:8000`
`localhost:8000`.

**Intersecção com o HTML:**

```html
<?php $nome = "João"; ?>
<p>Nome: <?php echo $nome; ?></p>
```

**Tipos de Variáveis**

```php
<?php
    
$string = "txt"; $numInteiro = 42; $pontoFlutuante = 3.14; $booleana = true;
$nula = null; $arrayNum = ["cara", "coroa"]; $chaves = ["garagem" => 6, "porta" => 8];
```

**Operadores de Comparação**

- Igual (==) • var_dump(5 == “5”) • True
- Idêntico (===) • var_dump(5 == “5”) • False
- Diferente (!= ou <>) • var_dump(7 != “5”) • var_dump(7 <> “5”) • True
- Muito Diferente (!==) • var_dump(7 !== “5”) • False
- Maior que (>) • Menor que (<) • Maior ou igual que (>=) • Menor ou igual que (<=)

**Operadores Lógicos**

- && (AND) • || (OR) • ! (NOT)

**Sequência de escape ANSI**

**`echo "\033[2J\033[;H";`**

- `\033`: Indica que uma sequência de escape está começando. O código `\033` é usado para representar o caractere “ESC” (Escape), que tem um valor ASCII decimal de 27 (ou octal 033).
- `[2J`: Essa parte da sequência de escape é usada para limpar a tela. O `2J` é uma instrução que significa “limpar toda a tela” (J de “Janela”). O número entre colchetes (2) indica o tipo de limpeza, neste caso, “limpar a tela inteira”.
- `\033`: Indicando novamente que uma outra sequência de escape está começando.
- `[;H`: Esta parte é usada para posicionar o cursor na tela. Neste caso, a instrução `;H` é usada para definir a posição do cursor como a posição padrão do início da tela.

`$entrada = readline();`: Lê a entrada do usuário e armazena na variável `$entrada`.

`if ($entrada != '1') { ... } else { ... }`: Verifica se a entrada está de acordo com as regras.