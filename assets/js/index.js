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
    else if (page == 'comunicados' || page == 'novoComunicado' || page == 'comunicado'){
        pageName.innerHTML = '<i class="fas fa-paper-plane pr-2"></i>comunicados  ';
    }
    else if (page == 'contaReceber' || page == 'contaPagar' || page == 'cadastrarConta' || page == 'verConta'){
        pageName.innerHTML = '<i class="fa fa-dollar-sign pr-2 "></i>Financeiro  ';
    }
    else if (page == 'despesas' || page == 'receitas' || page == 'balanco' || page == 'inadiplencia'){
        pageName.innerHTML = '<i class="far fa-file-alt pr-2 "></i>Relatórios  ';
    }
});