<?php

namespace Modules\Notifications\Http\Controllers\Api;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Support\Traits\ApiTrait;
use Modules\Notifications\Transformers\NotificationsResource;

class NotificationsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests, ApiTrait;

    /**
     * Display a listing of the Notifications.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // $unread_notifications = auth()->user()->unreadNotifications;
        // $read_notifications = auth()->user()->readNotifications;
        $notifications = auth()->user()->notifications()
            ->orderBy('created_at', 'desc')
            ->get();

        if (count($notifications) > 0) {
            $data = NotificationsResource::collection($notifications)->response()->getData(true);
            return $this->sendResponse($data, 'success');
        }

        return $this->sendError(__('Sorry not found'));
    }


    public function read(Request $request)
    {
        $notification = auth()->user()->unreadNotifications->find($request->id);
        if ($notification) {
            $notification->markAsRead();
            $data = new NotificationsResource($notification);
            return $this->sendResponse($data, __('The notification is read successfully.'));
        }
        return $this->sendError(__('Sorry not found'));
    }
}
