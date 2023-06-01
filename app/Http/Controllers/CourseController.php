<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index1()
    {
    }



    public function index()
    {
        $pakar_id = Auth::guard('pakar')->user()->id;
        $courses = Course::where('pakar_id', $pakar_id)->get();
        return view('pakar.pengajuan-index', compact('courses'));
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
            'judul' => 'required|max:50',
            'thumbnail' => 'required|mimes:png,jpg,jpeg',
            'jmlh_peserta' => 'required',
            'no_rekening' => 'required',
            'deskripsi' => 'required|max:300',
            'harga' => 'required',
            'pertemuan' => 'required',
            'title.*' => 'required', // tambahkan validasi untuk judul video
            'link.*' => 'required' // tambahkan validasi untuk link video
        ]);

        $thumbnail =  $request->thumbnail->getClientOriginalName();
        $file = $request->thumbnail->storeAs('thumbnail', $thumbnail);

        $harga = str_replace(['.', ',', 'Rp'], '', $request->harga);
        $harga = intval($harga);

        $course = Course::create([
            'pakar_id' => Auth::guard('pakar')->user()->id,
            'judul' => $request->judul,
            'thumbnail' => $file,
            'jmlh_peserta' => $request->jmlh_peserta,
            'no_rekening' => $request->no_rekening,
            'pertemuan' => $request->pertemuan,
            'deskripsi' => $request->deskripsi,
            'harga' => $harga
        ]);

        $videos = [];

        // Menyimpan video-video yang ditambahkan
        if (!empty($request->title) && is_array($request->title) && !empty($request->link) && is_array($request->link)) {
            for ($i = 0; $i < count($request->title); $i++) {
                $video = new Video([
                    'title' => $request->title[$i],
                    'link' => $request->link[$i],
                    'course_id' => $course->id
                ]);

                $video->save();
                $videos[] = $video;
            }
        }

        return redirect()->route('pengajuan-index')->with('success', 'Data kursus berhasil disimpan!');
    }




    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        
    }

    public function show1()
    {
        $courses = Course::all();
        return view('course.course', compact('courses'));
    }

    public function show2(Course $course)
    {
        $videos = $course->videos;
        return view('course.contentcourse', compact('course','videos'));
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
        $course->videos()->delete(); // Menghapus video terkait
        $course->delete(); // Menghapus kursus
        return redirect()->back();
    }


    public function index2(Course $course)
    {
        $videos = Video::where('course_id', $course->id)->get();
        return view('course.contentcourse', compact('course','videos'));
    }

}
