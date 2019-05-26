<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class pengaduans extends Controller
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
		$request->validate([
            'masalah'              =>  'required',
            'ruangan'              =>  'required',
            'jenis'              =>  'required',
            'file'     =>  'required|image|mimes:jpg,jpeg,png,gif|max:819200000'
        ]);
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
		'keterangan' => $request->masalah,
		'ruang' => $request->ruangan,
		'gambar' => $filePath,
		'created_at' => date("Y,m,d h:i:s"),
		'jenis_kerusakan' => $request->jenis
	]);
		return redirect('/home');
	}
	public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
    public function hapus($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('users_pengaduan')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/home');
	}
	public function edit($id) {
		$pengaduan= DB::table('users_pengaduan')->where('id',$id)->get();
        return view('auth.pengaduanedit',['pengaduan' => $pengaduan, 'id'=> $id]);
	}

	public function editsave(Request $request)
	{
		$request->validate([
            'masalah'         =>  'required',
            'ruangan'              =>  'required',
            'jenis'    =>  'required',
            'file'     =>  'required|image|mimes:jpg,jpeg,png,gif|max:819200000'
        ]);
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
		DB::table('users_pengaduan')->where('id',$request->id)->update([
		'email' => Auth::user()->email,
		'keterangan' => $request->masalah,
		'ruang' => $request->ruangan,
		'gambar' => $filePath,
		'created_at' => date("Y,m,d h:i:s"),
		'jenis_kerusakan' => $request->jenis
	]);
		return redirect('/home');
	}
}
