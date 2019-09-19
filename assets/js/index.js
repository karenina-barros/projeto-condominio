window.addEventListener('load', function(){
    let queryString = window.location.search;
    let page = queryString.replace('?page=', '');
    let pageName = document.querySelector('#page');
    
    if(page == 'moradores' || page == 'moradoresCadastrar' || page == 'moradoresPerfil'){
        pageName.innerHTML = '<i class="fas fa-users pr-2"></i>Moradores';
    } 
    else if (page == 'funcionarios' || page == 'funcionariosCadastrar' || page == 'funcionariosPerfil' || page == 'funcionariosEditar'){
        pageName.innerHTML = '<i class="fas fa-users-cog pr-2"></i>Funcionários';
    }
    else if (page == 'comunicados' || page == 'novoComunicado'){
        pageName.innerHTML = '<i class="fas fa-paper-plane pr-2"></i>comunicados  ';
    }
});