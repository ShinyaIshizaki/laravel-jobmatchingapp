<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //jobsテーブルから全ての仕事を抽出する
        $jobs = DB::table('jobs')->get();

        //仕事一覧を表示する
        return view('jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        $param = ['id' => $job->id];

        //jobsテーブルから該当する仕事を抽出する
        $job = DB::select('select * from jobs where id = :id', $param);
    
        //仕事の詳細画面を表示する
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }

    /**
     * Contact from contact forms.
     */
    public function confirm(Request $request)
    {
        //リクエストから値を受け取る
        $contactName = $request->contactPersonName;
        $contactEmail = $request->contactPersonEmail;
        $msg = $request->contactMsg;
        $data = [
            'subtitle' => '確認画面',
            'request' => $request,
        ];

        //確認画面を返却する
        return view('jobs.confirm', $data);
    }
}
