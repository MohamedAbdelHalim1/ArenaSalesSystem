<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::where('user_id', Auth::id())->get();
        return view('dashboard', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'business_type' => 'required'
        ]);

        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'brand_name' => $request->brand_name,
            'business_type' => $request->business_type,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Client added successfully!');
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'business_type' => 'required'
        ]);

        $client->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Client updated successfully!');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('dashboard')->with('success', 'Client deleted successfully!');
    }
    public function sales()
    {
        $users = User::withCount('clients')->get();
        return view('clients.sales', compact('users'));
    }

    public function userClients(User $user)
    {
        // Fetch clients belonging to the specific user
        $clients = $user->clients;
        
        // Return the view with the client's data
        return view('clients.user-clients', compact('user', 'clients'));
    }


}
