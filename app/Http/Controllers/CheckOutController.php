<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDon;

class CheckOutController extends Controller
{
    public function initPayment(Request $request)
    {
        $vnp_TmnCode = "Q9B60MZQ"; // Mã website
        $vnp_HashSecret = "INEZCVWNMKJNBTSSYUUVTUYYRKOVQNVV"; // Chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html"; // URL thanh toán
        $vnp_Returnurl = route('vnpay.return'); // URL trả về

        // Thông tin đơn hàng (bạn cần cập nhật các giá trị phù hợp)
        $vnp_TxnRef = $request->idhoadon; // Mã tham chiếu giao dịch
        $vnp_OrderInfo = 'Thanh toán đơn hàng'; // Thông tin đơn hàng
        $vnp_OrderType = 'billpayment'; // Loại hàng hóa
        $vnp_Amount = $request->tongtien; // Số tiền thanh toán
        $vnp_Locale = 'vn'; // Ngôn ngữ
        $vnp_IpAddr = request()->ip(); // IP thanh toán

        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount * 100, // Số tiền cần nhân 100 lần
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        ];

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset ($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return redirect($vnp_Url);
    }

    public function handlePaymentReturn(Request $request)
    {
        $vnp_HashSecret = "INEZCVWNMKJNBTSSYUUVTUYYRKOVQNVV"; // Chuỗi bí mật

        $inputData = $request->all();
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);

        ksort($inputData);
        $i = 0;
        $hashData = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

        if ($secureHash == $vnp_SecureHash) {
            if ($inputData['vnp_ResponseCode'] == '00') {
                // Thanh toán thành công
                $idhoadon = $inputData['vnp_TxnRef'];

                // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu

                $hoadon = HoaDon::find($idhoadon);
                if ($hoadon) {
                    $hoadon->tinhtranghoadon = 1; // Cập nhật tình trạng hoá đơn thành "Đã thanh toán"
                    $hoadon->ngaythanhtoan = now(); // Cập nhật ngày thanh toán
                    $hoadon->save();
                }

                return redirect()->route('success', ['message' => 'Thanh toán thành công']);
            } else {
                // Thanh toán thất bại
                return redirect()->route('failed', ['message' => 'Thanh toán thất bại']);
            }
        } else {
            return redirect()->route('failed', ['message' => 'Chữ ký không hợp lệ']);
        }
    }
}
