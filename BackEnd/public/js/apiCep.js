
let inputAdd = document.getElementById('novo-cep')
// let buttonAdd = document.getElementById('add')
let endereco = document.querySelector('#endereco')


inputAdd.onblur = function mostrarCepTela(){

    let valorDigitado = inputAdd.value
    fetch(`https://buscacepapi.com.br/busca-cep/${valorDigitado}?token=5e42bbe9b2fa7924f6f67618`)

    .then((response)=> {
        return response.json()
    })
    
    .then((json)=>{
        
            let cep = `<div class="col-md-4">
            <div class="card-endereco">
                <div class="texto-endereco">
                    ${valorDigitado}
                    ${json.bairro}
                    
                </div>
            </div>
            </div>
            `
        endereco.innerHTML += cep
        console.log(valorDigitado)
    })
}