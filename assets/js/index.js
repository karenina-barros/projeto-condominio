window.addEventListener('load', function(){
    let queryString = window.location.search;
    let page = queryString.replace('?page=', '');
    let pageName = document.querySelector('#page');
    
    if(page == 'moradores' || page == 'moradoresCadastrar' || page == 'moradoresPerfil'){
        pageName.innerHTML = '<i class="fas fa-users pr-2 text-pink"></i>Moradores';
    } 
    else if (page == 'funcionarios' || page == 'funcionariosCadastrar' || page == 'funcionariosPerfil' || page == 'funcionariosEditar'){
        pageName.innerHTML = '<i class="fas fa-users-cog pr-2 text-pink"></i>Funcionários';
    }
    else if (page == 'comunicados' || page == 'novoComunicado' || page == 'comunicado'){
        pageName.innerHTML = '<i class="fas fa-paper-plane pr-2 text-pink"></i>comunicados  ';
    }
    else if (page == 'financeiro' || page == 'contaPagar'){
        pageName.innerHTML = '<i class="fa fa-dollar-sign pr-2 text-pink"></i>Financeiro  ';
    }
});