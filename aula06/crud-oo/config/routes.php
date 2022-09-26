<?php

function render(string $filename, array $data=[]): void
{
    extract($data);

    //include dirname(__DIR__)."/src/views/{$filename}.phtml";
    include_once dirname(__DIR__).'/src/views/_components/head.phtml';
    include_once dirname(__DIR__).'/src/views/_components/navbar.phtml';
    
    include dirname(__DIR__)."/src/views/{$filename}.phtml";

    include_once dirname(__DIR__).'/src/views/_components/footer.phtml';
}

match($url[0]){
    '/' => render('home'),
    '/nova-bebida' => render('bebidas/add'),
    '/listar-bebidas' => render('bebidas/listar'),
    '/excluir-bebida' => render('bebidas/excluir'),
    '/editar-bebida' => render('bebidas/editar'),

    // '/categorias/listar' => render('categorias/list'),
      // '/categorias/adicionar' => render('categorias/add'),

    '/categorias/listar' => (new CategoryController())->list(),  
    '/categorias/adicionar' => (new CategoryController())->add(),
    '/categorias/excluir' => (new CategoryController())->del(),
    '/categorias/editar' => (new CategoryController())->edit(),

    default => include render('erro404'),
};