<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\Http\Requests\StorePost as StorePostRequest;
use App\Http\Requests\UpdatePost as UpdatePostRequest;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::latest()->paginate(10);


        return view('produtos.index',compact('produtos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('produtos.createOrEdit');
    }

    public function store(StorePostRequest $request)
    {
        $data = $request->only('descricao', 'valor', 'quantidade');
        $data['valor'] = (float)preg_replace('/\D/', '',$request->valor)/100;
        $data['user_id'] = Auth::user()->getAuthIdentifier();
        Produto::create($data);

        Session::flash('flash_message','Produto criado com sucesso!');

        return redirect("produtos");
    }

    public function edit(Produto $produto)
    {
        return view('produtos.createOrEdit', compact('produto'));
    }

    public function update(Produto $produto, UpdatePostRequest $request)
    {
        $data = $request->only('descricao', 'valor', 'quantidade');
        $data['valor'] = (float)preg_replace('/\D/', '',$request->valor)/100;
        $produto->fill($data)->save();
        Session::flash('flash_message','Produto atualizado com sucesso!');

        return redirect("produtos");
    }

    public function show(Produto $produto)
    {
        return view('produtos.show',compact('produto'));
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        Session::flash('flash_message','Produto deletado com sucesso!');

        return redirect("produtos");
    }
}
