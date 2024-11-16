<?php
    
namespace App\Http\Controllers;
    
use App\Models\Forensic;
use App\Models\Incident;
use Illuminate\Http\Request;
    
class ForensicController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:forensic-list|forensic-create|forensic-edit|forensic-delete', ['only' => ['index','show']]);
         $this->middleware('permission:forensic-create', ['only' => ['create','store']]);
         $this->middleware('permission:forensic-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:forensic-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forensics = Forensic::latest()->paginate(5);
        return view('forensics.index',compact('forensics'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incidents = Incident::all();
        //return view('forensics.create');
        return view('forensics.create', compact('incidents'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'remarks' => 'required',
           
        ]);
    
        Forensic::create($request->all());
    
        return redirect()->route('forensics.index')
                        ->with('success','Forensic created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Forensic $forensic)
    {
        return view('forensics.show',compact('forensic'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Forensic $forensic)
    {
       // $forensic = Forensic::with('incident')->findOrFail($forensic);
        $incident = Incident::where('id', true)->get();
    
        return view('forensics.edit', compact('forensic','incident'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forensic $forensic)
    {
         request()->validate([
            'remarks' => 'required',
        ]);
    
        $forensic->update($request->all());
    
        return redirect()->route('forensics.index')
                        ->with('success','Forensic updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forensic $forensic)
    {
        $forensic->delete();
    
        return redirect()->route('forensics.index')
                        ->with('success','Forensic deleted successfully');
    }
}