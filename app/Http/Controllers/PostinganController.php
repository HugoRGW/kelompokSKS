<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\TermsCondition;
use App\Models\DeletedPost;
use App\Models\Postingan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function postingan(Request $request)
    {
        $keyword = $request->keyword;
        $data = postingan::with('kategori')->where('judul', 'LIKE', '%' . $keyword . '%')
        ->join('users', 'postingans.user_id', '=', 'users.id')
        ->select('postingans.id', 'postingans.thumbnail','postingans.kategori_id', 'users.name', 'postingans.created_at', 'postingans.judul', 'postingans.deskripsi')
            ->where('postingans.status', 'pending')
            // ->where('users.is_banned',false)
            ->orderBy('postingans.updated_at', 'desc')
            ->paginate(10);
        $datauser = User::all();
        $datakategori = Category::all();


        return view('admin.Postingan.index', compact('data', 'datauser', 'datakategori',));
    }

    public function diterima(Request $request)
    {
        ($request->myCheckbox);
        if ($request->has('myCheckbox')) {
            foreach ($request->myCheckbox as $row) {
                postingan::where('id',$row)->update([
                    'status' => 'diterima'
                ]);
            }
            return redirect('terima')->with('success', 'Postingan Berhasil Diterima');
        } else {
            return redirect()->back()->with('error', 'Tidak ada postingan yang dipilih');
        }
    }

    public function ditolak(Request $request,$id)
    {
        $data = postingan::find($id);
        $data->update(
            [
                'status' => 'ditolak'
            ]
        );
        $data = postingan::find($id);
        $deletedPost = new DeletedPost();
        $deletedPost->user_id = $data->user_id;
        $deletedPost->judul = $data->judul;
        $deletedPost->content ="postigan anda judul ".$data->judul." kami tolak karena ". $request->pesan;
        $deletedPost->foto=$data->thumbnail;
        $deletedPost->post_id=$data->id;
        $deletedPost->save();
        
        return response()->json(['success' => 'Berhasil Menolak'],200);
        }

        public function lihat($id)
{
    $data = postingan::findOrFail($id);
        

    return view('admin.postingan.lihat', compact('data'));
}

public function terima(Request $request)
{
    $keyword = $request->keyword;
    $data = postingan::where('judul', 'LIKE', '%' . $keyword . '%')
    ->join('users', 'postingans.user_id', '=', 'users.id')
    ->select('postingans.id', 'postingans.thumbnail','postingans.kategori_id', 'users.name', 'postingans.created_at', 'postingans.judul', 'postingans.deskripsi')
        ->where('postingans.status', 'diterima')
        ->orderBy('postingans.updated_at', 'desc')
        ->paginate(10);
    $datauser = User::all();
    $datakategori = Category::all();

    return view('admin.postingan.terima', compact('data', 'datauser', 'datakategori',));
}

    public function  posts(Request $request, $id)
    {
        $keyword = $request->key;
        $notif = DeletedPost::where('user_id', $id)->count();
        $data = Postingan::where('judul', 'like', '%' . $keyword . '%');
        $data = Postingan::where('user_id', $id)
            ->where('status','=','diterima')
            ->paginate(5);
        $user = Auth::user();
        if ($user->id != $id) {
            return view('error.403');
        }
        $notifications= DeletedPost::where('user_id', $id)->whereNull('read_at')->orderBy('created_at', 'desc')->get();
        $notifications = DB::table('deleted_posts')
    ->where('user_id', Auth::id())
    ->whereNull('read_at')
    ->get();

$unreadCount = count($notifications);

        return view('ketua.index', ['data' => $data, 'notif' => $notif], compact('data', 'notif','unreadCount'));
    }

    public function deletepost($id)
    {
        $data = postingan::find($id);
        if (file_exists(public_path('thumbnail/' . $data->thumbnail))) {
            unlink(public_path('thumbnail/' . $data->thumbnail));
        }
        $deletedPost = new DeletedPost();
        $deletedPost->user_id = $data->user_id;
        $deletedPost->judul = $data->judul;
        $deletedPost->content = 'telah admin hapus karena melanggar aturan komunitas';
        $deletedPost->save();
        $data->delete();
        return redirect()->back()->with('success', 'data Berhasil Di Hapus');
    }

    public function  pending(Request $request, $id)
    {
        $keyword = $request->key;
        $notif = DeletedPost::where('user_id', $id)->count();
        $data = Postingan::where('judul', 'like', '%' . $keyword . '%');
        $data = Postingan::where('user_id', $id)
        ->where('status', 'pending')
            ->paginate(10);
            $user = Auth::user();
            if (!$user || $user->id != $id) {
                return view('error.403');
            }
        $notifications= DeletedPost::where('user_id', $id)->whereNull('read_at')->orderBy('created_at', 'desc')->get();
        $notifications = DB::table('deleted_posts')
    ->where('user_id', Auth::id())
    ->whereNull('read_at')
    ->get();

$unreadCount = count($notifications);

        return view('ketua.pending', ['data' => $data, 'notif' => $notif], compact('data','user', 'notif','unreadCount'));
    }
   
    public function tolak(Request $request,$id)
    {
        $keyword = $request->key;
        $notif = DeletedPost::where('user_id', $id)->count();
        $data = Postingan::where('judul', 'like', '%' . $keyword . '%');
        $data = Postingan::where('user_id', $id)
        ->where('status', 'ditolak')
            ->paginate(5);
        $user = Auth::user();
        if ($user->id != $id) {
            return view('error.403');
        }

        $notifications= DeletedPost::where('user_id', $id)->whereNull('read_at')->orderBy('created_at', 'desc')->get();
        $notifications = DB::table('deleted_posts')
    ->where('user_id', Auth::id())
    ->whereNull('read_at')
    ->get();

$unreadCount = count($notifications);

        return view('ketua.ditolak', ['data' => $data, 'notif' => $notif], compact('data', 'notif','unreadCount'));
    }
    
    public function tambah()
    {
        $datauser = User::all();
        $termsAndConditions = TermsCondition::all();
        $dtkategori = Category::all();
        $data = postingan::all();
        $notifications = DB::table('deleted_posts')
        ->where('user_id', Auth::id())
        ->whereNull('read_at')
        ->get();
        $unreadCount = count($notifications);
        return view('ketua.tambah', compact('datauser','data', 'dtkategori','notifications','unreadCount','termsAndConditions'));

    }
    public function insertdatapost(request $request)
    {
        // dd($request->all());
        $validatedata = $request->validate([
            'judul' => 'required|max:65',
            'konten' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg,jfif',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'agree' => 'required',

        ]);
        $data = Postingan::create($request->all());

        if ($request->hasFile('thumbnail')) {
            $imageName = time() . '_' . Str::random(10) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $request->file('thumbnail')->move('thumbnail/', $imageName);
            $data->thumbnail = $imageName;
            $data->save();
        }
        $notifications = DB::table('deleted_posts')
    ->where('user_id', Auth::id())
    ->whereNull('read_at')
    ->get();

$unreadCount = count($notifications);
        return redirect()->route('pending', $data->user_id)->with('success', 'data Berhasil Ditambahkan',compact('unreadCount'));
    }

    public function tampilkandatapostingan($id)
    {
        $data = postingan::with('kategori')->find($id);
        $user_id = User::all();
        $dtkategori = Category::all();
        $kt = postingan::with('kategori')->find($id);
        if ($data->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $notifications= DeletedPost::where('user_id', $id)->whereNull('read_at')->orderBy('created_at', 'desc')->get();
        $notifications = DB::table('deleted_posts')
    ->where('user_id', Auth::id())
    ->whereNull('read_at')
    ->get();

$unreadCount = count($notifications);

        // dd($data);
        return view('ketua.edit', compact('data', 'user_id', 'dtkategori', 'kt','unreadCount'));
    }
    public function updt(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required',
        'konten' => 'required',
        'deskripsi' => 'required',
        'kategori_id' => 'required',
        'user_id' => 'required',
        'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi file gambar
    ]);

    $data = Postingan::with('kategori')->find($id);
    $data->update([
        'judul' => $validatedData['judul'],
        'konten' => $validatedData['konten'],
        'deskripsi' => $validatedData['deskripsi'],
        'kategori_id' => $validatedData['kategori_id'],
        'status' => 'pending',
        'user_id' => $validatedData['user_id']
    ]);

    if ($request->hasFile('thumbnail')) {
        unlink(public_path('thumbnail/' . $data->thumbnail));
        $imageName = time() . '_' . Str::random(10) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
        $request->file('thumbnail')->move('thumbnail/', $imageName);
        $data->thumbnail = $imageName;
        $data->save();
    }

    return redirect()->route('pending', $data->user_id)->with('success', 'Data Berhasil Di Update');
}

    public function deletepostingan($id)
    {
        $data = postingan::find($id);
        // Hapus file foto dari server
        if (file_exists(public_path('thumbnail/' . $data->thumbnail))) {
            unlink(public_path('thumbnail/' . $data->thumbnail));
        }

        $data->delete();

        return redirect()->back()->with('success', 'Post berhasil dihapus.');
    }

    public function show($id)
    {
        $data = postingan::findOrFail($id);
        $notifications= DeletedPost::where('user_id', $id)->whereNull('read_at')->orderBy('created_at', 'desc')->get();
        $notifications = DB::table('deleted_posts')
        ->where('user_id', Auth::id())
        ->whereNull('read_at')
        ->get();
        
        $unreadCount = count($notifications);
        if ($data->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
        $notifications= DeletedPost::where('user_id', $id)->whereNull('read_at')->orderBy('created_at', 'desc')->get();
        $notifications = DB::table('deleted_posts')
    ->where('user_id', Auth::id())
    ->whereNull('read_at')
    ->get();
    $unreadCount = count($notifications);  
          return view('ketua.show', compact('data','unreadCount','unreadCount'));
    }

}
