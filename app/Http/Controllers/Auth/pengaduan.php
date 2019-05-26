<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Traits\UploadTrait;
class pengaduan extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$pengaduan= DB::table('users_pengaduan')->get();
        return view('home',['pengaduan' => $pengaduan]);
    }
    public function lapor()
    {
    	//$pengaduan= DB::table('users_pengaduan')->get();
        return view('auth.pengaduan');
    }
    public function store(Request $request)
	{
		if ($request->has('file')) {
            // Get image file
            $image = $request->file('file');
            // Make a image name based on user name and current timestamp
            $name = str_slug(Auth::user()->email.'_'.time());
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
        }
		DB::table('users_pengaduan')->insert([
		'email' => Auth::user()->email,
		'keterangan' => $request->jabatan,
		'ruang' => $request->ruangan,
		'gambar' => str_slug($request->Auth::user()->email.'_'.time()),
		'created_at' => time(),
		'jenis_kerusakan' => $request->jenis
	]);
		return redirect('/home');
	}

}
