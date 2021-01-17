<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //orderBy('date_of_found', 'asc')->
        //$reports = Report::all();
        $reports = Report::sortable()->where('report_state', 'FOUNDED')->paginate(5);
        return view('reports.founded.index', compact('reports'));
    }

    public function indexMissed()
    {
        //
        //$reports = Report::all();
        $reports = Report::sortable()->where('report_state', 'MISSED')->paginate(5);
        return view('reports.missed.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reports.founded.create');
    }

    public function createMissed()
    {
        //
        return view('reports.missed.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this -> validate($request, [
            'gander' => 'required',
            'date_of_found' => 'required',
            'country' => 'required',
            'street' => 'required',
            'accident' => 'required|min:50',
            'report_state' => 'required'
        ]
        );
        $report = new Report();
        $report ->full_name = $request['full_name'];
        $report ->father_name = $request['father_name'];
        $report ->mother_name = $request['mother_name'];
        $report ->age = $request['age'];
        $report ->gander = $request['gander'];
        $report ->body_color = $request['body_color'];
        $report ->eye_color = $request['eye_color'];
        $report ->hair_color = $request['hair_color'];
        $report ->length = $request['length'];
        $report ->special_characterstics = $request['special_characterstics'];
        //$report ->photo = $request['photo'];
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if ($request->user()->report()->save($report)){
            $message = "Your Report Has Been Sent SUCCESSFULLY";
        }

        return redirect()->route('reports.founded.index')->with(['message' => $message]);

    }

    public function storeMissed(Request $request)
    {
        //
        $this -> validate($request, [
            'gander' => 'required',
            'date_of_found' => 'required',
            'country' => 'required',
            'street' => 'required',
            'accident' => 'required|min:50',
            'report_state' => 'required'
        ]
        );
        $report = new Report();
        $report ->full_name = $request['full_name'];
        $report ->father_name = $request['father_name'];
        $report ->mother_name = $request['mother_name'];
        $report ->age = $request['age'];
        $report ->gander = $request['gander'];
        $report ->body_color = $request['body_color'];
        $report ->eye_color = $request['eye_color'];
        $report ->hair_color = $request['hair_color'];
        $report ->length = $request['length'];
        $report ->special_characterstics = $request['special_characterstics'];
        //$report ->photo = $request['photo'];
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if ($request->user()->report()->save($report)){
            $message = "Your Report Has Been Sent SUCCESSFULLY";
        }

        return redirect()->route('reports.missed.index')->with(['message' => $message]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $report = Report::find($id);
        if(Auth::user() != $report->user){
            return redirect()->back();
        }
        
        return view('reports.founded.edit', compact('report'));
    }

    public function editMissed($id)
    {
        //
        $report = Report::find($id);
        if(Auth::user() != $report->user){
            return redirect()->back();
        }
        
        return view('reports.missed.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this -> validate($request, [
            'gander' => 'required',
            'date_of_found' => 'required',
            'country' => 'required',
            'street' => 'required',
            'accident' => 'required|min:50',
            'report_state' => 'required'
        ]
        );
        $report = Report::find($id);
        $report ->full_name = $request['full_name'];
        $report ->father_name = $request['father_name'];
        $report ->mother_name = $request['mother_name'];
        $report ->age = $request['age'];
        $report ->gander = $request['gander'];
        $report ->body_color = $request['body_color'];
        $report ->eye_color = $request['eye_color'];
        $report ->hair_color = $request['hair_color'];
        $report ->length = $request['length'];
        $report ->special_characterstics = $request['special_characterstics'];
        //$report ->photo = $request['photo'];
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if(Auth::user() == $report->user){
        
        
            if ($request->user()->report()->save($report)){
                $message = "Your Report Has Been Updated SUCCESSFULLY";
            }

            return redirect()->route('reports.founded.index')->with(['message' => $message]);
        }
    }

    public function updateMissed(Request $request, $id)
    {
        //
        $this -> validate($request, [
            'gander' => 'required',
            'date_of_found' => 'required',
            'country' => 'required',
            'street' => 'required',
            'accident' => 'required|min:50',
            'report_state' => 'required'
        ]
        );
        $report = Report::find($id);
        $report ->full_name = $request['full_name'];
        $report ->father_name = $request['father_name'];
        $report ->mother_name = $request['mother_name'];
        $report ->age = $request['age'];
        $report ->gander = $request['gander'];
        $report ->body_color = $request['body_color'];
        $report ->eye_color = $request['eye_color'];
        $report ->hair_color = $request['hair_color'];
        $report ->length = $request['length'];
        $report ->special_characterstics = $request['special_characterstics'];
        //$report ->photo = $request['photo'];
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if(Auth::user() == $report->user){
        
        
            if ($request->user()->report()->save($report)){
                $message = "Your Report Has Been Updated SUCCESSFULLY";
            }

            return redirect()->route('reports.missed.index')->with(['message' => $message]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $report = Report::where('id', $id)->first();
        if(Auth::user() != $report->user){
            return redirect()->back();
        }
        $report->delete();
        return redirect()->route('reports.founded.index')->with(['message' => 'Your Report Has Been Deleted SUCCESSFULLY']);
    }

    public function destroyMissed($id)
    {
        //
        $report = Report::where('id', $id)->first();
        if(Auth::user() != $report->user){
            return redirect()->back();
        }
        $report->delete();
        return redirect()->route('reports.missed.index')->with(['message' => 'Your Report Has Been Deleted SUCCESSFULLY']);
    }

    public function search(Request $request)
    {
        # code...
        $name = $request['name'];
        $date = $request['date_of_found'];        
        $age = $request['age'];
        
        $reports = Report::sortable()->where('report_state', 'FOUNDED')->where('full_name', 'like', '%'.$name.'%')
                        -> where('age', 'like', $age)
                        -> where('date_of_found', 'like', $date)->paginate(5);
        if($reports->isEmpty())
        {
            $message = "NO RESULTS";
            return redirect()->route('reports.founded.index')->with(['message' => $message]);

        }
        return view('reports.founded.index', compact('reports') );
    }

    public function searchMissed(Request $request)
    {
        # code...
        $name = $request['name'];
        $date = $request['date_of_found'];
        $age = $request['age'];
            
        $reports = Report::sortable()->where('report_state', 'MISSED')->where('full_name', 'like', '%'.$name.'%')
                    -> where('age', 'like', $age)
                    -> where('date_of_found', 'like', '%'.$date.'%')->paginate(5);
    
        if($reports->isEmpty())
        {
            $message = "NO RESULTS";
            return redirect()->route('reports.missed.index')->with(['message' => $message]);

        }
        return view('reports.missed.index', compact('reports') );
    }
}

