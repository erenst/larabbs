<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // 获取登录用户的所有未读的通知
        $notifications = Auth::user()->unreadNotifications()->paginate(20);
        // 标记为已读，未读数量清零
        Auth::user()->markAsRead();

        return view('notifications.index', compact('notifications'));
    }
}