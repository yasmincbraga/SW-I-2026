alert("Boas Vindas")

nome = prompt("Digite seu nome: ")

alert("Bem Vindo " + nome)

idade = prompt("Digite sua idade: ")

if (idade >= 18) {
    console.log("Maior de idade")
}
else {
    console.log("Menor de idade")
}

confirmar = confirm("Deseja continuar?")

if (confirmar) {
    while (true) {

        alert("Você está continuando")
        let valor1 = Number(prompt("Digite um valor: "))

        let valor2 = Number(prompt("Digite outro valor: "))

        soma = (valor1 + valor2)
        break
    }
}
else {
    alert("Você não está continuando")
}



alert("Aqui está sua soma: " + soma)

let valordobro = Number(prompt("Digite um número: "))

dobro = (valordobro * 2)

alert("Aqui está o dobro do seu número: " + dobro)

nome2 = prompt("Digite novamente seu nome: ")
idade2 = prompt("Digite novamente sua idade: ")

alert("Seu nome é: " + nome2 + " E sua idade é: " + idade2)