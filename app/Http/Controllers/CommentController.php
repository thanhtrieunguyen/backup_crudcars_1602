<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Comment;
use App\Models\Xe;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function getXoa($id, $idxes)
    {

        $comment = Comment::find($id);
        $comment->delete();
        return response('admin/xe/edit/' . $idxes)->with('thongbao', 'Xoá comment thành công');
    }
    public function postComment($id, Request $request)
    {
        $commentData = $request->all();
        $commentData['iduser'] = auth()->id();
        $comment = Comment::create($commentData);
        
        return back()->with(['thong-bao', 'Viết bình luận thành công', 'type' => 'success']);
    }

}

?>