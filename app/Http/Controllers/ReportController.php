<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function myCases(User $user)
    {
        # code...
        $user = Auth::user()->id;
        $reports = Report::where("user_id", "=", $user)->get();
        return view('home', compact('reports'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexall()
    {
        $message = "No Repoerts to view";
        $reports = Report::sortable()->paginate(9);
        return view('welcome', compact('reports'))->with(['message' => $message]);
    }

    public function index()
    {
        $message = "No Repoerts to view";
        $reports = Report::sortable()->where('report_state', 'FOUNDED')->paginate(9);
        return view('reports.founded.index', compact('reports'))->with(['message' => $message]);
    }

    public function indexMissed()
    {
        //
        $message = "No Repoerts to view";
        $reports = Report::sortable()->where('report_state', 'MISSED')->paginate(9);
        return view('reports.missed.index', compact('reports'))->with(['message' => $message]);
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
            'report_state' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if ($files = $request->file('photo')) {
            $destinationPath = 'images/'; // upload path
            $reportImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $reportImage);
            $report ->photo = $reportImage;
        }
        

        if ($request->user()->report()->save($report)){
            $message = "Your Report Has Been Sent SUCCESSFULLY";
        }

        return redirect()->route('reports.founded.index')->with(['message' => $message]);  
    }

    public function createNewF()
    {
        //
        return view('reports.founded.createNew');
    }

    public function createNewM()
    {
        //
        return view('reports.missed.createNew');
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
            'report_state' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->current_place = $request['current_place'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];
        if ($files = $request->file('photo')) {
            $destinationPath = 'images/'; // upload path
            $reportImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $reportImage);
            $report ->photo = $reportImage;
        }
        

        if ($request->user()->report()->save($report)){
            $message = "Your Report Has Been Sent SUCCESSFULLY";
        }

        return redirect()->route('reports.missed.index')->with(['message' => $message]);

    }

    /**
     * showsimilar a function that show results similar to report
     * 
     */
    public function showSimilar(Request $request)
    {
        # code...
        $report_state = $request['report_state'];
        $gander = $request['gander'];
        //////////////////// personal data //30
        $name = $request['full_name'];//10
        $father_name = $request['father_name'];//5
        $mother_name = $request['mother_name'];//5
        $age = $request['age'];//10
        ////////////////////character data //20
        $body_color = $request['body_color'];//5
        $eye_color = $request['eye_color'];//5
        $hair_color = $request['hair_color'];//5
        $length = $request['length'];//5
        ////////////////////accident data //50
        $date_of_found = $request['date_of_found'];//25
        $country = $request['country'];//15
        $street = $request['street'];//10

        $reports = Report::sortable()->where('full_name', 'like', $name)
                        -> orWhere('father_name', 'like', $father_name)
                        -> orWhere('mother_name', 'like', $mother_name)
                        -> orWhere('age', 'like', $age)
                        -> orWhere('body_color', 'like', $body_color)
                        -> orWhere('eye_color', 'like', $eye_color)
                        -> orWhere('hair_color', 'like', $hair_color)
                        -> orWhere('length', 'like', $length)
                        -> orWhere('date_of_found', 'like', $date_of_found)
                        -> orWhere('country', 'like', $country)
                        -> orWhere('street', 'like', $street)->paginate(9);

        foreach ($reports as $key=>$report) {
            # code...
            $report->score = 0;
            if ($report->full_name == $name) {
                # code...
                $report->score = $report->score + 10;
            }
            if ($report->father_name == $father_name) {
                # code...
                $report->score = $report->score + 5;
            }
            if ($report->mother_name == $mother_name) {
                # code...
                $report->score = $report->score + 5;
            }
            if ($report->age == $age) {
                # code...
                $report->score = $report->score + 10;
            }
            if ($report->body_color == $body_color) {
                # code...
                $report->score = $report->score + 5;
            }
            if ($report->eye_color == $eye_color) {
                # code...
                $report->score = $report->score + 5;
            }
            if ($report->hair_color == $hair_color) {
                # code...
                $report->score = $report->score + 5;
            }
            if ($report->length == $length) {
                # code...
                $report->score = $report->score + 5;
            }
            if ($report->date_of_found == $date_of_found) {
                # code...
                $report->score = $report->score + 25;
            }
            if ($report->country == $country) {
                # code...
                $report->score = $report->score + 15;
            }
            if ($report->street == $street) {
                # code...
                $report->score = $report->score + 5;
            }
            $report->save();
        }

        $reports = Report::sortable(['score' => 'desc'])->where('score', '>=', 50)
                        ->where('gander', 'like', $gander)
                        ->paginate(9);

        if ($reports->isEmpty()){
            if($report_state=="FOUNDED"){
                return $this->store($request);
            }
            else{
                return $this->storeMissed($request);
            }
        }
        else{
            return view('reports.results', compact('reports') );
        }
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
        $report = Report::with(['user'])->find($id);
        return view('reports.index', compact('report'));
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
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if ($files = $request->file('photo')) {
            $destinationPath = 'images/'; // upload path
            $reportImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $reportImage);
        }
        $report ->photo = $reportImage;

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
        $report ->date_of_found = $request['date_of_found'];
        $report ->country = $request['country'];
        $report ->street = $request['street'];
        $report ->accident = $request['accident'];
        $report ->report_state = $request['report_state'];

        if ($files = $request->file('photo')) {
            $destinationPath = 'images/'; // upload path
            $reportImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $reportImage);
        }
        $report ->photo = $reportImage;
        
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

    public function searchall(Request $request)
    {
        # code...
        $name = $request['name'];
        $date = $request['date_of_found'];        
        $age = $request['age'];
        $message = "NO RESULTS";
        $reports = Report::sortable()->where('full_name', 'like', '%'.$name.'%')
                        -> where('age', 'like', $age)
                        -> where('date_of_found', 'like', $date)->paginate(9);
        return view('welcome', compact('message', 'reports') );
        
        
    }

    public function search(Request $request)
    {
        # code...
        $name = $request['name'];
        $date = $request['date_of_found'];        
        $age = $request['age'];
        $message = "NO RESULTS";
        $reports = Report::sortable()->where('report_state', 'FOUNDED')->where('full_name', 'like', '%'.$name.'%')
                        -> where('age', 'like', $age)
                        -> where('date_of_found', 'like', $date)->paginate(9);
        return view('reports.founded.index', compact('message','reports') );
    }

    public function searchMissed(Request $request)
    {
        # code...
        $name = $request['name'];
        $date = $request['date_of_found'];
        $age = $request['age'];
        $message = "NO RESULTS";
        $reports = Report::sortable()->where('report_state', 'MISSED')->where('full_name', 'like', '%'.$name.'%')
                    -> where('age', 'like', $age)
                    -> where('date_of_found', 'like', '%'.$date.'%')->paginate(9);
        return view('reports.missed.index', compact('message','reports') );
    }
}

