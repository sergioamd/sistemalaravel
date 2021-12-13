<?php

//use App\Http\Middleware\logAcessoMiddleware;
//use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {  //pagina raiz da aplicação
    return 'Olá seja bem vindo';
});*/
/*middleware serve para interceptar as requisiçoes e respostas do browser antes de chegar na aplicação de fato*/
//rotas principais
Route::get('/', 'LoginController@index')->name('site.index');//apelido das rotas para usar dentro da aplicação depois de ->name
Route::get('/sobrenos', 'SobreNosController@index')->name('site.sobre'); //rota sobrenos
Route::get('/contato', 'ContatoController@index')->name('site.contato'); // rota contato
Route::post('/contato', 'ContatoController@salvar')->name('site.contato'); // rota para envio de formulário
Route::get('/login/{erro?}', 'LoginController@index')->name('site.login'); // rota contato
Route::post('/login', 'LoginController@autenticar')->name('site.login');
//Route::get('/login', function(){ return 'login';})->name('site.login'); // rota contato

//agrupar as rotas para poder fazer controles de acesso com middlewares
Route::middleware('autenticacao:padrao')->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home'); 
    Route::get('/sair', 'LoginController@sair')->name('app.sair'); //fazer logout
    //cria todos os metodos padroes dos controlladores
    Route::resource('produto', 'ProdutoController');
    //rotas pedidos
    Route::resource('cliente', 'ClienteController');
    Route::resource('venda', 'VendasController');
    Route::resource('mostrar', 'MostrarVendasController');
    Route::resource('pedido', 'PedidoController');
    Route::resource('relatorio', 'RelatorioController');
    Route::resource('relatorio1', 'Relatorio1Controller');
    Route::resource('usuario', 'Usuarioscontroller');
    Route::resource('data', 'DataController');
    //Route::resource('pedido-produto', 'PedidoProdutoController');
    //Route::get('pedido-produto/create/{pedido}', 'PedidoProdutoController@create')->name('pedido-produto.create');
   // Route::post('pedido-produto/store/{pedido}', 'PedidoProdutoController@store')->name('pedido-produto.store');

});
//fim agrupamento de rotas





/*
*
*rota fallback serve para levar o usuario quando nao existir uma rota dfinida
*/
Route::fallback(function(){
    echo 'A rota acessada nao existe <a href="'.route('site.index').'">cliqe aqui</a> para ir para página principal';
});




//rota so para testes
Route::get('/teste/{p1}/{p2}', 'Testecontroller@teste')->name('teste');


/*
*redirecionamento de rotas
*/

Route::get('/rota1', function(){
 echo 'Rota1';

})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
   
   })->name('site.rota1');

   //route::redirect('rota2','rota1');

//rotas com parametros
/*Route::get('/contato/{nome}/{categoria_id}', //enviando parametros dentro das chaves
     function(
     string $nome ='Desconhecido',
     int $categoria_id = 1 //1 - informação    
         ){ 
    echo "Estamos aqui: $nome - $categoria_id"; // concatenação
  }
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); //para colocar quais dados os parametros aceitam*/



