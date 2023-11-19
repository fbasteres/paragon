<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth', ['only' => ['show']]);
        //$this->middleware('auth', ['except' => ['show', 'create']]);
    }
    
    public function index(){
            $usuarix = User::with('area')->get();
            return view('User.index', compact('usuarix'));
    }

  
    public function create(User $user)
    {
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $request)
    {
        return view('user.create', compact('user'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        return redirect()->route('admin.roles.index')->with('success', 'Permiso editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Permiso eliminado correctamente');
    }

}
