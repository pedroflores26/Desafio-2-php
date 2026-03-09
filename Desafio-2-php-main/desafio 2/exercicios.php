<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Exercícios</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
}

.container{
width:900px;
margin:auto;
background:white;
padding:20px;
}

.exercicio{
margin-bottom:30px;
border-bottom:1px solid #ccc;
padding-bottom:20px;
}

input,select{
padding:6px;
margin:5px;
}

button{
padding:6px 12px;
cursor:pointer;
}

.resultado{
margin-top:10px;
background:#e8f4ff;
padding:10px;
min-height:20px;
}

</style>

</head>
<body>

<div class="container">

<h1>Lista de Exercícios</h1>

<!-- 1 -->
<div class="exercicio">
<h3>1 - Soma</h3>
<form id="form1">
<input type="number" id="n1">
<input type="number" id="n2">
<button>Calcular</button>
</form>
<div class="resultado" id="r1"></div>
</div>

<!-- 2 -->
<div class="exercicio">
<h3>2 - Média</h3>
<form id="form2">
<input type="number" id="m1">
<input type="number" id="m2">
<input type="number" id="m3">
<button>Calcular</button>
</form>
<div class="resultado" id="r2"></div>
</div>

<!-- 3 -->
<div class="exercicio">
<h3>3 - Metros para cm</h3>
<form id="form3">
<input type="number" id="metros">
<button>Converter</button>
</form>
<div class="resultado" id="r3"></div>
</div>

<!-- 4 -->
<div class="exercicio">
<h3>4 - Área retângulo</h3>
<form id="form4">
<input type="number" id="base">
<input type="number" id="altura">
<button>Calcular</button>
</form>
<div class="resultado" id="r4"></div>
</div>

<!-- 5 -->
<div class="exercicio">
<h3>5 - Positivo ou negativo</h3>
<form id="form5">
<input type="number" id="num">
<button>Verificar</button>
</form>
<div class="resultado" id="r5"></div>
</div>

<!-- 6 -->
<div class="exercicio">
<h3>6 - Maioridade</h3>
<form id="form6">
<input type="number" id="idade">
<button>Verificar</button>
</form>
<div class="resultado" id="r6"></div>
</div>

<!-- 7 -->
<div class="exercicio">
<h3>7 - Aprovação</h3>
<form id="form7">
<input type="number" id="nota">
<button>Verificar</button>
</form>
<div class="resultado" id="r7"></div>
</div>

<!-- 8 -->
<div class="exercicio">
<h3>8 - Maior número</h3>
<form id="form8">
<input type="number" id="x">
<input type="number" id="y">
<button>Verificar</button>
</form>
<div class="resultado" id="r8"></div>
</div>

<!-- 9 -->
<div class="exercicio">
<h3>9 - Dia da semana</h3>
<form id="form9">
<input type="number" id="dia">
<button>Ver</button>
</form>
<div class="resultado" id="r9"></div>
</div>

<!-- 10 -->
<div class="exercicio">
<h3>10 - Vogal ou consoante</h3>
<form id="form10">
<input type="text" id="letra">
<button>Verificar</button>
</form>
<div class="resultado" id="r10"></div>
</div>

<!-- 11 -->
<div class="exercicio">
<h3>11 - Status pedido</h3>
<form id="form11">
<select id="status">
<option value="">Selecione</option>
<option value="aguardando">Aguardando</option>
<option value="preparacao">Preparação</option>
<option value="enviado">Enviado</option>
<option value="concluido">Concluído</option>
</select>
<button>Ver</button>
</form>
<div class="resultado" id="r11"></div>
</div>

<!-- 12 -->
<div class="exercicio">
<h3>12 - Contagem 1 a 10</h3>
<button onclick="contar()">Mostrar</button>
<div class="resultado" id="r12"></div>
</div>

<!-- 13 -->
<div class="exercicio">
<h3>13 - Pares até 20</h3>
<button onclick="pares()">Mostrar</button>
<div class="resultado" id="r13"></div>
</div>

<!-- 14 -->
<div class="exercicio">
<h3>14 - Tabuada</h3>
<form id="form14">
<input type="number" id="tab">
<button>Gerar</button>
</form>
<div class="resultado" id="r14"></div>
</div>

<!-- 15 -->
<div class="exercicio">
<h3>15 - Contagem regressiva</h3>
<button onclick="regressiva()">Mostrar</button>
<div class="resultado" id="r15"></div>
</div>

<!-- 16 -->
<div class="exercicio">
<h3>16 - Soma até 100</h3>
<button onclick="soma100()">Calcular</button>
<div class="resultado" id="r16"></div>
</div>

<!-- 17 -->
<div class="exercicio">
<h3>17 - Sorteio até sair 5</h3>
<button onclick="sorteio()">Sortear</button>
<div class="resultado" id="r17"></div>
</div>

<!-- 18 -->
<div class="exercicio">
<h3>18 - Frutas</h3>
<button onclick="frutas()">Mostrar</button>
<div class="resultado" id="r18"></div>
</div>

<!-- 19 -->
<div class="exercicio">
<h3>19 - Soma array</h3>
<button onclick="array()">Calcular</button>
<div class="resultado" id="r19"></div>
</div>

<!-- 20 -->
<div class="exercicio">
<h3>20 - Dados aluno</h3>
<form id="form20">
<input type="text" id="nome">
<input type="number" id="idade2">
<input type="text" id="curso">
<button>Mostrar</button>
</form>
<div class="resultado" id="r20"></div>
</div>

</div>

<script>

//1
form1.onsubmit=e=>{
e.preventDefault()
r1.innerHTML="Resultado: "+(Number(n1.value)+Number(n2.value))
}

//2
form2.onsubmit=e=>{
e.preventDefault()
r2.innerHTML="Média: "+((Number(m1.value)+Number(m2.value)+Number(m3.value))/3)
}

//3
form3.onsubmit=e=>{
e.preventDefault()
r3.innerHTML=metros.value+" m = "+(metros.value*100)+" cm"
}

//4
form4.onsubmit=e=>{
e.preventDefault()
r4.innerHTML="Área: "+(base.value*altura.value)
}

//5
form5.onsubmit=e=>{
e.preventDefault()
let n=num.value
r5.innerHTML=n>0?"Positivo":n<0?"Negativo":"Zero"
}

//6
form6.onsubmit=e=>{
e.preventDefault()
r6.innerHTML=idade.value>=18?"Maior de idade":"Menor"
}

//7
form7.onsubmit=e=>{
e.preventDefault()
r7.innerHTML=nota.value>=6?"Aprovado":"Reprovado"
}

//8
form8.onsubmit=e=>{
e.preventDefault()
r8.innerHTML="Maior: "+Math.max(x.value,y.value)
}

//9
form9.onsubmit=e=>{
e.preventDefault()
let s=["","Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado"]
r9.innerHTML=s[dia.value]||"Inválido"
}

//10
form10.onsubmit=e=>{
e.preventDefault()
let v=['a','e','i','o','u']
r10.innerHTML=v.includes(letra.value.toLowerCase())?"Vogal":"Consoante"
}

//11
form11.onsubmit=e=>{
e.preventDefault()
let m={
aguardando:"Aguardando confirmação",
preparacao:"Em preparação",
enviado:"Pedido enviado",
concluido:"Pedido concluído"
}
r11.innerHTML=m[status.value]
}

//12
function contar(){
let r=""
for(let i=1;i<=10;i++)r+=i+" "
r12.innerHTML=r
}

//13
function pares(){
let r=""
for(let i=2;i<=20;i+=2)r+=i+" "
r13.innerHTML=r
}

//14
form14.onsubmit=e=>{
e.preventDefault()
let r=""
for(let i=1;i<=10;i++)r+=tab.value+" x "+i+" = "+(tab.value*i)+"<br>"
r14.innerHTML=r
}

//15
function regressiva(){
let r=""
for(let i=10;i>=1;i--)r+=i+" "
r15.innerHTML=r
}

//16
function soma100(){
let s=0
for(let i=1;i<=100;i++)s+=i
r16.innerHTML="Soma: "+s
}

//17
function sorteio(){
let t=0,n
do{
n=Math.floor(Math.random()*10)+1
t++
}while(n!=5)
r17.innerHTML="Tentativas: "+t
}

//18
function frutas(){
let f=["Maçã","Banana","Uva","Laranja","Manga"]
r18.innerHTML=f.join("<br>")
}

//19
function array(){
let n=[2,4,6,8,10]
let s=n.reduce((a,b)=>a+b)
r19.innerHTML="Soma: "+s
}

//20
form20.onsubmit=e=>{
e.preventDefault()
r20.innerHTML="Nome: "+nome.value+"<br>Idade: "+idade2.value+"<br>Curso: "+curso.value
}

</script>

</body>
</html>