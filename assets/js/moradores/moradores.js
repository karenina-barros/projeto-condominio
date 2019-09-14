/**
 * moradores.js 
 * 
 * responsavel por toda gestão do front end da view de cadastro de morador
 */

// Executa comandos apos o carregamento da janela
window.addEventListener('load', function() {

    // Esconde os campos de endereço externo
    let enderecoExterno = document.querySelector('#enderecoExterno');
    enderecoExterno.style.display = 'none';

    // Exibe os campos de endereço externo quando o campo de id '#moraOutroEndereco' é selecionado
    let moraOutroEndereco = document.querySelector('#moraOutroEndereco');
    moraOutroEndereco.addEventListener('change', function() {
        let valorMoraOutroEndereco = moraOutroEndereco.value;
        if (valorMoraOutroEndereco == '2') {
            enderecoExterno.style.display = 'block';
        } else {
            enderecoExterno.style.display = 'none';
        }
    });

    // Esconde os campos de endereço externo quando o campo de id '#moraPredio' é selecionado
    // limpa os campos do endereço externo
    let moraPredio = document.querySelector('#moraPredio');
    moraPredio.addEventListener('change', function() {
        let valorMoraPredio = moraPredio.value;
        if (valorMoraPredio == 1) {
            enderecoExterno.style.display = 'none';
            let arrLimparCampos = [
                'inputCEP', 
                'inputAdresss', 
                'inputNumber', 
                'inputComplemento', 
                'inputBairro', 
                'inputCity', 
                'inputEstado'
            ];
            arrLimparCampos.forEach(function(elemento) {
                document.querySelector('#' + elemento).value = '';
            });
        } else {
            enderecoExterno.style.display = 'block';
        }   
    });     
});