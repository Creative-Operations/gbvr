<?php
    
namespace App\Http\Controllers;
    
use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

    
class IncidentController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:incident-list|incident-create|incident-edit|incident-delete', ['only' => ['index','show']]);
         $this->middleware('permission:incident-create', ['only' => ['create','store']]);
         $this->middleware('permission:incident-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:incident-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Incident::latest()->paginate(5);
        return view('incidents.index',compact('incidents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incidents.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'victim' => 'required',
            'location' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'attack_type' => 'required',
            'attacker' => 'required',
            'description' => 'required',
        ]);
     
        $formFields['user_id'] = Auth::id();

        Incident::create($formFields);

        return redirect()->route('incidents.index')
                        ->with('success','Incident created successfully.');   
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Incident $incident)
    {
        return view('incidents.show',compact('incident'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Incident $incident)
    {
        return view('incidents.edit',compact('incident'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incident $incident)
    {
         request()->validate([
            'victim' => 'required',
            'mobile' => 'required',
            'location' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'attack_type' => 'required',
            'attacker' => 'required',
            'description' => 'required',
        ]);
    
        $incident->update($request->all());
    
        return redirect()->route('incidents.index')
                        ->with('success','Incident updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incident $incident)
    {
        $incident->delete();
    
        return redirect()->route('incidents.index')
                        ->with('success','Incident deleted successfully');
    }

}