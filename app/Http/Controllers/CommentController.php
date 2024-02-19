<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;
use App\Xe;
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
        // Lấy thông tin của xe
        $xe = Xe::find($id);

        // Kiểm tra xem người dùng đã có comment cho xe này chưa
        $existingComment = Comment::where('iduser', Auth::user()->id)
            ->where('idxes', $id)
            ->first();

        if ($existingComment) {
            // Nếu đã có comment, bạn có thể từ chối comment mới hoặc ghi đè comment cũ tùy thuộc vào logic của bạn
            // Ví dụ ghi đè comment cũ bằng comment mới
            $existingComment->NoiDung = $request->NoiDung;
            $existingComment->save();

            return back()->with('thongbao', 'Đã cập nhật comment thành công');
        }

        $comment = new Comment;
        $comment->idxes = $id;
        $comment->iduser = Auth::user()->id;
        $comment->NoiDung = $request->NoiDung;
        $comment->save();

        return back()->with('thongbao', 'Viết bình luận thành công');
    }

}

?>