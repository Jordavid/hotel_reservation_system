<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title as Title;
use App\Client;


class ClientController extends Controller
{

    public function __construct( Title $titles )
    {
        $this->titles = $titles->all();
    }

    public function index()
    {
        $clients = Client::all();

        return view('client.index', compact('clients'));
    }

    public function newClient(Client $client)
    {
        $clientRecords = $client;
        $titles = $this->titles;
        $modify = 0;
        return view('client.form', compact('titles', 'modify', 'clientRecords'));
    }

    public function create(Client $client, Request $request)
    {
        $this->validateForm($request);


        $client->insert(request(['title','name', 'last_name', 'address', 'zip_code', 'city', 'state', 'email']));
        
        return redirect('/clients');
    }

    public function show($client)
    {
        $clientRecords = Client::findOrFail($client);
        $titles = $this->titles;
        $modify = 1;
        return view('client.form', compact('titles', 'modify', 'clientRecords'));
    }

    public function update(Request $request, Client $client)
    {
        $this->validateForm($request);

        $client = Client::findOrFail($client->id);
           
        $client->update(request(['title','name', 'last_name', 'address', 'zip_code', 'city', 'state', 'email']));
        
        return redirect('/clients');
    }

    public function validateForm(Request $request)
    {
        $validated = $this->validate($request, [
            'title' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'state' => 'required',
            'email' => 'required'
        ]);

        return $validated;
    }
}
