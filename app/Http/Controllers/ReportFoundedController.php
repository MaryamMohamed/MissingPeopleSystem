<?php

namespace App\Http\Controllers;
use App\Models\ReportFounded;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportFoundedController extends Controller
{
    public function getWelcome(Type $var = null)
    {
        # code...
        $reports = ReportFounded::all();
        return view('welcome', ['reports' => $reports ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
            'state' => 'required'
        ]
        );
        $report = new ReportFounded();
        $report ->full_name = $request['full_name'];
        $report ->father_name = $request['father_name'];
        $report ->mother_name = $request['mother_name'];
        $report ->age = $request['age'];
        $report ->birth_date = $request['birth_date'];
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
        $report ->state = $request['state'];

        if ($request->user()->reportsFounded()->save($report)){
            $message = "Your Report Has Been Sent SUCCESSFULLY";
        }

        return redirect()->route('welcome')->with(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showFounded()
    {
        //
        return view('foundedFolder.report');
    }

    public function showMissed()
    {
        //
        return view('missedFolder.report');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getAReport($id)
    {
        # code...
        $report = ReportFounded::where('id', $id)->first();
        return view('foundedFolder.areport', ['report' => $report], compact('id'));
    }

    public function edit($id)
    {
        //
        $report = ReportFounded::where('id', $id)->first();
        if(Auth::user() != $report->user){
            abort(403);
        }
        return view('foundedFolder.edit', ['report' => $report], compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReportFounded $report, $id)
    {
        //
        $attributes = request()->validate([
            'full_name' => ['string'],
            'father_name' => ['string'],
            'mother_name' => ['string'],
            'age' => ['integer'],
            'birth_date' => ['date'],
            'gander' => ['string', 'required'],
            'body_color' => ['string'],
            'eye_color' => ['string'],
            'hair_color' => ['string'],
            'length' => ['integer'],
            'special_characterstics' => ['string'],
            //'photo' => ['string'],
            'date_of_found' => ['date', 'required'],
            'country' => ['string', 'required'],
            'street' => ['string', 'required'],
            'accident' => ['string', 'required', 'min:50'],
            
        ]);
        $report->update($attributes);

        //return redirect($report->path(), id);
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
        $report = ReportFounded::where('id', $id)->first();
        if(Auth::user() != $report->user){
            return redirect()->back();
        }
        $report->delete();
        return redirect()->route('welcome')->with(['message' => 'Your Report Has Been Deleted SUCCESSFULLY']);
    }

}
