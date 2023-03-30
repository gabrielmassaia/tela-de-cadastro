/* Criar uma rotina completa de cadastro de clientes:
1.1 Campos: nome, email, cidade, bairro, rua e numero.
1.2 Verificar se o email é valido no front end, tornar todos os campos obrigatórios */



let usuario = {

    nome: null,
    email: null,
    cidade: null,
    bairro: null,
    rua: null,
    numero: null,
     
};

function cadastrarUsuario() {

    let nome = $("#nome").val();
    let email = $("#email").val();
    let cidade = $("cidade").val();
    let bairro = $("bairro").val();
    let rua = $("rua").val();
    let numero = $("numero").val();
 
    let isValido = validarEmail(email);
    if(!isValido) {
        alert("Insira um email valido!")
        return false;  
    } 

    usuario.login = nome;
    usuario.email = email;
    usuario.cidade = cidade;
    usuario.bairro = bairro,
    usuario.rua = rua,
    usario.numero = numero
   
    alert("Usuario cadastrado com sucesso!")
    console.log(usuario);
 
}

function validarEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);

}