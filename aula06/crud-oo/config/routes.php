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
    '/bebidas/listar' => (new BebidasController())->list(),
    '/bebidas/nova'   => (new BebidasController())->add(),
    '/bebidas/excluir'   => (new BebidasController())->del(),
    '/bebidas/editar'   => (new BebidasController())->edit(),

    //'/nova-bebida' => render('bebidas/add'),    
    //'/excluir-bebida' => render('bebidas/excluir'),
    //'/editar-bebida' =>  render('bebidas/editar'),

    // '/categorias/listar' => render('categorias/list'),
      // '/categorias/adicionar' => render('categorias/add'),

    '/categorias/listar' => (new CategoryController())->list(),  
    '/categorias/adicionar' => (new CategoryController())->add(),
    '/categorias/excluir' => (new CategoryController())->del(),
    '/categorias/editar' => (new CategoryController())->edit(),

    default => include render('erro404'),
};