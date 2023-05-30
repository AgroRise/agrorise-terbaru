<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1()
    {
        return view('course.course');
    }
    public function index()
    {
        $id = Auth::guard('pakar')->user()->id;
        $course = Course::where('id', $id)->get();
        return view('pakar.pengajuan-index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pakar.pengajuan');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create1()
    {
        return view('pakar.pengajuan-video');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'judul' => 'required',
            'thumbnail' => 'required',
            'jmlh_peserta' => 'required',
            'no_rekening' => 'required',
            'deskripsi' => 'required',
        ]);

        $file = $request->thumbnail->getClientOriginalName();
        $thumbnail = $request->thumbnail->storeAs('thumbnail', $file);


        Course::create([
            'pakar_id' => Auth::guard('pakar')->user()->id,
            'judul' => $request->judul,
            'thumbnail' => $thumbnail,
            'jmlh_peserta' => $request->jmlh_peserta,
            'no_rekening' => $request->no_rekening,
            'deskripsi' => $request->deskripsi
        ]);
        // $kursus = new Course;
        // $kursus->pakar_id = Auth::guard('pakar')->user()->id;
        // $kursus->judul = $request->input('judul');
        // // Simpan thumbnail ke direktori dan simpan nama file di database
        // if ($request->hasFile('thumbnail')) {
        //     $thumbnails = $request->file('thumbnail');
        //     $thumbnailNames = [];
        //     foreach ($thumbnails as $thumbnail) {
        //         $thumbnailName = $thumbnail->getClientOriginalName();
        //         $thumbnail->storeAs('thumbnails', $thumbnailName);
        //         $thumbnailNames[] = $thumbnailName;
        //     }
        //     $kursus->thumbnail = implode(',', $thumbnailNames);
        // }
        // $kursus->jmlh_peserta = $request->input('jmlh_peserta');
        // $kursus->no_rekening = $request->input('no_rekening');
        // $kursus->deskripsi = $request->input('deskripsi');
        // $kursus->save();

        // Tambahkan logika lain yang diperlukan

        return redirect()->route('pengajuan-video')->with('success', 'Data kursus berhasil disimpan!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }


    public function index2()
    {
        return view('course.contentcourse');
    }
}
